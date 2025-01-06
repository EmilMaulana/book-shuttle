/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html,js}", "./node_modules/flowbite/**/*.js"],
  theme: {
    colors: {
      'bg-body': '#f2f3f3',
      'bg-container': '#ffffff',
      'carousel-hover-button': '#f1b10f',
      'ligth-red': '#e33320',
      'mid-black': '#303030',
      'grey': '#dddfe0'
    },
    fontFamily: {
      "poppins": '"Poppins"'
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

