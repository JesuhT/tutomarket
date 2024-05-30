<?php


class DataSource {
    
    private $cadenaConexion;
    private $conexion;
    
    public function __construct(){
        try{
            $config=fopen(__DIR__."/../../config/config.json","r");
            if(!$config){
                die("Cannot open configuration file!");
            }
            
            $content="";
            
            while(!feof($config)){
                $content.= fgets($config);
            }
            
            $json =json_decode($content, true);
            
            $this->cadenaConexion="mysql:host=".$json['host'].";dbname=".$json['database'].';charset=utf8';
            $this->conexion = new PDO($this->cadenaConexion,$json['username'],$json['password']);
        } catch (PDOException $ex) {
             echo $ex->getMessage();
        }
    }
    
    public function ejecutarConsulta($sql="", $values=array()){
        if($sql != ""){
            $consulta=$this->conexion->prepare($sql);
            $consulta->execute($values);
            $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $this->conexion=null;
            return $tabla_datos;
        }else{
            return 0;
        }
    }
    
    
    public function ejecutarActualizacion($sql="", $values=array()){
        if($sql != ""){      
            $consulta=$this->conexion->prepare($sql);
            $consulta->execute($values);
            $numero_filas_afectadas = $consulta->rowCount();
            $this->conexion=null;
            return $numero_filas_afectadas;
        }else{
            return 0;
        }
    }
    
}

?>
