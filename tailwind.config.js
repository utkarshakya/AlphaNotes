/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "index.{php, html}",
    "./pages/*.{php, html}",
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
