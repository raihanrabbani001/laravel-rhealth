const colors = require('tailwindcss/colors');

/* @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        fontFamily: {
            display: ['Inter', 'system-ui', 'sans-serif'],
            body: ['Inter', 'system-ui', 'sans-serif'],
        },
        colors: {
            ...colors,
            primary: '#50A060',
            secondary: '#8091b3',
            primaryContainer: '#1A202C',
            secondaryContainer: '#263238 ',
        },
    },

    plugins: [
        require('flowbite/plugin'),
    ],
};