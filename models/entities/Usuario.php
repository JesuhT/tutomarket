<?php 
class Usuario {
    private $Id_Usuario;
    private $Usuario;
    private $Password;

    public function __construct($Id_Usuario, $Usuario, $Password) {
        $this->Id_Usuario = $Id_Usuario;
        $this->Usuario = $Usuario;
        $this->Password = $Password;
    }

    public function getId_Usuario() {
        return $this->Id_Usuario;
    }

    public function getUsuario() {
        return $this->Usuario;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function setUsuario($Usuario) {
        $this->Usuario = $Usuario;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
    }

    public function toArray() {
        $vars = get_object_vars($this);
        $array = array();
        foreach ($vars as $key => $value) {
            $array[ltrim($key, '_')] = $value;
        }
        return $array;
    }
}
