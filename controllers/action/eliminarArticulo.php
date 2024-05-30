<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(__DIR__ . '/../mdb/mdbMenu.php');


$idArticulo = $_GET['idArticulo'];
$success = borrarArticulo($idArticulo);

$estado = $success;
$msg = $success ? "Artículo eliminado correctamente" : "Error al eliminar el artículo";

$resultado = [
    'estado' => $estado,
    'msg' => $msg
];

echo json_encode($resultado);
?>
