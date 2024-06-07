<?php
require_once("datasource.php");
require_once(__DIR__ . '/../../models/entities/Grupo_Monitoria.php');


class AlmuerzoDAO
{
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
    function obtenerAnunciosPorIdGrupo($idGrupo)
    {
        $data_source = new DataSource();

        $anuncios = $data_source->ejecutarConsulta(
            "SELECT a.Id_Anuncio, a.Descripcion, a.Fecha, a.Imagen, p.Nombre AS Nombre_Monitor, p.ruta_imagen AS Imagen_Monitor 
            FROM Anuncio a
            JOIN Persona p ON a.Id_Monitor = p.Id_Persona
            WHERE a.Id_Monitoria = :idGrupo",
            array(':idGrupo' => $idGrupo)
        );

        return $anuncios;
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

    function leerGruposHome()
    {
        $data_source = new DataSource();
        $sql = "SELECT gm.Id_Monitoria, gm.Id_Monitor, gm.Materia, gm.Fecha, rg.ruta_imagen, p.Nombre
        FROM Grupo_Monitoria gm
        LEFT JOIN Ruta_Grupo rg ON gm.Id_Monitoria = rg.Id_Grupo
        JOIN Persona p ON gm.Id_Monitor = p.Id_Persona";


        $data_table = $data_source->ejecutarConsulta($sql);

        if (!$data_table) {
            return array();
        }

        $grupos = array();

        foreach ($data_table as $fila) {
            $grupo = array(
                'Id_Monitoria' => $fila["Id_Monitoria"],
                'Id_Monitor' => $fila["Id_Monitor"],
                'Materia' => $fila["Materia"],
                'Fecha' => $fila["Fecha"],
                'ruta_imagen' => $fila["ruta_imagen"],
                'Nombre_Monitor' => $fila["Nombre"]
            );
            $grupos[] = $grupo;
        }

        return $grupos;
    }

    function leerGruposMonitor($idM)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta( "SELECT gm.Id_Monitoria, gm.Id_Monitor, gm.Materia, gm.Fecha, gm.Descripcion, rg.ruta_imagen, p.Nombre
        FROM Grupo_Monitoria gm
        LEFT JOIN Ruta_Grupo rg ON gm.Id_Monitoria = rg.Id_Grupo
        JOIN Persona p ON gm.Id_Monitor = p.Id_Persona
        WHERE gm.Id_Monitor=:id",
        $data= array(':id' => $idM)) ;


        if (!$data_table) {
            return array();
        }

        $grupos = array();

        foreach ($data_table as $fila) {
            $grupo = array(
                'Id_Monitoria' => $fila["Id_Monitoria"],
                'Id_Monitor' => $fila["Id_Monitor"],
                'Materia' => $fila["Materia"],
                'Fecha' => $fila["Fecha"],
                'ruta_imagen' => $fila["ruta_imagen"],
                'Nombre_Monitor' => $fila["Nombre"],
                'Descripcion'=> $fila['Descripcion'],
            );
            $grupos[] = $grupo;
        }

        return $grupos;
    }
    function leerGruposEstudiante($idM)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta( "SELECT gm.Id_Monitoria, gm.Id_Monitor, gm.Materia, gm.Fecha, gm.Descripcion, rg.ruta_imagen, p.Nombre
        FROM Estudiante_en_Grupo e
        JOIN Grupo_Monitoria gm ON gm.Id_Monitoria = e.Id_Grupo
        LEFT JOIN Ruta_Grupo rg ON gm.Id_Monitoria = rg.Id_Grupo
        JOIN Persona p ON e.Id_Estudiante = p.Id_Persona
        WHERE e.Id_Estudiante =:id",
        $data= array(':id' => $idM)) ;


        if (!$data_table) {
            return array();
        }

        $grupos = array();

        foreach ($data_table as $fila) {
            $grupo = array(
                'Id_Monitoria' => $fila["Id_Monitoria"],
                'Id_Monitor' => $fila["Id_Monitor"],
                'Materia' => $fila["Materia"],
                'Fecha' => $fila["Fecha"],
                'ruta_imagen' => $fila["ruta_imagen"],
                'Nombre_Monitor' => $fila["Nombre"],
                'Descripcion'=> $fila['Descripcion'],
            );
            $grupos[] = $grupo;
        }

