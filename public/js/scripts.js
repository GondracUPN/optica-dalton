// resources/js/scripts.js

document.addEventListener('DOMContentLoaded', () => {
    // Script para el botón de alternancia del sidebar
    const toggleBtn = document.getElementById('toggle-btn');
    const sidebar = document.getElementById('sidebar');
    const contentWrapper = document.querySelector('.content-wrapper');

    if (toggleBtn && sidebar && contentWrapper) {
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            contentWrapper.classList.toggle('open');
        });
    }

    // Script para la búsqueda en la tabla
    const searchInput = document.getElementById('buscar-dni');
    const table = document.getElementById('clientes-table');
    const tableBody = table ? table.querySelector('tbody') : null;

    if (searchInput && tableBody) {
        searchInput.addEventListener('input', function() {
            const filter = searchInput.value.toUpperCase();
            const rows = tableBody.querySelectorAll('tr');

            rows.forEach(row => {
                const dni = row.cells[1].textContent.toUpperCase();
                if (dni.indexOf(filter) > -1) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }
});
// js/scripts.js
document.addEventListener('DOMContentLoaded', () => {
    const dniField = document.getElementById('dni');
    const telefonoField = document.getElementById('telefono');
    const edadField = document.getElementById('edad');

    dniField.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 8);
    });

    telefonoField.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 9);
    });

    edadField.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 3);
    });
});




