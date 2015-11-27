<?php
  //Incluir los ficheros externos
    include 'conf.php';
    include 'lib/Jugador.php';
    
  session_start();
  if($_SESSION["idioma"]==null){
    $_SESSION["idioma"] = "es";
  }
  if($_SESSION["jugador"]==null){
      header('Location: https://phpprojects-victorvte.c9.io/MathDiceMini.2/index.php');
  }
  var_dump($_POST["nombre"]);
  if($_POST["nombre"]!=null  && $_POST["apellido"]!=null && $_POST["edad"]!=null){
      $_SESSION['jugador']->setNombre($_POST["nombre"]);
      $_SESSION['jugador']->setApellido($_POST["apellido"]);
      $_SESSION['jugador']->setEdad($_POST["edad"]);
  }
  if($_POST["submit"]=="Guardar Datos"){
      header('Location: https://phpprojects-victorvte.c9.io/MathDiceMini.2/junior.php');
    }
?>

<!DOCTYPE html>
<html>

  <head>
    <title>Math Dice Mini</title>
    <meta charset="utf-8">
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
          <form method="post" action="index2.php">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?=$_SESSION["jugador"]->getNombre()?>"/> <br>
            <label for="apellido">Apellido:</label> <br>
            <input type="text" class="form-control" name="apellido" value="<?=$_SESSION["jugador"]->getApellido()?>"/> <br>
            <label for="edad">Edad:</label> <br>
            <input type="text" class="form-control" name="edad" value="<?=$_SESSION["jugador"]->getEdad()?>"/> <br>
            
            
            <div class="col-sm-6"> 
            <input type="submit" class="btn btn-default" name="submit" value="Guardar Datos"/>
            </div>
          </form>
        </div>
        <div class="col-sm-6">
          <img src="imagenes/math-dice.png" class="img-responsive" alt="Cinque Terre">
        </div>
      </div>
    </div>
  </body>
</html>