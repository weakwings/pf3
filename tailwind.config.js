/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.php", "./*.php"],
  theme: {
    extend: {
      fontFamily: {
        custom: [ 'Roboto Condensed', 'sans-serif'],
      },
    },
  },
  plugins: [],
}