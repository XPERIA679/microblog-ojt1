/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
      },
      colors: {
        'Raisin Black': '#252323',
        'Slate Gray': '#70798c',
        'Bone': '#dad2bc',
        'Isabelline': '#f5f1ed',
      },
    extend: {},
  },
  plugins: [],
}

