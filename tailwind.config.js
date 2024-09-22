/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./**/*.html", "./**/*.html", "./tw-uncontrolled.css"],
  theme: {
    extend: {},
    screens: {
      'tab': '640px',
      // => @media (min-width: 640px) { ... }

      'pc': '1024px',
      // => @media (min-width: 1024px) { ... }

      'pc-lg': '1280px',
      // => @media (min-width: 1280px) { ... }
    },
  },
  plugins: [],
}

