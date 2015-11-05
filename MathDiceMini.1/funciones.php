<?php

    // funcion sacar numeros aleatorios
    function dadoAleatorio($min, $max){
        $numeroDado = rand ( $min , $max );
        return $numeroDado;
    }
    
    // Recibir los datos del formulario
    $dadoUno = $_POST["dadoUno"];
    $dadoDos = $_POST["dadoDos"];
    $imgDadoUno = $_POST["imgDadoUno"];
    $imgDadoDos = $_POST["imgDadoDos"];
    
    //var_dump($imgDadoUno, $dadoUno);
    // Se comprueba que el numero del form y la img del dado son iguales
    if($imgDadoUno==$dadoUno && $imgDadoDos==$dadoDos){
    
        if($_POST["op"]=="mas"){
            $resul = $dadoUno + $dadoDos;
        }
        if($_POST["op"]=="menos"){
            $resul = $dadoDos - $dadoUno;
        }
    }
    
?>