        return $grupos;
    }
    public function buscarMonitoriasPorMateria($materia)
    {
        $data_source = new DataSource();
        $materia = '%' . $materia . '%'; // Para buscar coincidencias parciales
        $data_table = $data_source->ejecutarConsulta(
            "SELECT gm.Id_Monitoria, gm.Materia, gm.Fecha, gm.Descripcion, gm.Id_Monitor,
                    p.Nombre AS Nombre_Monitor, rg.ruta_imagen
             FROM Grupo_Monitoria gm
             JOIN Persona p ON gm.Id_Monitor = p.Id_Persona
             LEFT JOIN Ruta_Grupo rg ON gm.Id_Monitoria = rg.Id_Grupo
             WHERE LOWER(CONVERT(gm.Materia USING utf8)) LIKE LOWER(CONVERT(:materia USING utf8))",
            array(':materia' => $materia)
        );

        if (!$data_table || empty($data_table)) {
            return [];
        }

        $monitorias = [];
        foreach ($data_table as $fila) {
            $monitorias[] = [
                'Id_Monitoria' => $fila["Id_Monitoria"],
                'Materia' => $fila["Materia"],
                'Fecha' => $fila["Fecha"],
                'Descripcion' => $fila["Descripcion"],
                'Id_Monitor' => $fila["Id_Monitor"],
                'Nombre_Monitor' => $fila["Nombre_Monitor"],
                'ruta_imagen' => $fila["ruta_imagen"]
            ];
        }

        return $monitorias;
    }



    public function modificarGrupo(Grupo_Monitoria $grupo)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Grupo_Monitoria SET 
                    Id_Monitor = :Id_Monitor, 
                    Materia = :Materia, 
                    Fecha = :Fecha 
                WHERE Id_Monitoria = :Id_Monitoria";

        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':Id_Monitoria' => $grupo->getId_Monitoria(),
                ':Id_Monitor' => $grupo->getId_Monitor(),
                ':Materia' => $grupo->getMateria(),
                ':Fecha' => $grupo->getFecha()
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
    public function buscarGrupoPorIdPlay($Id_Monitoria)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT gm.Id_Monitoria, gm.Id_Monitor, gm.Materia, gm.Fecha, gm.Descripcion, r.ruta_imagen, p.Nombre AS Nombre_Monitor
        FROM Grupo_Monitoria gm
        LEFT JOIN Persona p ON gm.Id_Monitor = p.Id_Persona
        JOIN Ruta_Grupo r ON gm.Id_Monitoria = r.Id_Grupo
        WHERE gm.Id_Monitoria = :Id_Monitoria",
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
            'Fecha' => $fila["Fecha"],
            'Descripcion' => $fila["Descripcion"],
            'Nombre_Monitor' => $fila["Nombre_Monitor"],
            'ruta_imagen' => $fila["ruta_imagen"],

        ];
    }


    public function borrarGrupo($ID)
    {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM Grupo_Monitoria WHERE Id_Monitoria = :Id_Grupo", array('Id_Grupo' => $ID));

        return $resultado;
    }

    function insertarEstudianteEnGrupo($idGrupo, $idEstudiante)
    {
        $data_source = new DataSource();
        $fechaIngreso = date('Y-m-d'); // Fecha actual

        $result = $data_source->ejecutarActualizacion(
            "INSERT INTO Estudiante_en_Grupo (Id_Grupo, Id_Estudiante, Fecha_Ingreso) VALUES (:idGrupo, :idEstudiante, :fechaIngreso)",
            array(
                ':idGrupo' => $idGrupo,
                ':idEstudiante' => $idEstudiante,
                ':fechaIngreso' => $fechaIngreso
            )
        );

        return $result;
    }

    function verificarEstudianteEnGrupo($idGrupo, $idUsuario)
    {
        $data_source = new DataSource();

        // Consulta para verificar si el estudiante ya está en el grupo
        $query = "SELECT COUNT(*) AS count FROM Estudiante_en_Grupo WHERE Id_Grupo = :idGrupo AND Id_Estudiante = :idUsuario";
        $params = array(':idGrupo' => $idGrupo, ':idUsuario' => $idUsuario);
        $result = $data_source->ejecutarConsulta($query, $params);

        if ($result && isset($result[0]['count']) && $result[0]['count'] > 0) {
            return true; // El estudiante ya está en el grupo
        } else {
            return false; // El estudiante no está en el grupo
        }
    }
    function agregarAnuncio($idMonitoria, $idMonitor, $descripcion)
    {
        $data_source = new DataSource();

        // Insertar el nuevo anuncio en la base de datos
        $query = "INSERT INTO Anuncio (Id_Monitoria, Id_Monitor, Descripcion, Fecha) VALUES (:idMonitoria, :idMonitor, :descripcion, CURDATE())";
        $params = array(
            ':idMonitoria' => $idMonitoria,
            ':idMonitor' => $idMonitor, // Asumiendo que obtienes el ID del monitor de la sesión o algún otro método
            ':descripcion' => $descripcion
        );
        $success = $data_source->ejecutarActualizacion($query, $params);

        if ($success) {
            return true; // Inserción exitosa
        } else {
            return false; // Error al insertar
        }
    }
    function creargrupo($idUsuario, $materia, $descripcion)
    {
        $data_source = new DataSource();
        $fecha = date('Y-m-d');
        $query = "INSERT INTO Grupo_Monitoria (Id_Monitor, Materia, Fecha, Descripcion) 
              VALUES (:idUsuario, :materia, :fechaInicio, :descripcion)";
        $params = array(
            ':idUsuario' => $idUsuario,
            ':materia' => $materia,
            ':fechaInicio' => $fecha,
            ':descripcion' => $descripcion
        );

        $success = $data_source->ejecutarActualizacion($query, $params);
        if ($success) {
            return true; // Inserción exitosa
        } else {
            return false; // Error al insertar
        }
    }
    public function buscarGruposPorMonitor($idMonitor)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT gm.Id_Monitoria, gm.Id_Monitor, gm.Materia, gm.Fecha, gm.Descripcion, r.ruta_imagen, p.Nombre AS Nombre_Monitor
        FROM Grupo_Monitoria gm
        JOIN Persona p ON gm.Id_Monitor = p.Id_Persona
        JOIN Ruta_Grupo r ON gm.Id_Monitoria = r.Id_Grupo
        WHERE gm.Id_Monitor = :Id_Monitor",
            array(':Id_Monitor' => $idMonitor)
        );

        if (!$data_table) {
            return null;
        }

        $grupos = [];

        foreach ($data_table as $fila) {
            $grupos[] = [
                'Id_Monitoria' => $fila["Id_Monitoria"],
                'Id_Monitor' => $fila["Id_Monitor"],
                'Materia' => $fila["Materia"],
                'Fecha' => $fila["Fecha"],
                'Descripcion' => $fila["Descripcion"],
                'Nombre_Monitor' => $fila["Nombre_Monitor"],
                'ruta_imagen' => $fila["ruta_imagen"],
            ];
        }

        return $grupos;
    }
}
