<?php

class Programa{
    private $Id_Programa;
    private $nombre;
    private $Id_Facultad;

    public function __construct($Id_Programa, $nombre, $Id_Facultad) {
        $this->Id_Programa = $Id_Programa;
        $this->nombre = $nombre;
        $this->Id_Facultad = $Id_Facultad;
    }
        
    public function getId_Programa() {
        return $this->Id_Programa;
    }

    public function getNombre() {
        return $this->nombre;
    }
    
    public function getId_Facultad() {
        return $this->Id_Facultad;
    }
}
?>