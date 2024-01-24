/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {

      colors: {
        'primary': '#3C6E0F',
       'secondary': '#F2C94C',
        'tertiary': '#FFF112',
        'background': '#FCEDC6',
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

