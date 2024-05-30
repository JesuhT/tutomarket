
<?php
// En tu controlador PHP
session_start();
require_once(__DIR__ . '/../mdb/mdbUser.php');

// Realiza una consulta para obtener la cantidad de donaciones por mes
unset($_SESSION["#Estu"]);
unset($_SESSION["#Cali"]);
unset($_SESSION["#Dona"]);
$cantidadEstudiantes = obtenerCantidadEstudiantes();
$cantidadCalificaciones = obtenerCantidadCalificaciones();
$cantidadDonaciones = obtenerCantidadDonaciones();

$_SESSION["#Estu"] = $cantidadEstudiantes;
$_SESSION["#Cali"] = $cantidadCalificaciones;
$_SESSION["#Dona"] = $cantidadDonaciones;
