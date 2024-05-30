<?php
class Advertencia {
    private $Id_Advertencia;
    private $Id_Estudiante;
    private $Id_Administrador;
    private $Fecha;
    private $Descripcion;

    public function __construct($Id_Advertencia, $Id_Estudiante, $Id_Administrador, $Fecha, $Descripcion) {
        $this->Id_Advertencia = $Id_Advertencia;
        $this->Id_Estudiante = $Id_Estudiante;
        $this->Id_Administrador = $Id_Administrador;
        $this->Fecha = $Fecha;
        $this->Descripcion = $Descripcion;
    }

    public function getId_Advertencia() {
        return $this->Id_Advertencia;
    }

    public function getId_Estudiante() {
        return $this->Id_Estudiante;
    }

    public function getId_Administrador() {
        return $this->Id_Administrador;
    }

    public function getFecha() {
        return $this->Fecha;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function setId_Estudiante($Id_Estudiante) {
        $this->Id_Estudiante = $Id_Estudiante;
    }

    public function setId_Administrador($Id_Administrador) {
        $this->Id_Administrador = $Id_Administrador;
    }

    public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }
}
