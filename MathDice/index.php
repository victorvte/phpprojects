<?php
  //Incluir los ficheros externos
    include 'lib/Jugador.php';
    
  session_start();
  
  if($_SESSION["idioma"]==null){
    $_SESSION["idioma"] = "es";
  }

  if($_POST["nombre"]!=null){
    $_SESSION['jugador'] = new Jugador($_POST["nombre"]);
  }else{
      $_SESSION['jugador'] = new Jugador("");
  }
  if($_SESSION['jugador']!=null){
    //establecer meta para calcular
    if($_POST["meta"]!=null){
      $meta = (int)$_POST["meta"];
      if(is_numeric($meta)){
        $_SESSION['jugador'] ->setMeta($_POST["meta"]);
      }else{
        $_SESSION['jugador'] ->setMeta(5);
      }
    }else{
      $_SESSION['jugador'] ->setMeta(5);
    }
    if(isset($_POST["apellido"])){
      $_SESSION['jugador']->setApellido($_POST["apellido"]);
    }

    if($_POST["juego"] == "junior"){
    $_SESSION['jugador']->setTipo("junior");
    }else{
    $_SESSION['jugador']->setTipo("junior+");
    }

    if($_POST["submit"]=="Jugar"){
      header('Location: https://phpprojects-victorvte.c9.io/MathDice/juego.php');
    }
  }
  
  else{
    session_destroy();
  }
  
?>

<!DOCTYPE html>
<html>
    <?php
    //incluir head
    include 'views/head.php';
    ?>
    <body>
    <?php
    //incluir vista de cabecera
    include 'lib/confCabecera.php';
    include 'views/cabecera.php';
    //incluir vista de indice
    include 'views/viewIndex.php';
    ?>  
    </body>
    
</html>