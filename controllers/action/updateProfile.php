<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("../../controllers/mdb/mdbUser.php");
require_once("../../models/entities/Usuario.php");
require_once("../../models/entities/Persona.php");
require_once("../../controllers/mdb/mdbPrograma.php");

$idUsuario = $_SESSION['ID_USUARIO'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$codigo = $_POST['codigo'];
$celular = $_POST['celular'];
$biografia = $_POST['biografia'];
$programa = $_POST['programa'];
$rol = $_SESSION['ID_ROL'];
$estado = $_SESSION['ID_ESTADO'];
$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$c_pass = $_POST['c_pass'];

$ruta_imagen = '../assets/img/people/pic-2.jpg';

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = 'pic-' . $idUsuario . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $uploadFileDir = $_SERVER['DOCUMENT_ROOT'] . 'assets/img/people/';
    $dest_path = $uploadFileDir . $fileName;

    if (move_uploaded_file($fileTmpPath, $dest_path)) {
        $ruta_imagen = 'assets/img/people/' . $fileName;
    } else {
        echo json_encode(['estado' => false, 'msg' => "Error moving the uploaded file"]);
        exit;
    }
}

// Actualiza los datos del usuario
$usuario = new Persona($idUsuario, $nombres, $apellidos, $email, $codigo, $celular, $rol, $programa, $estado, $biografia, $ruta_imagen);
actualizarPersona($usuario);

// Actualiza la sesión con los nuevos datos
$_SESSION["ID_USUARIO"] = $usuario->getId_Persona();
$_SESSION["NOMBRE"] = $usuario->getNombre();
$_SESSION["APELLIDO"] = $usuario->getApellido();
$_SESSION["CELULAR"] = $usuario->getCelular();
$_SESSION["EMAIL"] = $usuario->getCorreo_Institucional();
$_SESSION["ID_PROGRAMA"] = $usuario->getId_Programa();
$_SESSION["ID_ROL"] = $usuario->getId_Rol();
$_SESSION["BIOGRAFIA"] = $usuario->getBiografia();
$_SESSION["RUTA"] = $usuario->getRuta_Imagen();

$programa = buscarProgramaPorId($usuario->getId_Programa());
$_SESSION["NOMBRE_PROGRAMA"] = $programa->getNombre();

$estado = true;
$msg = "Los cambios han sido registrados correctamente";
$resultado = ['estado' => $estado, 'msg' => $msg];

// Maneja la actualización de la contraseña si se proporciona
if ($new_pass && $c_pass && $new_pass === $c_pass) {
    if (actualizarContrasena($idUsuario, $new_pass)) {
        $estad = true;
        $msge = "Se actualizó la contraseña";
        $result = ['estado' => $estad, 'msg' => $msge];
        echo json_encode($result);
        usleep(7000);
        exit;
    } 
}


echo json_encode($resultado);
