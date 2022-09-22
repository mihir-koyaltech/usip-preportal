/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

const colors = require('tailwindcss/colors')

module.exports = {
  theme: {
    extend: {
      colors: {
        amber: colors.amber,
        emerald: colors.emerald,
      }
    }
  }
}