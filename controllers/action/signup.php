<?php
require_once("../../controllers/mdb/mdbUser.php");
require_once("../../models/entities/Usuario.php");
require_once("../../models/entities/Persona.php");

// Recibir datos del formulario
$nombre = $_POST['name'];
$apellido = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['pswd'];
$telefono = $_POST['phone'];
$ID_programa = $_POST['programa'];
$code = $_POST['student-code'];
$bio = $_POST['biografia'];
$ID_rol = $_POST['user-type'];; // El rol por defecto, según tus requerimientos
$Id_Estado = 1;
$msg = "por defecto";

// Etiquetas para verificar existencia de email y teléfono
$nemail = "Correo_Institucional";
$ntele = "Celular";

// Verificar existencia de email
if (verificarExistencia($email, $nemail)) {
    $estado = false;
    $msg = "Este correo electrónico ya está siendo utilizado, inicie sesión o ingrese uno diferente";
    $resultado = [
        'estado' => $estado,
        'msg' => $msg
    ];
    echo json_encode($resultado);
    exit;
}

// Verificar existencia de celular
if (verificarExistencia($telefono, $ntele)) {
    $estado = false;
    $msg = "Este número de celular ya está siendo utilizado, inicie sesión o ingrese uno diferente";
    $resultado = [
        'estado' => $estado,
        'msg' => $msg
    ];
    echo json_encode($resultado);
    exit;
}

// Crear objeto Persona y Usuario
$persona = new Persona(null, $nombre, $apellido, $email, $code, $telefono, $ID_rol, $ID_programa, $Id_Estado, $bio);
$usuario = new Usuario(null, $email, $password); // El ID_Usuario se asignará automáticamente al insertar

// Insertar persona y usuario en la base de datos
$success_persona = insertarPersona($persona);
$success_usuario = insertarUsuario($usuario);

if ($success_persona && $success_usuario) {
    $estado = true;
    $msg = "El usuario ha sido registrado correctamente, inicia sesión";
} else {
    $estado = false;
    $msg = "Hubo un error al registrar el usuario, por favor inténtelo nuevamente";
}

$resultado = [
    'estado' => $estado,
    'msg' => $msg
];
echo json_encode($resultado);

?>
