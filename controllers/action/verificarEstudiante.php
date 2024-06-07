<?php
session_start();
require_once(__DIR__ . '/../mdb/mdbAlmuerzo.php');



if (isset($_GET['idGrupo']) && isset($_GET['idUsuario'])) {
    $idGrupo = $_GET['idGrupo'];
    $idUsuario = $_GET['idUsuario'];

    // Verificar si el estudiante ya está en el grupo
    $estaEnGrupo = verificarEstudianteEnGrupo($idGrupo, $idUsuario);

    if ($estaEnGrupo) {
        $response = array('status' => 'error', 'message' => 'El estudiante ya pertenece a este grupo.');
        echo json_encode($response);
        usleep(7000);
        exit;
    } 
        $response = array('status' => 'success');
        echo json_encode($response);
        usleep(7000);
        exit;
    }
echo json_encode(array('status' => 'error', 'message' => 'Falta el ID de grupo o usuario.'));
