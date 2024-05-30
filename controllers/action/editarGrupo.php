<?php

session_start();

require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');
require_once(__DIR__ . '/../../models/entities/Grupo_Monitoria.php');

$idMonitoria = filter_input(INPUT_POST, 'Id_Monitoria');
$idMonitor = filter_input(INPUT_POST, 'Id_Monitor');
$materia = filter_input(INPUT_POST, 'Materia');
$fecha = filter_input(INPUT_POST, 'Fecha');

$grupo = new Grupo_Monitoria($idMonitoria, $idMonitor, $materia, $fecha);
$success = modificarGrupo($grupo);

$estado = $success ? true : false;
$msg = "Grupo actualizado";
$resultado = [
    'estado' => $estado,
    'msg' => $msg
];

echo json_encode($resultado);

