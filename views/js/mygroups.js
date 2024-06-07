$(document).ready(function() {
    $('#linkCrearGrupo').click(function(event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado del enlace

        // Mostrar el formulario
        $('#formCrearGrupo').removeClass('hide');
        $('.card').addClass('hide');
    });

    // Cuando se envíe el formulario de creación de grupo
    $('#formCrearGrupo').submit(function(event) {
        event.preventDefault(); // Prevenir envío por defecto del formulario

        // Obtener datos del formulario
        var formData = new FormData(this);

        // Enviar solicitud AJAX
        $.ajax({
            url: '/../../controllers/action/crearGrupo.php',
            method: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                try {
                    var res = JSON.parse(response);
                    if (res.status === 'success') {
                        // Mostrar alerta de éxito con SweetAlert2
                        Swal.fire({
                            icon: 'success',
                            title: 'Grupo creado',
                            text: res.message
                        }).then((result) => {
                            // Redirigir o realizar otras acciones después del éxito
                            window.location.href = 'mygroups.php'; // Redirigir a la página de grupos
                        });
                    } else {
                        // Mostrar alerta de error con SweetAlert2
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: res.message
                        });
                    }
                } catch (error) {
                    console.error('Error al procesar respuesta:', error);
                    // Mostrar alerta de error genérico con SweetAlert2
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocurrió un error al procesar la respuesta del servidor.'
                    });
                }
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud AJAX:', status, error);
                // Mostrar alerta de error de conexión con SweetAlert2
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocurrió un error en la conexión. Inténtalo de nuevo más tarde.'
                });
            }
        });
    });
});
