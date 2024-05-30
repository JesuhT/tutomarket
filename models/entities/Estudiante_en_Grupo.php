<?php
class Estudiante_en_Grupo {
    private $Id_Grupo;
    private $Id_Estudiante;
    private $Fecha_Ingreso;

    public function __construct($Id_Grupo, $Id_Estudiante, $Fecha_Ingreso) {
        $this->Id_Grupo = $Id_Grupo;
        $this->Id_Estudiante = $Id_Estudiante;
        $this->Fecha_Ingreso = $Fecha_Ingreso;
    }

    public function getId_Grupo() {
        return $this->Id_Grupo;
    }

    public function getId_Estudiante() {
        return $this->Id_Estudiante;
    }

    public function getFecha_Ingreso() {
        return $this->Fecha_Ingreso;
    }

    public function setId_Estudiante($Id_Estudiante) {
        $this->Id_Estudiante = $Id_Estudiante;
    }

    public function setFecha_Ingreso($Fecha_Ingreso) {
        $this->Fecha_Ingreso = $Fecha_Ingreso;
    }
}
