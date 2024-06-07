$(document).ready(function () {
    $('#form-nuevo-anuncio').on('submit', function (e) {
        e.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

        var comentario = $('#comment_box').val();
        var idMonitoria = getParametroURL('idGrupo'); // Asumiendo que el ID del grupo está en la URL

        if (comentario && idMonitoria) {
            $.ajax({
                url: '/../../controllers/action/agregarAnuncio.php',
                method: 'POST',
                data: {
                    comentario: comentario,
                    idMonitoria: idMonitoria
                },
                success: function (response) {
                    const res = JSON.parse(response);
                    if (res.status === 'success') {
                        console.log('Anuncio agregado exitosamente');
                        // Opcional: actualizar la lista de anuncios en la página sin recargar
                        // obtenerAnuncios(idMonitoria);
                        window.location.reload() ;
                    } else {
                        console.error('Error:', res.message);
                    }
                },
                error: function (xhr) {
                    console.error('Ocurrió un error:', xhr.status, xhr.statusText);
                }
            });
        } else {
            console.error('Falta el comentario o el ID de la monitoria.');
        }
    });

    function getParametroURL(nombre) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        return urlParams.get(nombre);
    }
});