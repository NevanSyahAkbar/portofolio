/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'dark-obsidian': '#080808',
        'gold-glow': '#d4af37',
      },
      backgroundImage: {
        'gold-gradient': 'linear-gradient(to right, #d4af37, #f2d06b)',
      }
    },
  },
  plugins: [],
}
