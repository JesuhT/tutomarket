<?php
session_start();
require_once(__DIR__ . '/../mdb/mdbUser.php');

$idUsuario = $_GET['idUsuario'];
$successUsuario = borrarUsuario($idUsuario);

if ($successUsuario) {
    $successPersona = borrarPersona($idUsuario);
}

$estado = $successUsuario && $successPersona;
$msg = $estado ? "El usuario ha sido eliminado correctamente" : "Error al eliminar el usuario";

$resultado = [
    'estado' => $estado,
    'msg' => $msg
];

echo json_encode($resultado);
?>

