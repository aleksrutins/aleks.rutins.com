/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./app/View/Components/**/*.php"
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ['Figtree', 'Cantarell', '-apple-system', 'sans-serif']
        }
    },
  },
  plugins: [],
}

