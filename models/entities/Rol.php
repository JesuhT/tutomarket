<?php

class Rol
{
    private $Id_Rol;
    private $Nombre;

    public function __construct($Id_Rol, $Nombre)
    {
        $this->Id_Rol = $Id_Rol;
        $this->Nombre = $Nombre;
    }

    public function getIDRol()
    {
        return $this->Id_Rol;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }
}

?>
