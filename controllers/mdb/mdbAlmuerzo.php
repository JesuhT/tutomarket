<?php
require_once(__DIR__."/../../models/DAO/almuerzoDAO.php");

function obtenerAlmuerzosPorDia($dia) {
    $dao = new AlmuerzoDAO();
    $almuerzos = $dao->obtenerAlmuerzosPorDia($dia);
    return $almuerzos;
}
function obtenerAlmuerzosUsuario($usuario,$dia) {
    $dao = new AlmuerzoDAO();
    $tienealmuerzo = $dao->obtenerAlmuerzosUsuario($usuario,$dia);
    return $tienealmuerzo;
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

function insertarAlmuerzo($almuerzo) {
    $dao = new AlmuerzoDAO();
    $resultado = $dao->insertarAlmuerzo($almuerzo);
    return $resultado;
}
?>
