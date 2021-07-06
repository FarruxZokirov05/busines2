const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
        backgroundColor: ['hover', 'responsive', ' focus', 'dark', 'dark-hover'],
      textColor: ['hover', 'responsive', 'focus', 'dark', 'dark-hover'],
    },

    plugins: [require('@tailwindcss/forms')],
    plugins: [require('tailwindcss-dark-mode')()],
};
