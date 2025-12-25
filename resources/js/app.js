import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// DARK MODE TOGGLE BUTTON
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});

// MOBILE NAVBAR
let isOpen = false;

document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("mobile-menu");
    const iconMenu = document.getElementById("icon-menu");
    const iconClose = document.getElementById("icon-close");

    if (btn && menu) {
        btn.addEventListener("click", () => {
            isOpen = !isOpen;

            iconMenu.classList.toggle("hidden", isOpen);
            iconClose.classList.toggle("hidden", !isOpen);
            menu.classList.toggle("hidden");
        });
    }
});
