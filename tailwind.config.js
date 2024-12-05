/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/*.php",
    "./pages/*.html",
    "./index.html"
  ],
  plugins: [
    require('@tailwindcss/forms'),
  ],
  darkMode: 'class',
  theme: {
    extend: {
      fontFamily: {
        roboto: ["Roboto", 'serif'],
        caveat: ["Caveat", 'serif']
      }
    },
  },
}

