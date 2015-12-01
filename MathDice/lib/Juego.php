<?php
class Juego{
    
    // funcion sacar numeros aleatorios
    public function dadoAleatorio($min, $max){
        $numeroDado = rand ( $min , $max );
        return $numeroDado;
    }
    
    // calcular suma-resta de dados
    public function calcular(){
        $resul = 0;
        $dado0 = $_POST["dado0"];
        $dado1 = $_POST["dado1"];
        $dado2 = $_POST["dado2"];
        $dado3 = $_POST["dado3"];
        $dado4 = $_POST["dado4"];
        $dado5 = $_POST["dado5"];
    
        
        if($_POST["opDado1"]=="mas"){
            $resul = $resul + $dado1;
        }else if($_POST["opDado1"]=="menos"){
            $resul = $resul - $dado1;
        }else if($_POST["opDado1"]=="mul"){
            $resul = $resul * $dado1;
        }else if($_POST["opDado1"]=="div"){
            $resul = $resul / $dado1;
        }
        
        
        if($_POST["opDado2"]=="mas"){
            $resul = $resul + $dado2;
        }else if($_POST["opDado2"]=="menos"){
            $resul = $resul - $dado2;
        }else if($_POST["opDado2"]=="mul"){
            $resul = $resul * $dado2;
        }else if($_POST["opDado2"]=="div"){
            $resul = $resul / $dado2;
        }
        
        
        if($_POST["opDado3"]=="mas"){
            $resul = $resul + $dado3;
        }else if($_POST["opDado3"]=="menos"){
            $resul = $resul - $dado3;
        }else if($_POST["opDado3"]=="mul"){
            $resul = $resul * $dado3;
        }else if($_POST["opDado3"]=="div"){
            $resul = $resul / $dado3;
        }
        
        
        if($_POST["opDado4"]=="mas"){
            $resul = $resul + $dado4;
        }else if($_POST["opDado4"]=="menos"){
            $resul = $resul - $dado4;
        }else if($_POST["opDado4"]=="mul"){
            $resul = $resul * $dado4;
        }else if($_POST["opDado4"]=="div"){
            $resul = $resul / $dado4;
        }
        
        
        if($_POST["opDado5"]=="mas"){
            $resul = $resul + $dado5;
        }else if($_POST["opDado5"]=="menos"){
            $resul = $resul - $dado5;
        }else if($_POST["opDado5"]=="mul"){
            $resul = $resul * $dado5;
        }else if($_POST["opDado5"]=="div"){
            $resul = $resul / $dado5;
        }
        
        return $resul;
    }
    
}
?>