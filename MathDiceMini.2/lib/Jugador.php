<?php
class Jugador{
    
    public $nombre = "Jugador 1";
    public $apellido = "";
    public $edad = 0;
    public $idioma = "es";
    public $puntos = 0;
    public $tirada = 0;
    public $meta = 0;
    public $tipo = "";
    
    //------ constructores
    //function __construct(){}
    function __construct($nombre){
        $this->nombre = $nombre;
    }
    
    //------- getters
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getIdioma(){
        return $this->idioma;
    }
    public function getPuntos(){
        return $this->puntos;
    }
    public function getTirada(){
        return $this->tirada;
    }
    public function getMeta(){
        return $this->meta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    
    //------ setters
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function setEdad($edad){
        $this->edad = $edad;
    }
    public function setIdioma($idioma){
        $this->idioma = $idioma;
    }
    public function setPuntos($puntos){
        $this->puntos += $puntos;
    }
    public function setMeta($meta){
        $this->meta = $meta;
    }
    public function setTirada($tirada){
        $this->tirada = $this->tirada+$tirada;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
}
?>