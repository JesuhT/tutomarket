<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');

if (isset($_GET['idGrupo'])) {
    $idGrupo = $_GET['idGrupo'];
    $anuncios = obtenerAnunciosPorIdGrupo($idGrupo);

    echo json_encode($anuncios);
}