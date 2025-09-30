import { createIcons, Eye, EyeOff } from "lucide";

document.addEventListener("DOMContentLoaded", function () {
    // Инициализация иконок при загрузке страницы
    createIcons({
        icons: {
            Eye,
            EyeOff,
        },
    });

    initializeVisualEffects();
});

function togglePassword() {
    const passInput = document.getElementById("password");
    const toggleIcon = document.getElementById("toggleIcon");

    if (passInput.type === "password") {
        passInput.type = "text";
        toggleIcon.setAttribute("data-lucide", "eye-off");
    } else {
        passInput.type = "password";
        toggleIcon.setAttribute("data-lucide", "eye");
    }

    const oldSvg = toggleIcon.querySelector("svg");
    if (oldSvg) {
        oldSvg.remove();
    }

    createIcons({
        icons: {
            Eye,
            EyeOff,
        },
    });
}

function updateProgress() {
    const inputs = [
        document.getElementById("name"),
        document.getElementById("email"),
        document.getElementById("password"),
        document.getElementById("password_confirmation"),
    ];
    const checkbox = document.getElementById("terms");
    const progressFill = document.getElementById("progressFill");

    let filled = 0;
    const totalFields = 5;

    inputs.forEach((input) => {
        if (input && input.value.trim() !== "") filled++;
    });

    if (checkbox && checkbox.checked) filled++;

    const percent = (filled / totalFields) * 100;
    if (progressFill) {
        progressFill.style.width = `${percent}%`;

        // Анимация цвета прогресс-бара
        if (percent < 30) {
            progressFill.style.backgroundColor = "#dc3545";
        } else if (percent < 70) {
            progressFill.style.backgroundColor = "#ffc107";
        } else {
            progressFill.style.backgroundColor = "#28a745";
        }
    }
}

function initializeVisualEffects() {
    const togglePasswordBtn = document.querySelector(".toggle-password");
    if (togglePasswordBtn) {
        togglePasswordBtn.addEventListener("click", togglePassword);
    }

    const inputs = [
        document.getElementById("name"),
        document.getElementById("email"),
        document.getElementById("password"),
        document.getElementById("password_confirmation"),
    ];
    const checkbox = document.getElementById("terms");

    if (inputs.every((input) => input !== null)) {
        inputs.forEach((input) => {
            input.addEventListener("input", updateProgress);

            input.addEventListener("focus", function () {
                this.style.transform = "scale(1.02)";
                this.style.transition = "transform 0.2s ease";
            });
            input.addEventListener("blur", function () {
                this.style.transform = "scale(1)";
            });
        });
    }

    if (checkbox) {
        checkbox.addEventListener("change", updateProgress);
    }

    // Анимация кнопки
    const submitBtn = document.querySelector(".btn-register");
    if (submitBtn) {
        submitBtn.addEventListener("mouseenter", function () {
            this.style.transform = "translateY(-2px)";
            this.style.boxShadow = "0 4px 12px rgba(0,0,0,0.15)";
            this.style.transition = "all 0.3s ease";
        });
        submitBtn.addEventListener("mouseleave", function () {
            this.style.transform = "translateY(0)";
            this.style.boxShadow = "0 2px 8px rgba(0,0,0,0.1)";
        });
    }

    // Плавное появление формы
    const registerCard = document.querySelector(".register-card");
    if (registerCard) {
        registerCard.style.opacity = "0";
        registerCard.style.transform = "translateY(20px)";
        registerCard.style.transition = "all 0.5s ease";

        setTimeout(() => {
            registerCard.style.opacity = "1";
            registerCard.style.transform = "translateY(0)";
        }, 100);
    }

    // Инициализируем прогресс-бар при загрузке
    updateProgress();
}
