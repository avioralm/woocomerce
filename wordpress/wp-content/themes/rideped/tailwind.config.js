/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./template-parts/*.{php,html,js}", "./*.{php,html,js}"],
  theme: {
    screens: {
      'md': '768px',    // Medium: ≥768px
      'lg': '992px',    // Large: ≥992px
      'xl': '1200px',   // X-Large: ≥1200px
      '2xl': '1400px',  // XX-Large: ≥1400px
    },
    extend: {
      container: {
        center: true,
      },
    },
  },
  plugins: [],
}