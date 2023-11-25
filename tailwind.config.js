/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        sans:["Montserrat", "sans-serif"],
        sans:["Gruppo", "sans-serif"],
        sans:["Rajdhani", "sans-serif"]
      }
    },
  },
  plugins: [],
}
