/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'blue-black': '#021C1E',
                'cadet-blue': '#004445',
                'rain': '#2C7873',
                'greenery': '#6FB98F',
            }
        },
    },
    plugins: [],
};
