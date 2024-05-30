<?php
session_start();
require_once(__DIR__ . "/../mdb/mdbAlmuerzo.php");
require_once("../../models/entities/Programa.php");

$idGrupo = $_GET['Id_Monitoria'];
$grupo = buscarGrupoPorId($idGrupo);

echo json_encode($grupo);  
