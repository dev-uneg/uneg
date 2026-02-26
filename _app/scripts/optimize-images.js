// Optimiza imagenes de forma incremental y prioriza WebP sin duplicar almacenamiento.
// Flujo:
// 1) Detecta cambios con manifest (_app/scripts/optimize-images.manifest.json)
// 2) Si hay trabajo, crea respaldo completo de _imgs/ en imgs_legacy/imgs_legacy_DD-MM-YY_HHMMSS
// 3) .png/.jpg/.jpeg -> genera/actualiza .webp y elimina el original
// 4) .webp -> re-optimiza en sitio solo si cambio

const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

const root = process.cwd();
const imgsDir = path.join(root, '_imgs');
const backupsRoot = path.join(root, 'imgs_legacy');
const manifestPath = path.join(root, '_app', 'scripts', 'optimize-images.manifest.json');

const SOURCE_EXTS = new Set(['.jpg', '.jpeg', '.png', '.webp']);
const CONVERT_EXTS = new Set(['.jpg', '.jpeg', '.png']);

function ensureDir(dir) {
  fs.mkdirSync(dir, { recursive: true });
}

function copyDir(src, dest) {
  ensureDir(dest);
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);

    if (entry.isDirectory()) {
      if (entry.name === 'imgs_legacy') continue;
      copyDir(srcPath, destPath);
      continue;
    }

    if (entry.isFile()) {
      fs.copyFileSync(srcPath, destPath);
    }
  }
}

function stampNow() {
  const d = new Date();
  const pad = (n) => String(n).padStart(2, '0');
  const day = pad(d.getDate());
  const month = pad(d.getMonth() + 1);
  const year = String(d.getFullYear()).slice(-2);
  const hh = pad(d.getHours());
  const mm = pad(d.getMinutes());
  const ss = pad(d.getSeconds());
  return `${day}-${month}-${year}_${hh}${mm}${ss}`;
}

function loadManifest() {
  if (!fs.existsSync(manifestPath)) {
    return { version: 1, generatedAt: null, files: {} };
  }

  try {
    const raw = fs.readFileSync(manifestPath, 'utf8');
    const data = JSON.parse(raw);
    if (!data || typeof data !== 'object' || typeof data.files !== 'object') {
      return { version: 1, generatedAt: null, files: {} };
    }
    return data;
  } catch {
    console.warn('Manifest invalido; se recreara desde cero.');
    return { version: 1, generatedAt: null, files: {} };
  }
}

function saveManifest(manifest) {
  manifest.generatedAt = new Date().toISOString();
  fs.writeFileSync(manifestPath, JSON.stringify(manifest, null, 2) + '\n', 'utf8');
}

function fingerprint(stats) {
  return `${stats.size}:${Math.trunc(stats.mtimeMs)}`;
}

function listImageFiles(dir, out = []) {
  const entries = fs.readdirSync(dir, { withFileTypes: true });

  for (const entry of entries) {
    const full = path.join(dir, entry.name);

    if (entry.isDirectory()) {
      if (entry.name === 'imgs_legacy') continue;
      listImageFiles(full, out);
      continue;
    }

    if (!entry.isFile()) continue;

    const ext = path.extname(entry.name).toLowerCase();
    if (SOURCE_EXTS.has(ext)) {
      out.push(full);
    }
  }

  return out;
}

function relPosix(absPath) {
  return path.relative(root, absPath).split(path.sep).join('/');
}

function webpTargetFor(sourcePath) {
  const parsed = path.parse(sourcePath);
  return path.join(parsed.dir, `${parsed.name}.webp`);
}

async function optimizeWebpInPlace(filePath) {
  const tmp = `${filePath}.tmp`;
  await sharp(filePath, { failOn: 'none' })
    .webp({ quality: 82 })
    .toFile(tmp);
  fs.renameSync(tmp, filePath);
}

async function generateWebpFromSource(sourcePath, targetWebp) {
  const tmp = `${targetWebp}.tmp`;
  await sharp(sourcePath, { failOn: 'none' })
    .webp({ quality: 82 })
    .toFile(tmp);
  fs.renameSync(tmp, targetWebp);
}

