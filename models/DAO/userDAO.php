<?php
require_once("datasource.php");
require_once(__DIR__ . "/../entities/Persona.php");
require_once(__DIR__ . "/../entities/Usuario.php");
require_once(__DIR__ . '/../../controllers/mdb/mdbPrograma.php');
class UsuarioDAO
{
    public function autenticarUsuario($email, $contrasena)
    {
        $data_source = new DataSource();

        // Consulta para autenticar al usuario utilizando JOIN entre Usuario y Persona
        $sql = "SELECT p.*, u.Password
            FROM Usuario u
            INNER JOIN Persona p ON u.Id_Usuario = p.Id_Persona
            WHERE u.Usuario = :email AND u.Password = :contrasena";

        $result = $data_source->ejecutarConsulta($sql, array(':email' => $email, ':contrasena' => $contrasena));

        if (count($result) == 1) {
            $data = $result[0];
            $usuario = new Persona(
                $data["Id_Persona"],
                $data["Nombre"],
                $data["Apellido"],
                $data["Correo_Institucional"],
                $data["Codigo_Estudiantil"],
                $data["Celular"],
                $data["Id_Rol"],
                $data["Id_Programa"],
                $data["Id_Estado"],
                $data["Biografia"],
                null
            );
            return $usuario;
        }

        return null;
    }



    public function buscarUsuarioPorId($ID_user)
    {
        $data_source = new DataSource();

        // Consulta utilizando JOIN entre Usuario y Persona para buscar por ID de usuario
        $sql = "SELECT p.*, u.Password
                FROM Usuario u
                INNER JOIN Persona p ON u.Id_Usuario = p.Id_Persona
                WHERE p.Id_Persona = :ID_user";

        $result = $data_source->ejecutarConsulta($sql, array(':ID_user' => $ID_user));


        if (count($result) == 1) {
            $data = $result[0];
            $usuario = new Persona(
                $data["Id_Persona"],
                $data["Nombre"],
                $data["Apellido"],
                $data["Correo_Institucional"],
                $data["Codigo_Estudiantil"],
                $data["Celular"],
                $data["Id_Rol"],
                $data["Id_Programa"],
                $data["Id_Estado"],
                $data["Biografia"],
                null
            );
            $usuarioArray = array(
                'Id_Persona' => $usuario->getId_Persona(),
                'Nombre' => $usuario->getNombre(),
                'Apellido' => $usuario->getApellido(),
                'Correo_Institucional' => $usuario->getCorreo_Institucional(),
                'Celular' => $usuario->getCelular(),
                'Codigo_Estudiantil' => $usuario->getCodigo_Estudiantil(),
                'Id_Rol' => $usuario->getId_Rol(),
                'Id_Programa' => $usuario->getId_Programa(),
                'Id_Estado' => $usuario->getId_Estado(),
                'Biografia' => $usuario->getBiografia()
            );
            return $usuarioArray;
        }
    }



    public function leerUsuarios()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Persona", NULL);
        $usuarios = array();

        if (!$data_table) {
            return array();
        }

        foreach ($data_table as $indice => $valor) {
            $persona = new Persona(
                $data_table[$indice]["Id_Persona"],
                $data_table[$indice]["Nombre"],
                $data_table[$indice]["Apellido"],
                $data_table[$indice]["Correo_Institucional"],
                $data_table[$indice]["Codigo_Estudiantil"],
                $data_table[$indice]["Celular"],
                $data_table[$indice]["Id_Rol"],
                $data_table[$indice]["Id_Programa"],
                $data_table[$indice]["Id_Estado"],
                $data_table[$indice]["Biografia"],
                null
            );

            $programa = buscarProgramaPorId($persona->getId_Programa());

            $personaArray = array(
                'Id_Persona' => $persona->getId_Persona(),
                'Nombre' => $persona->getNombre(),
                'Apellido' => $persona->getApellido(),
                'Correo_Institucional' => $persona->getCorreo_Institucional(),
                'Codigo_Estudiantil' => $persona->getCodigo_Estudiantil(),
                'Celular' => $persona->getCelular(),
                'Id_Rol' => $persona->getId_Rol(),
                'Id_Programa' => $persona->getId_Programa(),
                'programa' => $programa->getNombre(),
                'Id_Estado' => $persona->getId_Estado(),
                'Biografia' => $persona->getBiografia()
            );

            $usuarios[] = $personaArray;
        }

