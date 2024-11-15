/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./view/*.{html, php}"
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

