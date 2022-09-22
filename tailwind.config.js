/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/tailwind.blade.php',

  ],
  theme: {
    extend: {

      fontFamily: {
        google: ["Google", "cursive"],
      },

    },
  },
  plugins: [],
}