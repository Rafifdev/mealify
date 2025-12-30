import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

if (
    localStorage.getItem("color-theme") === "dark" ||
    (!localStorage.getItem("color-theme") &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

// DARK MODE TOGGLE BUTTON
document.addEventListener("DOMContentLoaded", () => {
    const themeToggleDarkIcon = document.getElementById(
        "theme-toggle-dark-icon"
    );
    const themeToggleLightIcon = document.getElementById(
        "theme-toggle-light-icon"
    );
    const themeToggleBtn = document.getElementById("theme-toggle");

    if (!themeToggleDarkIcon || !themeToggleLightIcon || !themeToggleBtn) {
        // Jika elemen tidak ditemukan, jangan lanjut supaya gak error
        return;
    }

    // Tampilkan icon sesuai tema yang tersimpan / preferensi sistem
    if (
        localStorage.getItem("color-theme") === "dark" ||
        (!localStorage.getItem("color-theme") &&
            window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
        themeToggleLightIcon.classList.remove("hidden");
    } else {
        themeToggleDarkIcon.classList.remove("hidden");
    }

    themeToggleBtn.addEventListener("click", () => {
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
