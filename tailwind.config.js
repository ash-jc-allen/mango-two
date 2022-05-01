const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                dark: '#251F2D',
                'really-dark': '#18161B',
                'light-orange': '#FBBF24',
                'dark-orange': '#F66262',
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    safelist: process.env.NODE_ENV === 'development' ? [{ pattern: /.*/ }] : [],
};
