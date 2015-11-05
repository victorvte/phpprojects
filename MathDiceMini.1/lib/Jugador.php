<?php
class Jugador{
    
    public $nombre = "Jugador 1";
    public $apellido = "Jugador 1 apellido";
    public $edad = 0;
    public $idioma = "es";
    
    function __construct(){
        
    }
    
    public function getNombre(){
        return $this->nombre;
    }
}

?>