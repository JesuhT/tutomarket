<?php
session_start();
require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');


if (isset($_POST['comentario']) && isset($_POST['idMonitoria'])) {
    session_start();
    if (isset($_SESSION['ID_USUARIO'])) {
        $idMonitor = $_SESSION['ID_USUARIO'];
        $descripcion = $_POST['comentario'];
        $idMonitoria = $_POST['idMonitoria'];

        $agregado = agregarAnuncio($idMonitoria, $idMonitor, $descripcion);

        if ($agregado) {
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Error al agregar el anuncio.'));
        }
    } else {
        echo json_encode(array('status' => 'error', 'message' => 'Usuario no autenticado.'));
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Datos incompletos.'));
}