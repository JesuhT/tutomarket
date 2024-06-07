<?php
session_start();
require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');

if (isset($_GET['idGrupo']) && isset($_GET['idUsuario'])) {
    $idGrupo = $_GET['idGrupo'];
    $idUsuario = $_GET['idUsuario'];

    $resultado = insertarEstudianteEnGrupo($idGrupo, $idUsuario);

    if ($resultado) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error al ingresar el estudiante en el grupo.']);
    }
}