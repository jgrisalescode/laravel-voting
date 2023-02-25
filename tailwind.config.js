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
                custom: '68.5rem'
            },
            spacing: {
                70: '17.5rem',
                76: '19rem',
                104: '26rem',
                175: '43.75rem'
            },
            colors: {
                'gray-background': '#f7f8fc',
                'blue': '#328af1',
                'blue-hover': '#2879bd',
                'yellow': '#ffc73c',
                'red': '#ec454f',
                'red-100': '#fee2e2',
                'green': '#1aab8b',
                'green-50': '#f0fdf4',
                'purple': '#8b60ed',
            },
            boxShadow: {
                card: '4px 4px 15px 0 rgba(36, 37, 38, 0.08)',
                dialog: '3px 4px 15px 0 rgba(36, 37, 38, 0.22)',
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],
};
