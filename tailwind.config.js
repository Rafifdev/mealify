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
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
