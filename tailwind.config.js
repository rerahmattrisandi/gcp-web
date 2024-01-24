const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            backgroundImage: {
                'wavy-pattern': "url('../public/img/wave.png')",
            },

            fontFamily: {
                'cascadia-code': ['Source Code Pro', 'monospace'],
                'poppins': ['Poppins', 'sans-serif'],
            },

            animation: {
                'wave-linear-infinite': 'wave 30s linear infinite',
            },

            keyframes: {
                wave: {
                    '0%': { 'background-position': '0 0' },
                    '100%': { 'background-position': '1360px 0' },
                },
            },

            animationDelay: {
                500: '5s',
            },

            colors: {
                'putih': '#ffffff',
                'hitam': '#000000',
                'sage-green': '#3E432E',
                'sage-green-2': '#616F39',
                'light-sage-green': '#A7D129',
                'biru-gelap': '#150050',
                'ungu-gelap': '#3F0071',
                'biru-terang': '#8BBCCC',
                'grey': '#A9A9A9',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
