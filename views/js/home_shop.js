$(document).ready(function () {
    function getParametroURL(nombre) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        return urlParams.get(nombre);
    }
    var nameurl = getParametroURL('nombre');
    console.log('Nombew peoducto:', nameurl);

    
    if (nameurl) {
        ajaxBuscarArticulo(nameurl);
    } else {
        ajaxVerGrupos();
    }
});

function ajaxVerGrupos() {
    $.ajax({
        url: "/../../controllers/action/ver-articulosHome.php",
        success: function (result) {
            console.log(result);
            insertarArticulosEnPagina(JSON.parse(result));
        },
        error: function (xhr) {
            alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
        }
    });
}

function ajaxBuscarArticulo(nameurl) {
    
}

function insertarArticulosEnPagina(result) {
    console.log(result);
    let contenedor = $('#Grupos-box');
    contenedor.empty(); // Limpiar el contenedor

    $.each(result, function (i, articulo) {
        let box = `
        <div class="box">
            <div class="tutor">
                <img src="../assets/img/people/pic-${articulo.ID_Articulo}.jpg" alt="">
                <div class="info">
                    <h3>${articulo.Vendedor}</h3>
                    <span>${articulo.Fecha}</span>
                </div>
            </div>
            <div class="thumb">
                <img src="${articulo.ruta_imagen}" alt="">
                <span>${articulo.articulo}</span>
            </div>
            <h3 class="title">${articulo.articulo}</h3>
            <a href="playlist_articulo.php?id=${articulo.ID_Articulo}" class="inline-btn">view playlist</a>
        </div>
        `;
        contenedor.append(box);
    });
}
