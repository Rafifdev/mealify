import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import plugin from "tailwindcss";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: "#e9560c",
                    dark: "#f78e37",
                },
                secondary: {
                    DEFAULT: "#171717",
                    btn_light: "#fafafa",
                    dark: "#fafafa",
                },
                backgorund: {
                    light: "#f4f0ee",
                    lightv2: "#fafafa",
                    dark: "#171717",
                    darkv2: "#242424",
                },
                border: {
                    DEFAULT: "#d4d4d4",
                    dark: "#4b5563",
                },
            },
            keyframes: {
                float: {
                    "0%, 100%": { transform: "translateY(0)" },
                    "50%": { transform: "translateY(-8px)" },
                },
            },
            animation: {
                float: "float 2s ease-in-out infinite",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
    darkMode: "class",
};
