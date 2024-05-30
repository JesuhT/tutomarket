<?php
    session_start();
    require_once(__DIR__ . "/../mdb/mdbAlmuerzo.php");
    $almuerzos = leerGrupos();
    echo json_encode($almuerzos);