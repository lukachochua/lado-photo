/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'custom': ['Helvetica Neue Regular', 'sans-serif'],
      },

      height: {
        '200': '60vh',
      },

      width: {
        '100': '105vh',
        '200': '129vh'
      }
    },
  },
  
  plugins: [],
}
