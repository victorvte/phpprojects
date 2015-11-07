<?php
  //Incluir los ficheros externos
      include 'conf.php';
      include 'funciones.php';
      //include 'lib/Jugador.php';
 @session_start();
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $edad = $_POST["edad"];
  $idiomaEn = $_POST["en"];
  $idiomaEs = $_POST["es"];
  
  if(isset($nombre)){
    if(isset($apellido)){
      if(isset($edad)){
        //$jugador = new Jugador($nombre, $apellido, $edad);
        $_SESSION['nombre'] = $nombre;
        echo $nombre;
        $_SESSION['apellido'] = $apellido;
        $_SESSION['edad'] = $edad;
      }
    }
  }
?>

<!DOCTYPE html>
<html>

  <head>
    <title>Math Dice Mini</title>
    <meta charset="utf-8">
    
    <?php
    
      
    ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  
  <body>
  
    <?php
    //Incluir cabecera
      include 'cabecera.php';
    ?>
  
    <div class="container">

      <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-4"> </div>
      </div>
      <div class="row">
        <div class="col-sm-6"> 
          <form method="post" action="index.php">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value=""/> <br>
            <label for="apellido">Apellido:</label> <br>
            <input type="text" class="form-control" name="apellido" value=""/> <br>
            <label for="edad">Edad:</label> <br>
            <input type="text" class="form-control" name="edad" value=""/> <br>
            <label for="idioma">Idioma:</label> <br>
              <label for="esp">Español:</label> 
              <input type="radio" name="es" value=""/> 
              <label for="eng">Ingles:</label>
              <input type="radio" name="en" value=""/> <br><br>
            <input type="hidden" name="imgDadoUno" value="<?=$imgDadoUno?>"/> 
            <input type="hidden" name="imgDadoDos" value="<?=$imgDadoDos?>"/> 
            <input type="submit" class="btn btn-default" name="submit" value="empezar"/>
          </form>
        </div>
        <div class="col-sm-6">
          <img src="imagenes/math-dice.png" class="img-responsive" alt="Cinque Terre">
        </div>
      </div>

    </div>
    
  </body>
  
</html>