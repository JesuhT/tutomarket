<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');

if (isset($_GET['idUsuario'])) {
    $idUsuario = $_GET['idUsuario'];


    $grupos = leerGruposMonitor($idUsuario);

    if ($grupos) {
        echo json_encode(['status' => 'success', 'data' => $grupos]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'No se encontraron grupos para este monitor.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'ID de usuario no proporcionado.']);
}
?>
