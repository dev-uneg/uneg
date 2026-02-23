// Este script optimiza las imágenes del proyecto usando Sharp.
// Qué hace exactamente:
// 1) Crea un respaldo completo de la carpeta imgs/ en imgs_legacy/ si aún no existe.
// 2) Recorre de forma recursiva imgs/ (excepto el respaldo) y optimiza los archivos
//    .jpg/.jpeg/.png/.webp en sitio, reemplazando el archivo original por uno comprimido.
// 3) Mantiene los nombres y rutas originales para no romper referencias en el sitio.
// Nota: Se usa un archivo temporal por imagen para evitar corrupción si algo falla.

const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

// Rutas base del proyecto y carpetas de trabajo.
const root = process.cwd();
const imgsDir = path.join(root, 'imgs');
const backupDir = path.join(root, 'imgs_legacy');

// Extensiones soportadas para optimización.
const exts = new Set(['.jpg', '.jpeg', '.png', '.webp']);

// Crea una carpeta si no existe (recursivo).
function ensureDir(dir) {
  fs.mkdirSync(dir, { recursive: true });
}

// Copia recursiva de directorios para crear el respaldo.
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

// Optimiza un archivo individual según su extensión.
// PNG: mayor compresión, mantiene transparencia.
// WEBP/JPEG: ajusta calidad para reducir peso sin pérdida visual fuerte.
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

// Recorre carpetas de forma recursiva y optimiza solo archivos válidos.
// Se salta imgs_legacy para no tocar el respaldo.
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

// Ejecución principal:
// 1) Validar que exista imgs/
// 2) Crear respaldo si no existe
// 3) Optimizar todo imgs/
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
