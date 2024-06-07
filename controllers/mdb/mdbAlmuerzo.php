<?php
require_once(__DIR__."/../../models/DAO/almuerzoDAO.php");



function insertarEstudianteEnGrupo($idgrupo,$iduser) {
    $dao = new AlmuerzoDAO();
    $insertado = $dao->insertarEstudianteEnGrupo($idgrupo,$iduser);
    return $insertado;
}
function agregarAnuncio($idMonitoria, $idMonitor, $descripcion) {
    $dao = new AlmuerzoDAO();
    $insertado = $dao->agregarAnuncio($idMonitoria, $idMonitor, $descripcion);
    return $insertado;
}
function verificarEstudianteEnGrupo($idgrupo,$iduser) {
    $dao = new AlmuerzoDAO();
    $insertado = $dao->verificarEstudianteEnGrupo($idgrupo,$iduser);
    return $insertado;
}
function leerGrupos() {
    $dao = new AlmuerzoDAO();
    $almuerzos = $dao->leerGrupos();
    return $almuerzos;
}
function leerGruposHome() {
    $dao = new AlmuerzoDAO();
    $almuerzos = $dao->leerGruposHome();
    return $almuerzos;
}

function buscarGrupo($name) {
    $dao = new AlmuerzoDAO();
    $almuerzos = $dao->buscarMonitoriasPorMateria($name);
    return $almuerzos;
}


function modificarGrupo($grupo) {
    $dao = new AlmuerzoDAO();
    $resultado = $dao->modificarGrupo($grupo);
    return $resultado;
}

function buscarGrupoPorId($id) {
    $dao = new AlmuerzoDAO();
    $resultado = $dao->buscarGrupoPorId($id);
    return $resultado;
}
function buscarGrupoPorIdPlay($id) {
    $dao = new AlmuerzoDAO();
    $resultado = $dao->buscarGrupoPorIdPlay($id);
    return $resultado;
}
function borrarGrupo($id) {
    $dao = new AlmuerzoDAO();
    $resultado = $dao->borrarGrupo($id);
    return $resultado;
}
function obtenerAnunciosPorIdGrupo($id) {
    $dao = new AlmuerzoDAO();
    $resultado = $dao->obtenerAnunciosPorIdGrupo($id);
    return $resultado;
}
function creargrupo($idUsuario, $materia, $descripcion) {
    $dao = new AlmuerzoDAO();
    $resultado = $dao->creargrupo($idUsuario, $materia, $descripcion);
    return $resultado;
}

