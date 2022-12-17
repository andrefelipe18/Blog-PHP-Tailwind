/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['*.php', 'templates/*.php'],
  theme: {
    extend: {
      fontFamily: {
       poppins: ['Poppins', 'sans-serif'],
      },
      fontSize: {
        '7xl': '3rem',
      }
    },
  },
  plugins: [],
}
