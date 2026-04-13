const fs = require('fs');
const path = require('path');

const iconNames = [
  'alert-triangle',
  'arrow-left',
  'arrow-right',
  'book',
  'book-open',
  'brain',
  'briefcase',
  'building-2',
  'calculator',
  'calendar',
  'calendar-days',
  'check',
  'check-circle',
  'chevron-down',
  'chevron-left',
  'chevron-right',
  'clock-3',
  'cloud',
  'cpu',
  'download',
  'earth',
  'external-link',
  'eye',
  'facebook',
  'file-chart-column',
  'file-text',
  'file-user',
  'files',
  'filter',
  'folder',
  'gift',
  'globe',
  'graduation-cap',
  'headset',
  'info',
  'inbox',
  'instagram',
  'key-round',
  'layout-grid',
  'layout-dashboard',
  'lightbulb',
  'line-chart',
  'linkedin',
  'list-checks',
  'log-out',
  'mail',
  'mail-search',
  'mail-open',
  'map',
  'map-pin',
  'medal',
  'megaphone',
  'menu',
  'message-square-text',
  'message-circle',
  'monitor',
  'music',
  'newspaper',
  'pencil',
  'pencil-ruler',
  'phone',
  'play',
  'printer',
  'scale',
  'school',
  'send',
  'shield-check',
  'search',
  'tag',
  'trash-2',
  'twitter',
  'rotate-ccw',
  'utensils-crossed',
  'user',
  'user-check',
  'user-cog',
  'users',
  'x',
  'youtube'
];

const rootDir = path.resolve(__dirname, '..', '..');
const iconDir = path.join(rootDir, 'node_modules', 'lucide-static', 'icons');
const outDir = path.join(rootDir, '_assets', 'vendor', 'lucide');
const outFile = path.join(outDir, 'lucide-sprite.svg');

if (!fs.existsSync(iconDir)) {
  throw new Error('No se encontro node_modules/lucide-static/icons. Ejecuta npm install.');
}

const symbols = iconNames.map((name) => {
  const file = path.join(iconDir, `${name}.svg`);
  if (!fs.existsSync(file)) {
    throw new Error(`Icono no encontrado: ${name}`);
  }

  const svg = fs.readFileSync(file, 'utf8');
  const viewBoxMatch = svg.match(/viewBox="([^"]+)"/i);
  const bodyMatch = svg.match(/<svg[^>]*>([\s\S]*?)<\/svg>/i);

  if (!viewBoxMatch || !bodyMatch) {
    throw new Error(`SVG invalido para icono: ${name}`);
  }

  const body = bodyMatch[1].trim();
  return `  <symbol id="lucide-${name}" viewBox="${viewBoxMatch[1]}">${body}</symbol>`;
});

const sprite = [
  '<svg xmlns="http://www.w3.org/2000/svg" style="display:none">',
  ...symbols,
  '</svg>',
  ''
].join('\n');

fs.mkdirSync(outDir, { recursive: true });
fs.writeFileSync(outFile, sprite, 'utf8');
console.log(`Sprite generado: ${outFile}`);
