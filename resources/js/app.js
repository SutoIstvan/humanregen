import './bootstrap';

import * as bootstrap from 'bootstrap';

import AOS from 'aos';
import 'aos/dist/aos.css';

// AOS init

AOS.init();

// Button to top
let mybutton = document.getElementById("btn-back-to-top");

window.onscroll = function () {
scrollFunction();
};

function scrollFunction() {
if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
) {
    mybutton.style.display = "block";
} else {
    mybutton.style.display = "none";
}
}

mybutton.addEventListener("click", backToTop);

function backToTop() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}

// Button to top end


// Функция для установки темы
function setTheme(theme) {
    document.body.setAttribute('data-bs-theme', theme);
}

// Определите предпочтение темы
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

// Установите тему в зависимости от системных настроек
if (prefersDarkScheme.matches) {
    setTheme('dark');
} else {
    setTheme('light');
}

// Опционально: добавьте обработчик для динамического обновления темы при изменении системных настроек
prefersDarkScheme.addEventListener('change', (e) => {
    if (e.matches) {
        setTheme('dark');
    } else {
        setTheme('light');
    }
});
// Функция для установки темы END
