<?php
class Articulo {
    private $Id_Articulo;
    private $Id_Vendedor;
    private $Nombre;
    private $Descripcion;
    private $Precio;
    private $Fecha_Publicacion;

    public function __construct($Id_Articulo, $Id_Vendedor, $Nombre, $Descripcion, $Precio, $Fecha_Publicacion) {
        $this->Id_Articulo = $Id_Articulo;
        $this->Id_Vendedor = $Id_Vendedor;
        $this->Nombre = $Nombre;
        $this->Descripcion = $Descripcion;
        $this->Precio = $Precio;
        $this->Fecha_Publicacion = $Fecha_Publicacion;
    }

    public function getId_Articulo() {
        return $this->Id_Articulo;
    }

    public function getId_Vendedor() {
        return $this->Id_Vendedor;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function getPrecio() {
        return $this->Precio;
    }

    public function getFecha_Publicacion() {
        return $this->Fecha_Publicacion;
    }

    public function setId_Vendedor($Id_Vendedor) {
        $this->Id_Vendedor = $Id_Vendedor;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }

    public function setPrecio($Precio) {
        $this->Precio = $Precio;
    }

    public function setFecha_Publicacion($Fecha_Publicacion) {
        $this->Fecha_Publicacion = $Fecha_Publicacion;
    }
}
