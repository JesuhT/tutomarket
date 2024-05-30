<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once(__DIR__ . "/../mdb/mdbUser.php");
require_once(__DIR__ . "/../mdb/mdbPrograma.php");
require_once(__DIR__ . "/../mdb/mdbRol.php");

if (isset($_POST['email']) && isset($_POST['pswd'])) {
    // Username y password enviados por formulario
    $username = $_POST['email'];
    $password = $_POST['pswd'];

    $usuario = autenticarUsuario($username, $password);

    if ($usuario != null) { // Puede iniciar sesión
        $_SESSION['ID_USUARIO'] = $usuario->getId_Persona();
        $_SESSION['NOMBRE'] = $usuario->getNombre();
        $_SESSION['APELLIDO'] = $usuario->getApellido();
        $_SESSION['CELULAR'] = $usuario->getCelular();
        $_SESSION['EMAIL'] = $usuario->getCorreo_Institucional();
        $_SESSION['ID_PROGRAMA'] = $usuario->getId_Programa();
        $_SESSION['ID_ROL'] = $usuario->getId_Rol();
        $_SESSION['BIOGRAFIA'] = $usuario->getBiografia();

        $programa = buscarProgramaPorId($usuario->getId_Programa());
        $_SESSION['NOMBRE_PROGRAMA'] = $programa->getNombre();
        
        $rol = buscarRolPorId($usuario->getId_Rol());
        $_SESSION['NOMBRE_ROL'] = $rol->getNombre();
        
        $estado = true;
        $msg = "Bienvenido " . $_SESSION['NOMBRE'];
        $resultado = [
            'estado' => $estado,
            'msg' => $msg
        ];

    } else { // No puede iniciar sesión
        $estado = false;
        $msg = "Error de credenciales";
        $resultado = [
            'estado' => $estado,
            'msg' => $msg
        ];
    }

    echo json_encode($resultado);
}

