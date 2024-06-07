<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(__DIR__ . "/../mdb/mdbAlmuerzo.php");
$materia = $_GET['buscar'];
$almuerzos = buscarGrupo($materia);

echo json_encode($almuerzos);
