<?php
class Grupo_Monitoria {
    private $Id_Monitoria;
    private $Id_Monitor;
    private $Materia;
    private $Fecha;

    public function __construct($Id_Monitoria, $Id_Monitor, $Materia, $Fecha) {
        $this->Id_Monitoria = $Id_Monitoria;
        $this->Id_Monitor = $Id_Monitor;
        $this->Materia = $Materia;
        $this->Fecha = $Fecha;
    }

    public function getId_Monitoria() {
        return $this->Id_Monitoria;
    }

    public function getId_Monitor() {
        return $this->Id_Monitor;
    }

    public function getMateria() {
        return $this->Materia;
    }

    public function getFecha() {
        return $this->Fecha;
    }

    public function setId_Monitor($Id_Monitor) {
        $this->Id_Monitor = $Id_Monitor;
    }

    public function setMateria($Materia) {
        $this->Materia = $Materia;
    }

    public function setFecha($Fecha) {
        $this->Fecha = $Fecha;
    }
}
