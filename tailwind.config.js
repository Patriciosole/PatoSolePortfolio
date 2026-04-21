/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.html',
    './*.php',
    './assets/**/*.{js,css}'
  ],
  theme: {
    extend: {
      colors: {
        'brand-blue': '#4479CE',
        'brand-navy': '#0f172a',
      },
      fontFamily: {
        sans: ['Lato', 'system-ui', '-apple-system', 'sans-serif'],
        heading: ['Maven Pro', 'system-ui', '-apple-system', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
