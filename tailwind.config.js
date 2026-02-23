/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './app/bootstrap.php',
    './app/pages/**/*.php'
  ],
  theme: {
    extend: {
      colors: {
        brandBlue: '#0d4fb6',
        brandBlueDark: '#0b3f93',
        brandYellow: '#f2c027'
      }
    }
  },
  plugins: []
};
