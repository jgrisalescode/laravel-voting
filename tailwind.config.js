const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                custom: '62.5rem'
            },
            spacing: {
                70: '17.5rem',
                175: '43.75rem'
            },
            colors: {
                'blue': '#328af1',
                'blue-hover': '#2879bd',
                'yellow': '#ffc73c',
                'red': '#ec454f',
                'red-100': '#fee2e2',
                'green': '#1aab8b',
                'green-50': '#f0fdf4',
                'purple': '#8b60ed',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
