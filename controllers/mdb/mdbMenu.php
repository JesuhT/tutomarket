<?php
require_once(__DIR__."/../../models/DAO/menuDAO.php");
function leerArticulos() {
    $dao = new AlmuerzoEnMenuDAO();
    $almuerzos = $dao->leerArticulos();
    return $almuerzos;
}

function leerArticulosHome() {
    $dao = new AlmuerzoEnMenuDAO();
    $almuerzos = $dao->leerArticulosHome();
    return $almuerzos;
}

function modificarArticulo($almuerzo) {
    $dao = new AlmuerzoEnMenuDAO();
    $resultado = $dao->modificarArticulo($almuerzo);
    return $resultado;
}
function buscarArticulosPorNombre($idarticulo) {
    $dao = new AlmuerzoEnMenuDAO();
    $resultado = $dao->buscarArticulosPorNombre($idarticulo);
    return $resultado;
}

function buscarArticuloPorIdHome($idarticulo) {
    $dao = new AlmuerzoEnMenuDAO();
    $resultado = $dao->buscarArticuloPorIdHome($idarticulo);
    return $resultado;
}


function buscarArticuloPorId($idarticulo) {
    $dao = new AlmuerzoEnMenuDAO();
    $resultado = $dao->buscarArticuloPorId($idarticulo);
    return $resultado;
}
function borrarArticulo($idarticulo) {
    $dao = new AlmuerzoEnMenuDAO();
    $resultado = $dao->borrarArticulo($idarticulo);
    return $resultado;
}
function insertarAlmuerzoMenu($almuerzo) {
    $dao = new AlmuerzoEnMenuDAO();
    $resultado = $dao->insertarAlmuerzoMenu($almuerzo);
    return $resultado;
}
?>
