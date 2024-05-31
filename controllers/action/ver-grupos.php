<?php
    session_start();
    require_once(__DIR__ . "/../mdb/mdbAlmuerzo.php");
    $almuerzos = leerGruposHome();
    echo json_encode($almuerzos);