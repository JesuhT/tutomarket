$(document).ready(function () {
    var idGrupo = getParametroURL('idGrupo'); // Obtener el ID del grupo desde la URL

    if (idGrupo) {
        // Cargar anuncios del grupo
        cargarAnuncios(idGrupo);
        console.log(idGrupo);
    } else {
        console.error('ID de grupo no proporcionado.');
    }

    function cargarAnuncios(idGrupo) {
        $.ajax({
            url: '/../../controllers/action/verAnuncios.php',
            method: 'GET',
            data: { idGrupo: idGrupo },
            success: function (response) {
                console.log(response);
                var res = JSON.parse(response);
                if (res.length === 0) {
                    nohayanuncios();
                } else {
                mostrarAnuncios(JSON.parse(response));}
                
            },
            error: function (xhr) {
                console.error('Ocurrió un error al cargar los anuncios:', xhr.status, xhr.statusText);
            }
        });
    }
    obtenerInformacionGrupo(idGrupo);
    
    function obtenerInformacionGrupo(idGrupo) {
        $.ajax({
            url: '/../../controllers/action/verGrupoporIdPlay.php?Id_Monitoria=' + idGrupo,
            success: function (result) {
                mostrarInformacionGrupo(JSON.parse(result));
            },
            error: function (xhr) {
                console.error('Ocurrió un error al obtener la información del grupo:', xhr.status, xhr.statusText);
            }
        });
    }

    function mostrarInformacionGrupo(result) {
        let contenedor = $('.video-container');
        contenedor.empty(); // Limpiar el contenedor de video

        let grupoInfo = `
            <h3 class="title" style="font-size: 25px;">${result.Materia}</h3>
            <div class="info" style="justify-content: space-between;">
                <div class="part1" style="display: flex;">
                    <p class="date"><i class="fas fa-calendar"></i><span>${result.Fecha}</span></p>
                    <p class="date"><i class="fas fa-heart" style="margin-left: 20px;"></i><span>Integrantes</span></p>
                </div>
                <div class="part2" style="margin:0 20px;">
                    <div class="tutor">
                        <img src="../assets/img/people/pic-${result.Id_Monitor}.jpg" alt="">
                        <div>
                            <h3>${result.Nombre_Monitor}</h3>
                            <span>Monitor</span>
                        </div>
                    </div>
                </div>
            </div>
        `;
        contenedor.append(grupoInfo);
    }

    function mostrarAnuncios(anuncios) {
        let contenedor = $('.comments .box-container');
        contenedor.empty(); // Limpiar el contenedor de anuncios

        $.each(anuncios, function (i, anuncio) {
            let box = `
                <div class="box">
                    <div class="user">
                        <img src="../${anuncio.Imagen_Monitor}" alt="">
                        <div>
                            <h3>${anuncio.Nombre_Monitor}</h3>
                            <span>${anuncio.Fecha}</span>
                        </div>
                    </div>
                    <div class="comment-box">${anuncio.Descripcion}</div>
                </div>
            `;
            contenedor.append(box); // Agregar el contenido al contenedor
        });
    }

    function nohayanuncios() {
        let contenedor = $('.comments .box-container');
        contenedor.empty(); // Limpiar el contenedor de anuncios
        e();
        function e() {
            let box = `
                <div class="box">
                    <h1>No hay anuncios que mostrar</h1>
                </div>
            `;
            contenedor.append(box); // Agregar el contenido al contenedor
        };
    }
    function getParametroURL(nombre) {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        return urlParams.get(nombre);
    }
});
