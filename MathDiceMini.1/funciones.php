<?php

    // funcion sacar numeros aleatorios
    function dadoAleatorio($min, $max){
        $numeroDado = rand ( $min , $max );
        return $numeroDado;
    }
    
    // Recibir los datos del formulario
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
    }
    if($_POST["opDado2"]=="mas"){
        $resul = $resul + $dado2;
    }else if($_POST["opDado2"]=="menos"){
        $resul = $resul - $dado2;
    }
    if($_POST["opDado3"]=="mas"){
        $resul = $resul + $dado3;
    }else if($_POST["opDado3"]=="menos"){
        $resul = $resul - $dado3;
    }
    if($_POST["opDado4"]=="mas"){
        $resul = $resul + $dado4;
    }else if($_POST["opDado4"]=="menos"){
        $resul = $resul - $dado4;
    }
    if($_POST["opDado5"]=="mas"){
        $resul = $resul + $dado5;
    }else if($_POST["opDado5"]=="menos"){
        $resul = $resul - $dado5;
    }
    
?>