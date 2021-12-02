
module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'tisa-sans': ['ff-tisa-sans-web-pro'],
      },
      colors: {
        'apricot': '#FFCDB2',
        'melon': '#ffb4a2',
        'pastel-pink': '#e5989b',
        'english-lavender': '#B5838D',
        'old-lavender': '#6D6875'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio')
  ],
};
