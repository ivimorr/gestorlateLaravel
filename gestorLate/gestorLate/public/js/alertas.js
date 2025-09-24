function confirmarCancelacion(event, element) {
    event.preventDefault();
    const url = element.getAttribute('href');

    Swal.fire({
        title: '¿Estás seguro?',
        text: "Se perderán los cambios no guardados.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, cancelar',
        cancelButtonText: 'No, seguir editando',
        customClass: {
            popup: 'swal-cancel-popup',
            title: 'swal-cancel-title',
            htmlContainer: 'swal-cancel-text',
            confirmButton: 'swal-cancel-confirm',
            cancelButton: 'swal-cancel-cancel',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url;
        }
    });
}


document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.form-eliminar');

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Avoid immediate shipping

            Swal.fire({
                title: '¿Desea eliminar este elemento?',
                text: 'Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                customClass: {
                    popup: 'swal-cancel-popup',
                    title: 'swal-cancel-title',
                    htmlContainer: 'swal-cancel-text',
                    confirmButton: 'swal-cancel-confirm',
                    cancelButton: 'swal-cancel-cancel',
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Only sent if confirmed
                }
            });
        });
    });
});

