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
        '200': '50vh',
      },
    },
  },
  
  plugins: [],
}
