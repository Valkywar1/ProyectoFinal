import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './public/pages/**/*.html',
    ],

    theme: {
        screen: {
            sm: "576px",
            md: "768px",
            lg: "992px",
            xl: "1200px",
          },
          container: {
            center: true,
            padding: "1rem",
          },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ["Poppins", "sans-serif"],
                roboto: ["Roboto", "sans-serif"],
            },
            colors: {
                primary: "#fd3d57",
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        forms, typography
    ],
};