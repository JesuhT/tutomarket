<?php
require_once("datasource.php");
require_once(__DIR__ . "/../entities/Articulo.php");

class AlmuerzoEnMenuDAO
{
    public function leerArticulos()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT a.Id_Articulo, a.Nombre AS nombre, a.Descripcion, a.Precio, a.Id_Vendedor, a.Fecha_Publicacion
            FROM Articulo a",
            null
        );

        if (!$data_table) {
            return array();
        }

        $articulos = array();

        foreach ($data_table as $fila) {
            $articulo = array(
                'ID_Articulo' => $fila["Id_Articulo"],
                'nombre' => $fila["nombre"],
                'descripcion' => $fila["Descripcion"],
                'precio' => $fila["Precio"],
                'ID_Vendedor' => $fila["Id_Vendedor"],
                'Fecha' => $fila["Fecha_Publicacion"],
            );
            $articulos[] = $articulo;
        }

        return $articulos;
    }

    public function buscarArticuloPorId($ID_Articulo)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * 
            FROM Articulo
            WHERE Id_Articulo = :ID_Articulo",
            array(':ID_Articulo' => $ID_Articulo)
        );

        if (!$data_table || empty($data_table)) {
            return null;
        }

        $fila = $data_table[0];

        return [
            'ID_Articulo' => $fila["Id_Articulo"],
            'nombre' => $fila["Nombre"],
            'descripcion' => $fila["Descripcion"],
            'precio' => $fila["Precio"],
            'ID_Vendedor' => $fila["Id_Vendedor"],
            'Fecha' => $fila["Fecha_Publicacion"],
        ];
    }



    public function borrarArticulo($ID_Articulo)
    {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion(
            "DELETE FROM Articulo WHERE Id_Articulo = :ID_Articulo",
            array(':ID_Articulo' => $ID_Articulo)
        );

        return $resultado;
    }

    public function insertarAlmuerzoMenu($almuerzo)
    {
        $data_source = new DataSource();
        $sql = "INSERT INTO Almuerzos_En_Menu (ID_menu,ID_almuerzo) VALUES (:ID_menu,:ID_almuerzo)";
        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':ID_almuerzo' => $almuerzo->getID_almuerzo(),
                ':ID_menu' => $almuerzo->getID_menu(),
            )
        );


        return $resultado;
    }
    public function modificarArticulo(Articulo $articulo)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Articulo SET 
                    Id_Articulo = :Id_Articulo, 
                    Id_Vendedor = :vendedor,
                    Nombre = :nombre, 
                    Descripcion = :descripcion,
                    Precio = :precio
                    
                WHERE Id_Articulo = :Id_Articulo";

        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':Id_Articulo' => $articulo->getId_Articulo(),
                ':vendedor' => $articulo->getId_Vendedor(),
                ':nombre' => $articulo->getNombre(),
                ':descripcion' => $articulo->getDescripcion(),
                ':precio' => $articulo->getPrecio(),
                
            )
        );
        return $resultado;
    }
}
