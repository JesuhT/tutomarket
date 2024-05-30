<?php
    session_start();
    require_once(__DIR__ . "/../mdb/mdbMenu.php");
    $articulos = leerArticulos();
    echo json_encode($articulos);

    