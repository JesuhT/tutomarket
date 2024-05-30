<?php
session_start();


if (!isset($_SESSION['ID_USUARIO'])) {
	// Redirige a login.php después de 2 segundos
	echo '<script>
        setTimeout(function() {
            window.location = "login.php";
        }, 2000);
    </script>';
	exit; // Asegura que no se procese más código PHP
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones</title>
    <link rel="stylesheet" href="css/calificaciones.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    referrerpolicy="no-referrer" />
</head>
<body>

<div class="container-total">
      <div class="top-side">
        <div class="svg-section circle">
          <svg id="elipse1" width="960" height="960" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="480" cy="480" r="479.5" stroke="#101A24" stroke-opacity="0.2" />
          </svg>
          <svg id="elipse2" width="960" height="960" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="480" cy="480" r="479.5" stroke="#101A24" stroke-opacity="0.2" />
          </svg>
          <svg id="elipse3" width="960" height="960" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="480" cy="480" r="479.5" stroke="#101A24" stroke-opacity="0.2" />
          </svg>
        </div>
      </div>
      <div class="container">
        <div class="titulo">
          <p>Donaciones activas</p>
        </div>
        <section class="container_cards_d">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="table-responsive px-3">
                          <table class="table table-striped align-middle table-nowrap" id="tablaDinamica">
                            <tbody id="cuerpoTabla">
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
<!-- Botón para abrir el modal -->
<button id="btnAbrirModal" class="btn btn-primary">Abrir modal</button>

<!-- Modal para calificar -->
<div class="modal fade" id="modalCalificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Calificar almuerzo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenido de calificación -->
                <div class="d-flex justify-content-center">
                    <div  class="card border-0" style="width: 18rem;">
                    <div class="card-body text-center">
                            <h5 class="card-title">Califica este almuerzo</h5>
                            <span class="fa fa-star" id="1" style="cursor: pointer"></span>
                            <span class="fa fa-star" id="2" style="cursor: pointer"></span>
                            <span class="fa fa-star" id="3" style="cursor: pointer"></span>
                            <span class="fa fa-star" id="4" style="cursor: pointer"></span>
                            <span class="fa fa-star" id="5" style="cursor: pointer"></span>
                        </div>
                    </div>
                </div>  
                <!-- Comentarios y Opiniones --> 
                <div class="mb-3">
                    <textarea class="form-control" id="descripcion" rows="3" placeholder="Agrega una descripción"></textarea>
                </div>
                <!-- Botón para enviar calificación -->
                <div class="d-flex justify-content-center mt-3">
                    <button id="btnEnviarCalificacion" class="btn btn-primary">Enviar calificación</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="js/calificarAlmuerzo.js"></script>
</body>
</html>