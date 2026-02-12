const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

const root = process.cwd();
const imgsDir = path.join(root, 'imgs');
const backupDir = path.join(root, 'imgs_legacy');

const exts = new Set(['.jpg', '.jpeg', '.png', '.webp']);

function ensureDir(dir) {
  fs.mkdirSync(dir, { recursive: true });
}

function copyDir(src, dest) {
  ensureDir(dest);
  for (const entry of fs.readdirSync(src, { withFileTypes: true })) {
    const srcPath = path.join(src, entry.name);
    const destPath = path.join(dest, entry.name);
    if (entry.isDirectory()) {
      copyDir(srcPath, destPath);
    } else if (entry.isFile()) {
      fs.copyFileSync(srcPath, destPath);
    }
  }
}

async function optimizeFile(filePath) {
  const ext = path.extname(filePath).toLowerCase();
  const image = sharp(filePath, { failOn: 'none' });

  if (ext === '.png') {
    await image.png({ compressionLevel: 9, quality: 90 }).toFile(filePath + '.tmp');
  } else if (ext === '.webp') {
    await image.webp({ quality: 82 }).toFile(filePath + '.tmp');
  } else {
    await image.jpeg({ quality: 82, mozjpeg: true }).toFile(filePath + '.tmp');
  }

  fs.renameSync(filePath + '.tmp', filePath);
}

async function walk(dir) {
  const entries = fs.readdirSync(dir, { withFileTypes: true });
  for (const entry of entries) {
    const full = path.join(dir, entry.name);
    if (entry.isDirectory()) {
      if (entry.name === 'imgs_legacy') continue;
      await walk(full);
    } else if (entry.isFile()) {
      if (exts.has(path.extname(entry.name).toLowerCase())) {
        await optimizeFile(full);
      }
    }
  }
}

(async () => {
  if (!fs.existsSync(imgsDir)) {
    console.error('No se encontró la carpeta imgs/');
    process.exit(1);
  }

  if (!fs.existsSync(backupDir)) {
    console.log('Creando respaldo en imgs_legacy/...');
    copyDir(imgsDir, backupDir);
  } else {
    console.log('Respaldo ya existe: imgs_legacy (no se sobrescribe).');
  }

  console.log('Optimizando imágenes en imgs/...');
  await walk(imgsDir);
  console.log('Listo.');
})();
