<?php
class Anuncio {
    private $Id_Anuncio;
    private $Id_Monitoria;
    private $Id_Monitor;
    private $Descripcion;
    private $Imagen;

    public function __construct($Id_Anuncio, $Id_Monitoria, $Id_Monitor, $Descripcion, $Imagen) {
        $this->Id_Anuncio = $Id_Anuncio;
        $this->Id_Monitoria = $Id_Monitoria;
        $this->Id_Monitor = $Id_Monitor;
        $this->Descripcion = $Descripcion;
        $this->Imagen = $Imagen;
    }

    public function getId_Anuncio() {
        return $this->Id_Anuncio;
    }

    public function getId_Monitoria() {
        return $this->Id_Monitoria;
    }

    public function getId_Monitor() {
        return $this->Id_Monitor;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function getImagen() {
        return $this->Imagen;
    }

    public function setId_Monitoria($Id_Monitoria) {
        $this->Id_Monitoria = $Id_Monitoria;
    }

    public function setId_Monitor($Id_Monitor) {
        $this->Id_Monitor = $Id_Monitor;
    }

    public function setDescripcion($Descripcion) {
        $this->Descripcion = $Descripcion;
    }

    public function setImagen($Imagen) {
        $this->Imagen = $Imagen;
    }
}
