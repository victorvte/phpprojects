<?php
class Jugador{
    
    public $nombre = "Jugador 1";
    public $apellido = "";
    public $edad = 0;
    public $idioma = "es";
    public $puntos = 0;
    public $tirada = 0;
    public $meta = 0;
    
    //------ constructores
    //function __construct(){}
    function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
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
    
    
    //------ mostrar por pantalla
    public function mostrar($mostrar){
        echo $mostrar."<br>";
    }
    
    
}
?>