        return $usuarios;
    }


    public function insertarPersona(Persona $persona)
    {
        $data_source = new DataSource();

        // Insert statement for Persona table
        $sql = "INSERT INTO Persona (Nombre, Apellido, Correo_Institucional, Codigo_Estudiantil, Celular, Id_Rol, Id_Programa, Id_Estado, Biografia)
            VALUES (:nombre, :apellido, :email, :codigoEstudiantil, :celular, :idRol, :idPrograma, :idEstado, :biografia)";

        // Parameters for the insert statement
        $params = array(
            ':nombre' => $persona->getNombre(),
            ':apellido' => $persona->getApellido(),
            ':email' => $persona->getCorreo_Institucional(),
            ':codigoEstudiantil' => $persona->getCodigo_Estudiantil(),
            ':celular' => $persona->getCelular(),
            ':idRol' => $persona->getId_Rol(),
            ':idPrograma' => $persona->getId_Programa(),
            ':idEstado' => $persona->getId_Estado(),
            ':biografia' => $persona->getBiografia()
        );

        // Execute the insert statement
        $resultado = $data_source->ejecutarActualizacion($sql, $params);

        return $resultado;
    }


    public function insertarUsuario(Usuario $usuario)
    {
        $data_source = new DataSource();

        // Insert statement for Usuario table
        $sql = "INSERT INTO Usuario (Usuario, Password) VALUES (:usuario, :password)";

        // Parameters for the insert statement
        $params = array(
            ':usuario' => $usuario->getUsuario(),
            ':password' => $usuario->getPassword()
        );

        // Execute the insert statement
        $resultado = $data_source->ejecutarActualizacion($sql, $params);

        return $resultado;
    }




    public function modificarContraseña(Usuario $user, $newPassword)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Usuario SET Contrasena = :Contrasena WHERE idUser = :idUser";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':Contrasena' => $newPassword,
            ':idUser' => $user->getID_User()
        ));

        return $resultado;
    }

    public function modificarPersona(Persona $persona)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Persona SET 
                Nombre = :Nombre, 
                Apellido = :Apellido, 
                Correo_Institucional = :Correo_Institucional, 
                Codigo_Estudiantil = :Codigo,
                Celular = :Celular, 
                Id_Rol = :Id_Rol, 
                Id_Programa = :Id_Programa,
                Id_Estado= :Id_Estado,
                Biografia = :Biografia 
            WHERE Id_Persona = :Id_Persona";

        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(
                ':Nombre' => $persona->getNombre(),
                ':Apellido' => $persona->getApellido(),
                ':Correo_Institucional' => $persona->getCorreo_Institucional(),
                ':Codigo' => $persona->getCodigo_Estudiantil(),
                ':Celular' => $persona->getCelular(),
                ':Id_Rol' => $persona->getId_Rol(),
                ':Id_Programa' => $persona->getId_Programa(),
                ':Biografia' => $persona->getBiografia(),
                ':Id_Estado' => $persona->getId_Estado(),
                ':Id_Persona' => $persona->getId_Persona()
            )
        );
        return $resultado;
    }


    public function verificarExistencia($valor, $columna)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM Persona WHERE $columna = :valor", array(':valor' => $valor));
        $personas = array();
        if (count($data_table) > 0) {
            // Persona existe, devolver los datos de la persona
            foreach ($data_table as $indice => $valor) {
                $persona = new Persona(
                    $data_table[$indice]["Id_Persona"],
                    $data_table[$indice]["Nombre"],
                    $data_table[$indice]["Apellido"],
                    $data_table[$indice]["Correo_Institucional"],
                    $data_table[$indice]["Codigo_Estudiantil"],
                    $data_table[$indice]["Celular"],
                    $data_table[$indice]["Id_Rol"],
                    $data_table[$indice]["Id_Programa"],
                    $data_table[$indice]["Id_Estado"],
                    $data_table[$indice]["Biografia"],
                    null
                );

                array_push($personas, $persona);
            }
            $personasArray = array();

            foreach ($personas as $persona) {
                // No estoy seguro de dónde obtienes buscarProgramaPorId y buscarRolPorId,
                // pero asumo que son funciones que obtienen el nombre del programa y rol respectivamente.
                $programa = buscarProgramaPorId($persona->getId_Programa());
                $usuarioArray = array(
                    'ID_Persona' => $persona->getId_Persona(),
                    'Nombre' => $persona->getNombre(),
                    'Apellido' => $persona->getApellido(),
                    'Correo_Institucional' => $persona->getCorreo_Institucional(),
                    'Codigo_Estudiantil' => $persona->getCodigo_Estudiantil(),
                    'Celular' => $persona->getCelular(),
                    'ID_Rol' => $persona->getId_Rol(),
                    'ID_Programa' => $persona->getId_Programa(),
                    'programa' => $programa->getNombre(),
                    'Biografia' => $persona->getBiografia(),
                );

                $personasArray[] = $usuarioArray;
            }
            return $personasArray;
        } else {
            // Persona no existe
            return null;
        }
    }

    public function borrarUsuario($ID_user)
    {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM Usuario WHERE Id_Usuario = :ID_user", array('ID_user' => $ID_user));
        return $resultado;
    }

    public function borrarPersona($ID_persona)
    {
        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM Persona WHERE Id_Persona = :ID_persona", array('ID_persona' => $ID_persona));
        return $resultado;
    }

    public function verUsuarioPorId($idUsuario)
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta(
            "SELECT Usuario.ID_user, Usuario.Nombre, Usuario.Apellido, Usuario.Email, Usuario.Contrasena, Usuario.Celular, Usuario.ID_rol, Usuario.ID_programa AS NombrePrograma,  
            FROM Usuario
            WHERE ID_user = :idUsuario",
            array(':idUsuario' => $idUsuario)
        );

        if (!$data_table || empty($data_table)) {
            return null;
        }

        $fila = $data_table[0];

        return [
            'ID_usuario' => $fila["ID_usuario"],
            'Nombres' => $fila["Nombres"],
            'Apellidos' => $fila["Apellidos"],
            'Email' => $fila["Email"],
            'Contrasena' => $fila["Contrasena"],
            'Celular' => $fila["Celular"],
            'ID_rol' => $fila["ID_rol"],
            'NombrePrograma' => $fila["NombrePrograma"]
        ];
    }
    function esAdministrador($idUsuario)
    {
        $data_source = new DataSource();
        $sql = "SELECT ID_rol FROM Usuario WHERE ID_user = :idUsuario";
        $params = array(':idUsuario' => $idUsuario);
        $resultado = $data_source->ejecutarConsulta($sql, $params);

        if ($resultado && count($resultado) > 0) {
            $idRol = $resultado[0]['ID_rol'];

            $rolAdministrador = 2;

            if ($idRol == $rolAdministrador) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function agregarToken($token)
    {
        $data_source = new DataSource();
        $sql = "UPDATE Token
        SET ID_user = :ID_user,
            reset_token_hash = :reset_token_hash ,
            reset_token_expires_at = :reset_token_expires_at
        WHERE ID_user = :ID_user";
        $resultado = $data_source->ejecutarActualizacion(
            $sql,
            array(

                ':ID_user' => $token->getID_User(),
                ':reset_token_hash' => $token->getToken(),
                ':reset_token_expires_at' => $token->getResetDate(),
            )
        );
        return $resultado;
    }
    public function obtenerCantidadEstudiantes()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT COUNT(*) as cantidad FROM Persona WHERE Id_Rol = 2");
        return $data_table[0]['cantidad'];
    }

    public function obtenerCantidadCalificaciones()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT COUNT(*) as cantidad FROM Persona WHERE Id_Rol = 3");
        return $data_table[0]['cantidad'];
    }

    public function obtenerCantidadDonaciones()
    {
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT COUNT(*) as cantidad FROM Persona WHERE Id_Rol = 4");
        return $data_table[0]['cantidad'];
    }
}
