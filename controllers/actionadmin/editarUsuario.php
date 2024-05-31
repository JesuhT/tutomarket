<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . '/../mdb/mdbUser.php');
require_once(__DIR__ . '/../../models/entities/Persona.php');

$idPersona = filter_input(INPUT_POST, 'IdUsuario');
$nombres = filter_input(INPUT_POST, 'nombres');
$apellidos = filter_input(INPUT_POST, 'apellidos');
$email = filter_input(INPUT_POST, 'email');
$codigo = filter_input(INPUT_POST, 'codigo');
$celular = filter_input(INPUT_POST, 'celular');
$idRol = filter_input(INPUT_POST, 'rol');
$idPrograma = filter_input(INPUT_POST, 'programa');
$biografia = filter_input(INPUT_POST, 'biografia');
$idEstado = filter_input(INPUT_POST, 'estado');;

$persona = new Persona($idPersona, $nombres, $apellidos, $email, $codigo, $celular, $idRol, $idPrograma,$idEstado, $biografia, null);
$success = modificarPersona($persona);

$estado = $success ? true : false;
$msg = $estado ? "Usuario actualizado" : "Error al actualizar el usuario";

$resultado = [
    'estado' => $estado,
    'msg' => $msg
];
echo json_encode($resultado);
?>
