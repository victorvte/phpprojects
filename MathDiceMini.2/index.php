<?php
  //Incluir los ficheros externos
    include 'conf.php';
    include 'lib/Jugador.php';
    include 'lib/Basedatos.php';
    
  $db = new Basedatos();
  //$prueba = $db->mostrarUsuarios();
  //$prueba2 = $db->insertarUsuario("juan", "perez");
  //var_dump($prueba);
  //var_dump($prueba2);
  $prueba3 = $db->checkarUsuario("juan", "perez");
  var_dump($prueba3);
  session_start();
  if($_SESSION["idioma"]==null){
    $_SESSION["idioma"] = "es";
  }

  if($_POST["nombre"]!=null){
      $_SESSION['jugador'] = new Jugador($_POST["nombre"]);
      //establecer meta para calcular
      if($_POST["meta"]!=null){
        $_SESSION['jugador'] ->setMeta($_POST["meta"]);
      }else{
        $_SESSION['jugador'] ->setMeta(1);
      }
      
      if(isset($_SESSION['jugador'])){
        if(isset($_POST["apellido"])){
          $_SESSION['jugador']->setApellido($_POST["apellido"]);
        }
        if(isset($_POST["edad"])){
          $_SESSION['jugador']->setEdad($_POST["edad"]);
        }
        if(isset($_POST["en"])){
          $_SESSION['idioma'] = "en";
        }elseif(isset($_POST["es"])){
          $_SESSION['idioma'] = "es";
        }
        if(isset($_POST["juego"])){
          if($_POST["juego"] == "junior"){
          $_SESSION['jugador']->setTipo("junior");
          }else{
          $_SESSION['jugador']->setTipo("junior+");
          }
        }  

        if($_POST["submit"]=="Jugar"){
          header('Location: https://phpprojects-victorvte.c9.io/MathDiceMini.2/junior.php');
        }
      }
  
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
          <form method="post" action="index.php">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value=""/> <br>
            <label for="apellido">Apellido:</label> <br>
            <input type="text" class="form-control" name="apellido" value=""/> <br>
            <label for="edad">Meta:</label> <br>
            <input type="text" class="form-control" name="meta" value=""/> <br>
            
            <div class="col-sm-4"> 
              <label for="idioma">Idioma:</label> <br>
              <label for="esp">Español:</label> 
              <input type="radio" name="es" value=""/> 
              <label for="eng">Ingles:</label>
              <input type="radio" name="en" value=""/> <br>
            </div>
             <div class="col-sm-2"> </div>
             <div class="col-sm-2"> </div>
            <div class="col-sm-4"> 
              <label for="idioma">Tipo de Juego:</label> <br>
              <label for="esp">Junior:</label> 
              <input type="radio" name="juego" value="junior" checked/> 
              <label for="eng">Junior+:</label>
              <input type="radio" name="juego" value="junior+"/><br>
            </div>
            <div class="col-sm-2"> </div>
            <div class="col-sm-2"> </div>
            <div class="col-sm-6"> 
            <input type="submit" class="btn btn-primary" name="submit" value="Jugar"/>
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