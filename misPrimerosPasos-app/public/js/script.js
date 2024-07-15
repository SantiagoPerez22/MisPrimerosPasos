console.log("JavaScript cargado");

const sidebarToggle = document.querySelector("#sidebar-toggle");
if (sidebarToggle) {
    sidebarToggle.addEventListener("click", function () {
        document.querySelector("#sidebar").classList.toggle("collapsed");
    });
} else {
    console.log("sidebar-toggle no encontrado");
}

document.querySelector(".theme-toggle").addEventListener("click", () => {
    toggleLocalStorage();
    toggleRootClass();
});

document.addEventListener('DOMContentLoaded', function () {
    const themeToggleSwitch = document.getElementById('flexSwitchCheckChecked');

    if (themeToggleSwitch) {
        themeToggleSwitch.addEventListener('change', function () {
            if (this.checked) {
                document.documentElement.setAttribute('data-bs-theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-bs-theme', 'light');
            }
        });
    } else {
        console.warn('El elemento con id "flexSwitchCheckChecked" no existe en el DOM.');
    }
});


function toggleRootClass() {
    const current = document.documentElement.getAttribute('data-bs-theme');
    const inverted = current === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-bs-theme', inverted);
}

function toggleLocalStorage() {
    if (isLight()) {
        localStorage.removeItem("light");
    } else {
        localStorage.setItem("light", "set");
    }
}

function isLight() {
    return localStorage.getItem("light");
}

// No es necesario repetir la lógica del tema aquí
