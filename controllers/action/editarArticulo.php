
<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(__DIR__ . '/../mdb/mdbMenu.php');
require_once(__DIR__ . '/../../models/entities/Articulo.php');

$idarticulo = filter_input(INPUT_POST, 'ID_Articulo');
$idvendedor = filter_input(INPUT_POST, 'vendedor');
$nombre = filter_input(INPUT_POST, 'nombre');
$desc = filter_input(INPUT_POST, 'descripcion');
$precio = filter_input(INPUT_POST, 'precio');
$fecha = filter_input(INPUT_POST, 'fecha');

$articulo = new Articulo($idarticulo,$idvendedor, $nombre, $desc, $precio, $fecha);
$success = modificarArticulo($articulo);

$estado = $success ? true : false;
$msg = "Articulo actualizado";
$resultado = [
    'estado' => $estado,
    'msg' => $msg
];

echo json_encode($resultado);

