<?php
class Calificacion_Monitoria {
    private $Id_Calificacion;
    private $Id_Monitoria;
    private $Id_Estudiante;
    private $Calificacion;
    private $Descripcion;
    private $Fecha_Calificacion;

    public function __construct($Id_Calificacion, $Id_Monitoria, $Id_Estudiante, $Calificacion, $Descripcion, $Fecha_Calificacion) {
        $this->Id_Calificacion = $Id_Calificacion;
        $this->Id_Monitoria = $Id_Monitoria;
        $this->Id_Estudiante = $Id_Estudiante;
        $this->Calificacion = $Calificacion;
        $this->Descripcion = $Descripcion;
        $this->Fecha_Calificacion = $Fecha_Calificacion;
    }

    public function getId_Calificacion() {
        return $this->Id_Calificacion;
    }

    public function getId_Monitoria() {
        return $this->Id_Monitoria;
    }

    public function getId_Estudiante() {
        return $this->Id_Estudiante;
    }

    public function getCalificacion() {
        return $this->Calificacion;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function getFecha_Calificacion() {
        return $this->Fecha_Calificacion;
    }

    public function setId_Monitoria($Id_Monitoria) {
        $this->Id_Monitoria = $Id_Monitoria;
    }

    public function setCalificacion($Calificacion) {
        $this->Calificacion = $Calificacion;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }

    public function setFecha_Calificacion($Fecha_Calificacion) {
        $this->Fecha_Calificacion = $Fecha_Calificacion;
    }
}
