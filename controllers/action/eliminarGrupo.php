<?php
session_start();
require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');
$grupo = $_GET['Id_Monitoria'];
$success = borrarGrupo($grupo);

// Prepara el mensaje

    $estado=true;

$msg = "El almuerzo ha sido eliminado correctamente" ;
$resultado = [
    'estado' => $estado,
    'msg' => $msg
];
echo json_encode($resultado);
