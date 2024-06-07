$(document).ready(function () {
    function getParametroURL(nombre) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        return urlParams.get(nombre);
    }

    var idGrupo = getParametroURL('idGrupo');
    var idUsuario = getParametroURL('idUsuario');

    if (idGrupo && idUsuario) {
        // Verificar si el estudiante está en el grupo
        $.ajax({
            url: '/../../controllers/action/verificarEstudiante.php',
            method: 'GET',
            data: {
                idGrupo: idGrupo,
                idUsuario: idUsuario
            },
            success: function (response) {
                const res = JSON.parse(response);
                if (res.status === 'success') {
                    console.log('Usuario no está en el grupo');
                    // Agregar usuario al grupo
                    agregarUsuarioAGrupo(idGrupo, idUsuario);
                } else {
                    console.error('Error:', res.message);
                    alert(res.message);  // Mostrar el mensaje de error al usuario
                }
            },
            error: function (xhr) {
                console.error('Ocurrió un error:', xhr.status, xhr.statusText);
            }
        });
    } else {
        console.error('ID de grupo o usuario no proporcionado.');
    }

    function agregarUsuarioAGrupo(idGrupo, idUsuario) {
        $.ajax({
            url: '/../../controllers/action/agregarUsuarioAGrupo.php',
            method: 'GET',
            data: {
                idGrupo: idGrupo,
                idUsuario: idUsuario
            },
            success: function (response) {
                const res = JSON.parse(response);
                if (res.status === 'success') {
                    console.log('Usuario agregado al grupo exitosamente');
                    // Obtener y mostrar la información del grupo y los anuncios
                } else {
                    console.error('Error:', res.message);
                }
            },
            error: function (xhr) {
                console.error('Ocurrió un error:', xhr.status, xhr.statusText);
            }
        });
    }

    
});
