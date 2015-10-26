<?php

    //include 'dado.php';
    
    function dadoAleatorio($min, $max){
        $numeroDado = rand ( $min , $max );
        return $numeroDado;
    }
    
    $dadoUno = $_POST["dadoUno"];
    $dadoDos = $_POST["dadoDos"];
    $imgDadoUno = $_POST["imgDadoUno"];
    $imgDadoDos = $_POST["imgDadoDos"];
    
    //var_dump($imgDadoUno, $dadoUno);
    if($imgDadoUno==$dadoUno && $imgDadoDos==$dadoDos){
    
        if($_POST["op"]=="mas"){
            $resul = $dadoUno + $dadoDos;
        }
        if($_POST["op"]=="menos"){
            $resul = $dadoDos - $dadoUno;
        }
    }
    
?>