<?php
session_start();
require_once (__DIR__.'/../mdb/mdbMenu.php');

$idArticulo = $_GET['idArticulo'];
$articulo = buscarArticuloPorId($idArticulo);

echo json_encode($articulo);

