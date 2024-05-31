$(document).ready(function () {
    ajaxVerGrupos();
});

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

function insertarGruposEnPagina(result) {
    console.log(result);
    let contenedor = $('#Grupos-box');
    contenedor.empty(); // Limpiar el contenedor

    $.each(result, function (i, grupo) {
        let box = `
        
        <div class="box">
            <div class="tutor">
                <img src="../assets/img/people/pic-${grupo.Id_Monitor}.jpg" alt="">
                <div class="info">
                    <h3>${grupo.Nombre_Monitor}
                    </h3>
                    <span>${grupo.Fecha}</span>
                </div>
            </div>
            <div class="thumb">
                <img src="${grupo.ruta_imagen}" alt="">
                <span>${grupo.Materia}</span>
            </div>
            <h3 class="title">${grupo.Materia}</h3>
            <a href="playlist.php?id=${grupo.Id_Monitoria}" class="inline-btn">view playlist</a>
        </div>
        `;
        contenedor.append(box);
    });
}
