const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flowbite/**/*.js'
    ],

    theme: {
        extend: {
           container: {
                // center: true,
                padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
                },
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                // font-family: 'Inter', sans-serif;
            },
            boxShadow: {
            // "3xl": "0 -5px 10px rgba(0, 0, 0, 0.1)",
            "3xl": "0 5px 15px 0 rgb(0 0 0 / 8%)",
        },
         colors: {
            holy: "#fafafa",
            "holy-blur": "#f2f2f2",
            primary: "#0d6efd",
            dark: "#1e293b",
            "dark-scy": "#132c33",
            info: "#0dcaf0",
            warning: "#ffc107",
            danger: "#dc3545",
            secondary: "#4b5563",
            graysly: "#cbd5e1",
            start: "#126e82",
            tailwind: "#06B6D4",
        },
    },
},

    plugins: [
        require('@tailwindcss/forms'),
        require('flowbite/plugin')
    ],
};
