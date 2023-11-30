/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        container: {
            center: true,
            padding: '16px',
        },
        extend: {
            fontFamily: {
                aquire: ['Aquire'],
                sans: ['Outfit', 'sans-serif'],
            },
            colors: {
                primary: '#FD65F6',
                hover: '#BF48BA',
                darkhover: '#1F2937',
                dark: '#151326',
            },
            screens: {
                '2xl': '1320px',
            },
            gridTemplateColumns: {
                '10': 'repeat(10, minmax(0, 1fr))',
            },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}
