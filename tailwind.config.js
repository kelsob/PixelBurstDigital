import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
    ],
    theme: {
      extend: {
        colors: {
          'off-white': 'var(--off-white)',
          'off-white-light': 'var(--off-white-light)',
          'pastel-red': 'var(--pastel-red)',
          'deep-red': 'var(--deep-red)',
          'pastel-green': 'var(--pastel-green)',
          'deep-green': 'var(--deep-green)',
          'pastel-blue': 'var(--pastel-blue)',
          'deep-blue': 'var(--deep-blue)',
          // Ultra-light reds (RGB values)
          'red-25': 'rgb(255, 243, 243)',
          'red-50': 'rgb(255, 235, 235)',
          'red-75': 'rgb(255, 225, 225)',
          // Ultra-light greens
          'green-25': 'rgb(243, 255, 243)',
          'green-50': 'rgb(235, 255, 235)',
          'green-75': 'rgb(225, 255, 225)',
          // Ultra-light blues
          'blue-25': 'rgb(243, 243, 255)',
          'blue-50': 'rgb(235, 235, 255)',
          'blue-75': 'rgb(225, 225, 255)',
        },
        backgroundImage: {
          'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
        },
        fontFamily: {
          sans: ['Be Vietnam Pro', ...defaultTheme.fontFamily.sans],
        },
      },
    },
    plugins: [forms],
  }