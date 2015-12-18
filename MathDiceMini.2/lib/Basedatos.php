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
    
    function insertarUsuario($nombre, $apellido){
        $consulta = "INSERT INTO  `mathdice`.`usuarios` (`id` ,`nombre` ,`apellido`)VALUES (NULL ,  '$nombre',  '$apellido');";
        $resultado = $this->conexion->query($consulta);
        return $resultado;
    }
    
    function checkarUsuario($nombre, $apellido){
        $consulta = "SELECT * FROM usuarios WHERE nombre='$nombre' AND apellido='$apellido'";
        $resultado = $this->conexion->query($consulta);
        $fila = $resultado->fetch_assoc();
        
        if($fila!=null){
            return $fila;
        }else{
            return false;
        }
    }
    
    /*function mostrarUsuarios(){
        $consulta = "SELECT * FROM usuarios";
        if($resultado = $this->conexion->query($consulta)){
            $fila = $resultado->fetch_assoc();
            $resultado->free();
        }
        return $fila;
    }*/
}
?>