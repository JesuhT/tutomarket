<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUser.php');
    require_once (__DIR__.'/../mdb/mdbPrograma.php');
    
    $idUsuario = $_GET['idUsuario'];
    
    $usuario = buscarUsuarioPorId($idUsuario);

    echo json_encode($usuario);  