function planTasks(files, manifest) {
  const tasks = [];

  for (const filePath of files) {
    const rel = relPosix(filePath);
    const ext = path.extname(filePath).toLowerCase();
    const stats = fs.statSync(filePath);
    const fp = fingerprint(stats);

    if (ext === '.webp') {
      const prev = manifest.files[rel];
      const unchanged = prev && prev.fingerprint === fp;

      if (!unchanged) {
        tasks.push({
          type: 'optimize-webp',
          filePath,
          rel,
        });
      }
      continue;
    }

    if (CONVERT_EXTS.has(ext)) {
      const targetWebp = webpTargetFor(filePath);
      const targetRel = relPosix(targetWebp);
      const sourcePrev = manifest.files[rel];
      const sourceChanged = !sourcePrev || sourcePrev.fingerprint !== fp;
      const targetExists = fs.existsSync(targetWebp);

      tasks.push({
        type: 'convert-to-webp',
        sourcePath: filePath,
        sourceRel: rel,
        targetWebp,
        targetRel,
        needEncode: sourceChanged || !targetExists,
      });
    }
  }

  return tasks;
}

(async () => {
  if (!fs.existsSync(imgsDir)) {
    console.error('No se encontro la carpeta _imgs/.');
    process.exit(1);
  }

  const manifest = loadManifest();
  const files = listImageFiles(imgsDir);
  const tasks = planTasks(files, manifest);

  if (tasks.length === 0) {
    console.log('Sin cambios: no hay imagenes nuevas/modificadas.');
    saveManifest(manifest);
    return;
  }

  ensureDir(backupsRoot);
  const backupName = `imgs_legacy_${stampNow()}`;
  const backupPath = path.join(backupsRoot, backupName);
  console.log(`Creando respaldo: ${relPosix(backupPath)}`);
  copyDir(imgsDir, backupPath);

  let processed = 0;
  let skippedEncode = 0;

  console.log('Procesando tareas...');

  for (const task of tasks) {
    try {
      if (task.type === 'optimize-webp') {
        await optimizeWebpInPlace(task.filePath);
        const stats = fs.statSync(task.filePath);
        manifest.files[task.rel] = {
          fingerprint: fingerprint(stats),
          output: task.rel,
          sourceExt: '.webp',
          optimizedAt: new Date().toISOString(),
        };
        processed += 1;
        console.log(`OK: ${task.rel} (webp)`);
        continue;
      }

      if (task.type === 'convert-to-webp') {
        if (task.needEncode) {
          await generateWebpFromSource(task.sourcePath, task.targetWebp);
        } else {
          skippedEncode += 1;
        }

        if (fs.existsSync(task.sourcePath)) {
          fs.unlinkSync(task.sourcePath);
        }

        const outStats = fs.statSync(task.targetWebp);
        manifest.files[task.targetRel] = {
          fingerprint: fingerprint(outStats),
          output: task.targetRel,
          sourceExt: '.webp',
          optimizedAt: new Date().toISOString(),
        };

        delete manifest.files[task.sourceRel];

        processed += 1;
        console.log(`OK: ${task.sourceRel} -> ${task.targetRel} (origen eliminado)`);
      }
    } catch (err) {
      const label = task.type === 'optimize-webp' ? task.rel : task.sourceRel;
      console.error(`ERROR: ${label} (${err.message})`);
    }
  }

  const remaining = new Set(listImageFiles(imgsDir).map(relPosix));
  for (const rel of Object.keys(manifest.files)) {
    if (!remaining.has(rel)) {
      delete manifest.files[rel];
    }
  }

  saveManifest(manifest);

  console.log('--- Resumen ---');
  console.log(`Tareas ejecutadas: ${tasks.length}`);
  console.log(`Procesadas: ${processed}`);
  console.log(`Reuso WebP existente (sin re-encode): ${skippedEncode}`);
  console.log(`Manifest: ${relPosix(manifestPath)}`);
  console.log('Listo.');
})();
