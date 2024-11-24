// tailwind.config.js
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    // Your Tailwind CSS configuration
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    plugins: [],
};
