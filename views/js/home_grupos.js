$(document).ready(function () {
    function getParametroURL(nombre) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        return urlParams.get(nombre);
    }

    var materia = getParametroURL('buscar');
    console.log('Materia:', materia);

    if (materia) {
        ajaxBuscarMonitorias(materia);
    } else {
        ajaxVerGrupos();
    }

    function ajaxBuscarMonitorias(materia) {
        $.ajax({
            url: "/../../controllers/action/buscarMonitoriasPorMateria.php?buscar=" + (materia),
            success: function (response) {
                if (response) {
                    insertarGruposEnPagina(JSON.parse(response));
                } else {
                    let box =
                    
                    `<div class="box"><p>No se proporcionó un ID de grupo válido.</p></div>`;
                    contenedor.append(box);
                }
            },
            error: function (err) {
                console.error('Error:', err);
            }
        });
    }

    function ajaxVerGrupos() {
        $.ajax({
            url: "/../../controllers/action/verGrupos.php",
            success: function (result) {
                console.log(result);
                insertarGruposEnPagina(JSON.parse(result));
            },
            error: function (xhr) {
                alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
});

function insertarGruposEnPagina(result) {
    console.log("Grupos:", result);
    let contenedor = $('#Grupos-box');
    contenedor.empty(); // Limpiar el contenedor

    $.each(result, function (i, grupo) {
        let box = `
        <div class="box">
            <div class="tutor">
                <img src="../assets/img/people/pic-${grupo.Id_Monitor}.jpg" alt="">
                <div class="info">
                    <h3>${grupo.Nombre_Monitor}</h3>
                    <span>${grupo.Fecha}</span>
                </div>
            </div>
            <div class="thumb">
                <img src="${grupo.ruta_imagen}" alt="">
                <span>${grupo.Materia}</span>
            </div>
            <h3 class="title">${grupo.Materia}</h3>
            <a href="playlist.php?id=${grupo.Id_Monitoria}" class="inline-btn">Ver grupo</a>
        </div>
        `;
        contenedor.append(box);
    });
}
