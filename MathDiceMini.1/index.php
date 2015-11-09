<?php
  if($_POST["submit"]=="Jugar Junior"){
    header('Location: https://phpprojects-victorvte.c9.io/MathDiceMini.1/junior.php');
  }elseif($_POST["submit"]=="Jugar Junior+"){
    header('Location: https://phpprojects-victorvte.c9.io/MathDiceMini.1/index.php');
  }
  //Incluir los ficheros externos
      include 'conf.php';
      include 'funciones.php';
      include 'lib/Jugador.php';
 @session_start();
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $edad = $_POST["edad"];
  $idiomaEn = $_POST["en"];
  $idiomaEs = $_POST["es"];
  $isRegitred = false;
  //$_SESSION["idioma"] = "es";
  
  if($nombre != "Jugador 1"){
        //$jugador = new Jugador($nombre, $apellido, $edad);
        $_SESSION['nombre'] = $nombre;
        $_SESSION['jugador'] = new Jugador($nombre, $apellido, $edad);
        echo $nombre;
        $isRegitred = true;
        if(isset($apellido)){
          $_SESSION['apellido'] = $apellido;
          $_SESSION['jugador']->setApellido($apellido);
        }
        if(isset($edad)){
          $_SESSION['edad'] = $edad;
          $_SESSION['jugador']->setEdad($edad);
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
            <input type="submit" class="btn btn-default" name="submit" value="Jugar Junior"/>
            <input type="submit" class="btn btn-default" name="submit" value="Jugar Junior+"/>
          </form>
        </div>
        <div class="col-sm-6">
          <img src="imagenes/math-dice.png" class="img-responsive" alt="Cinque Terre">
        </div>
      </div>

    </div>
    
  </body>
  
</html>