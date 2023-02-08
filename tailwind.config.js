const defaults = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {

  content: require('fast-glob').sync([
    // 'source/**/*.html',
    'source/**/*.md',
    'source/**/*.js',
    'source/**/*.php',
    'source/**/*.vue',
    './source/**/*.{html,js,vue}'
  ]),
  theme: {
    extend: {
      fontFamily: {
        sans: ['"open_sansregular"', ...defaults.fontFamily.sans],
        sanslight: ['"open_sanslight"', ...defaults.fontFamily.sans],
      },
      lineHeight: {
        normal: '1.6',
        loose: '1.75',
      },
      maxWidth: {
        '8xl': '88rem',
      },
      boxShadow: {
        search: '0 -1px 27px 0 rgba(0, 0, 0, 0.04), 0 4px 15px 0 rgba(0, 0, 0, 0.08)',
      },
      colors: {
        main: {
          '50': '#fdfef6',
          '100': '#f3facc',
          '200': '#e9f2a6',
          '300': '#dfe882',
          '400': '#d4da62',
          '500': '#cad13d',
          '600': '#adb333',
          '700': '#8f9429',
          '800': '#72761f',
          '900': '#545715',
        },
        slate: colors.neutral,
      }
    },
    fontSize: {
      xs: '.8rem',
      sm: '.925rem',
      base: '1rem',
      lg: '1.125rem',
      xl: '1.25rem',
      '2xl': '1.5rem',
      '3xl': '1.75rem',
      '4xl': '2.125rem',
      '5xl': '2.625rem',
      '6xl': '10rem',
    },
  },
  variants: {
    extend: {
      width: ['focus'],
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    // ...
  ],
};
