<?php
function autenticarUsuario($username, $password)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuario = $dao->autenticarUsuario($username, $password);
    return $usuario;
}



function buscarUsuarioPorId($id)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuario = $dao->buscarUsuarioPorId($id);
    return $usuario;
}

function leerUsuarios()
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarios = $dao->leerUsuarios();
    return $usuarios;
}

function insertarPersona($usuario)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $resultado = $dao->insertarPersona($usuario);
    return $resultado;
}
function insertarUsuario($usuario)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $resultado = $dao->insertarUsuario($usuario);
    return $resultado;
}

function modificarPersona($persona)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuario = $dao->modificarPersona($persona);
    return $usuario;
}

function borrarUsuario($id)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $res = $dao->borrarUsuario($id);
    return $res;
}
function borrarPersona($ID_persona)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $res = $dao->borrarPersona($ID_persona);
    return $res;
}

function verUsuarioPorId($idUsuario)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuario = $dao->verUsuarioPorId($idUsuario);
    return $usuario;
}

function verificarExistencia($valor, $columna)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarioExistente = $dao->verificarExistencia($valor, $columna);
    return $usuarioExistente;
}
function esAdministrador($idUsuario) {
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    $dao=new UsuarioDAO();
    $usuario = $dao->esAdministrador($idUsuario);
    return $usuario;
}
function agregarToken( $token) {
    require_once(__DIR__."/../../models/DAO/userDAO.php");
    $dao=new UsuarioDAO();
    $usuario = $dao->agregarToken($token);
    return $usuario;
}

function obtenerCantidadEstudiantes()
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarios = $dao->obtenerCantidadEstudiantes();
    return $usuarios;
}
function obtenerCantidadCalificaciones()
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarios = $dao->obtenerCantidadCalificaciones();
    return $usuarios;
}
function obtenerCantidadDonaciones()
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarios = $dao->obtenerCantidadDonaciones();
    return $usuarios;
}
function actualizarPersona($usuario)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarios = $dao->actualizarPersona($usuario);
    return $usuarios;
}
function actualizarContrasena($idUsuario, $new_pass)
{
    require_once(__DIR__ . "/../../models/DAO/userDAO.php");
    $dao = new UsuarioDAO();
    $usuarios = $dao->actualizarContrasena($idUsuario, $new_pass);
    return $usuarios;
}


