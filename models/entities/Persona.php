<?php
class Persona {
    private $Id_Persona;
    private $Nombre;
    private $Apellido;
    private $Correo_Institucional;
    private $Codigo_Estudiantil;
    private $Celular;
    private $Id_Rol;
    private $Id_Programa;
    private $Id_Estado;
    private $Biografia;

    public function __construct($Id_Persona, $Nombre, $Apellido, $Correo_Institucional, $Codigo_Estudiantil, $Celular, $Id_Rol, $Id_Programa, $Id_Estado, $Biografia) {
        $this->Id_Persona = $Id_Persona;
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Correo_Institucional = $Correo_Institucional;
        $this->Codigo_Estudiantil = $Codigo_Estudiantil;
        $this->Celular = $Celular;
        $this->Id_Rol = $Id_Rol;
        $this->Id_Programa = $Id_Programa;
        $this->Id_Estado = $Id_Estado;
        $this->Biografia = $Biografia;
    }

    public function getId_Persona() {
        return $this->Id_Persona;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getApellido() {
        return $this->Apellido;
    }

    public function getCorreo_Institucional() {
        return $this->Correo_Institucional;
    }

    public function getCodigo_Estudiantil() {
        return $this->Codigo_Estudiantil;
    }

    public function getCelular() {
        return $this->Celular;
    }

    public function getId_Rol() {
        return $this->Id_Rol;
    }

    public function getId_Programa() {
        return $this->Id_Programa;
    }

    public function getId_Estado() {
        return $this->Id_Estado;
    }

    public function getBiografia() {
        return $this->Biografia;
    }

    public function setNombre($Nombre) {
        $this->Nombre = $Nombre;
    }

    public function setApellido($Apellido) {
        $this->Apellido = $Apellido;
    }

    public function setCorreo_Institucional($Correo_Institucional) {
        $this->Correo_Institucional = $Correo_Institucional;
    }

    public function setCodigo_Estudiantil($Codigo_Estudiantil) {
        $this->Codigo_Estudiantil = $Codigo_Estudiantil;
    }

    public function setCelular($Celular) {
        $this->Celular = $Celular;
    }

    public function setId_Rol($Id_Rol) {
        $this->Id_Rol = $Id_Rol;
    }

    public function setId_Programa($Id_Programa) {
        $this->Id_Programa = $Id_Programa;
    }

    public function setId_Estado($Id_Estado) {
        $this->Id_Estado = $Id_Estado;
    }

    public function setBiografia($Biografia) {
        $this->Biografia = $Biografia;
    }
}
