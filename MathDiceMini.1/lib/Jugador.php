<?php
class Jugador{
    
    public $nombre = "Jugador 1";
    public $apellido = "Jugador 1 apellido";
    public $edad = 0;
    public $idioma = "es";
    public $puntos = 0;
    
    //------ constructores
    function __construct(){}
    function __construct($nombre, $apellido, $edad, $idioma){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->idioma = $idioma;
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
        $this->puntos = $puntos;
    }
    
    //------ mostrar por pantalla
    public function mostrar($mostrar){
        echo $mostrar."<br>";
    }
    
    
}
?>