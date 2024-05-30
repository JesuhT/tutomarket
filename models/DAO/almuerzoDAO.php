<?php
require_once("datasource.php");
require_once(__DIR__ . '/../../models/entities/Grupo_Monitoria.php');


class AlmuerzoDAO
{
    function obtenerAlmuerzosPorDia($dia)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT al.ID_almuerzo, al.nombre, al.descripcion, COALESCE(ROUND(AVG(ca.calificacion), 2), 0) AS promedioCalificacion 
        FROM Almuerzo al
        LEFT JOIN Calificacion ca ON al.ID_almuerzo = ca.ID_almuerzo
        INNER JOIN Almuerzos_En_Menu am ON al.ID_almuerzo = am.ID_almuerzo 
        INNER JOIN Menu me ON me.ID_menu = am.ID_menu 
        INNER JOIN Dia_almuerzo d ON me.ID_dia = d.ID_dia 
        WHERE d.nombre = :dia
        GROUP BY al.ID_almuerzo, al.nombre, al.descripcion;",
            array(':dia' => $dia)
        );
        $almuerzos = array();

        foreach ($data_table as $indice => $valor) {
            $almuerzoObj = new Almuerzo(
                $data_table[$indice]["ID_almuerzo"],
                $data_table[$indice]["nombre"],
                $data_table[$indice]["descripcion"],
                $data_table[$indice]["promedioCalificacion"]
            );
            array_push($almuerzos, $almuerzoObj);
        }
        $almuerzosArray = array();

        foreach ($almuerzos as $almuerzo) {
            $almuerzoArray = array(
                'ID_almuerzo' => $almuerzo->getID_almuerzo(),
                'nombre' => $almuerzo->getNombre(),
                'descripcion' => $almuerzo->getDescripcion(),
                'promedioCalificacion' => $almuerzo->getPromedioCalificacion()
            );

            $almuerzosArray[] = $almuerzoArray;
        }
        return $almuerzosArray;
    }


    public function obtenerAlmuerzosUsuario($usuarioID, $dia)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * FROM Dias_Almuerzos_Estudiante e
            INNER JOIN Dia_almuerzo d ON d.ID_dia = e.ID_dia WHERE e.ID_estudiante = :usuarioID AND d.nombre = :dia",
            array(':usuarioID' => $usuarioID, ':dia' => $dia)
        );

        if (count($data_table) == 1) {
            return true; // El estudiante tiene almuerzo para el día específico
        } else {
            return false; // El estudiante no tiene almuerzo para el día específico
        }
    }

    function leerGrupos()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Grupo_Monitoria", NULL);
        $grupos = array();

        if (!$data_table) {
            return array();
        }

        foreach ($data_table as $indice => $valor) {
            $grupo = new Grupo_Monitoria(
                $data_table[$indice]["Id_Monitoria"],
                $data_table[$indice]["Id_Monitor"],
                $data_table[$indice]["Materia"],
                $data_table[$indice]["Fecha"]
            );
            array_push($grupos, $grupo);
        }

        $gruposArray = array();

        foreach ($grupos as $grupo) {
            $grupoArray = array(
                'Id_Monitoria' => $grupo->getId_Monitoria(),
                'Id_Monitor' => $grupo->getId_Monitor(),
                'Materia' => $grupo->getMateria(),
                'Fecha' => $grupo->getFecha()
            );

            $gruposArray[] = $grupoArray;
        }
        return $gruposArray;
    }


    public function modificarAlmuerzo(Almuerzo $almuerzo)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Almuerzo SET ID_almuerzo=:ID_almuerzo, nombre = :nombre, descripcion = :descripcion WHERE ID_almuerzo = :ID_almuerzo";
        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':ID_almuerzo' => $almuerzo->getID_almuerzo(),
                ':nombre' => $almuerzo->getNombre(),
                ':descripcion' => $almuerzo->getDescripcion(),
            )
        );
        return $resultado;
    }
    public function buscarGrupoPorId($Id_Monitoria)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT * 
            FROM Grupo_Monitoria
            WHERE Id_Monitoria = :Id_Monitoria",
            array(':Id_Monitoria' => $Id_Monitoria)
        );

        if (!$data_table || empty($data_table)) {
            return null;
        }

        $fila = $data_table[0];

        return [
            'Id_Monitoria' => $fila["Id_Monitoria"],
            'Id_Monitor' => $fila["Id_Monitor"],
            'Materia' => $fila["Materia"],
            'Fecha' => $fila["Fecha"]
        ];
    }

    public function borrarAlmuerzo($ID)
    {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM Almuerzo WHERE ID_almuerzo = :ID_almuerzo", array('ID_almuerzo' => $ID));

        return $resultado;
    }

    public function insertarAlmuerzo(Almuerzo $Almuerzo)
    {
        $data_source = new DataSource();
        $sql = "INSERT INTO Almuerzo (ID_almuerzo, nombre, descripcion) VALUES (:ID_almuerzo, :nombre, :descripcion)";
        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':ID_almuerzo' => $Almuerzo->getID_almuerzo(),
                ':nombre' => $Almuerzo->getNombre(),
                ':descripcion' => $Almuerzo->getDescripcion(),
            )
        );


        return $resultado;
    }
}
