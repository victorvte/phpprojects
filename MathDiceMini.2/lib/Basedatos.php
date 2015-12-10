<?php
class Basedatos
{

    private $host = "localhost";
    private $user = "victorvte";
    private $db = "mathdice";
    private $pass = "";
    private $conexion;
    
    function __construct(){
        $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    function comprobarConexion(){
        if($this->conexion->connect_errno){
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
    }
    
    function mostrarTabla(){
        $consulta = "SELECT * FROM usuarios";
        if($resultado = $this->conexion->query($consulta)){
            /*while($fila = $resultado->fetch_assoc()){
                $id = $fila['id'];
            }*/
            $fila = $resultado->fetch_assoc();
            $resultado->free();
        }
        return $fila;
    }
}
?>