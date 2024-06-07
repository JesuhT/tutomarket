


$(document).ready(function () {

    function getParametroURL(nombre) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        return urlParams.get(nombre);
    }
    
    // Ejemplo de uso para obtener el valor de 'id' desde la URL
    var idurl= getParametroURL('id');
    console.log('ID de monitoria:', idurl);
    // Obtener el Id_Monitoria desde la URL
    var idMonitoria = idurl;

    if (idMonitoria) {
        console.log('ID de monitoria:', idMonitoria);
        $.ajax({
            url: '/../../controllers/action/verGrupoporIdPlay.php?Id_Monitoria='+idMonitoria, // Nomb
            success: function (result) {
                console.log(result);
                insertarGruposEnPagina(JSON.parse(result));
            },
            error: function (xhr) {
                alert("Ocurrió un error: " + xhr.status + " " + xhr.statusText);
            }
        });
    } else {
        $('#grupo-info').html('<p>No se proporcionó un ID de grupo válido.</p>');
    }
});


function insertarGruposEnPagina(result) {
    console.log(result);
    console.log(result.ruta_imagen);
    let contenedor = $('#grupo-info');
    contenedor.empty(); // Limpiar el contenedor
    gru(result);
    // Iterar sobre cada grupo en el resultado
    function gru (result) {
        let box = `
        <div class="row">
            <div class="column">
                <div class="thumb">
                    <img src="../${result.ruta_imagen}" alt="Imagen">
                    <span>${result.Fecha}</span>
                </div>
            </div>
            <div class="column">
                <div class="tutor">
                    <img src="../assets/img/people/pic-${result.Id_Monitor}.jpg" alt="">
                    <div>
                        <h3>${result.Nombre_Monitor}</h3>
                        <span>${result.Fecha}</span>
                    </div>
                </div>
                <div class="details" >
                    <h3>${result.Materia}</h3>
                    <p>${result.Descripcion}</p>
                    <div style="display: flex;">
                    <a href="teacher_profile.php" class="inline-btn">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
        `;
        contenedor.append(box); // Agregar el contenido al contenedor
    };
}

