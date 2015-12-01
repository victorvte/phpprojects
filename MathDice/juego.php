<?php
  //Inncluir ficheros externos
    include 'lib/Juego.php';
    include 'lib/Jugador.php';

  //recuperar variables session
  session_start();

  //Comprobar que el jugador se ha registrado, sino se le redirige al indice
  if(!isset($_SESSION['jugador'])){
    header('Location: https://phpprojects-victorvte.c9.io/MathDice/index.php');
  }else{
    $juego = new Juego();
    //dado de 6
    $dado0 = $juego->dadoAleatorio(1, 12);
    $dado1 = $juego->dadoAleatorio(1, 6);
    $dado2 = $juego->dadoAleatorio(1, 6);
    $dado3 = $juego->dadoAleatorio(1, 6);
    //dados de 3
    $dado4 = $juego->dadoAleatorio(1, 3);
    $dado5 = $juego->dadoAleatorio(1, 3);

    if($_POST['resul']!=null && $_POST['resul']!=""){
    $_SESSION["calcular"] = $_POST['resul'];
      if($_POST['dado0'] == $_SESSION["calcular"]){
        $_SESSION['jugador']->setPuntos(1);
        if($_SESSION['jugador']->getPuntos() == $_SESSION['jugador']->getMeta()){
          if($_SESSION['jugador']->getTipo() == "junior"){
            echo '<script>
                  var c = confirm("Has ganado! Subes de nivel! Quieres  seguir jugando?");
                    if (c == true) {
                        window.location.replace("https://phpprojects-victorvte.c9.io/MathDice/juego.php");
                    } else {
                        window.location.replace("https://phpprojects-victorvte.c9.io/MathDice/index.php");
                    }
                </script>';
            $_SESSION['jugador']->setTipo("junior+");
            $_SESSION['jugador'] ->setMeta(($_SESSION['jugador']->getMeta()+$_SESSION['jugador']->getMeta()));
          }
          if($_SESSION['jugador']->getTipo() == "junior+"){
            $_SESSION['jugador'] ->setMeta(($_SESSION['jugador']->getMeta()+$_SESSION['jugador']->getMeta()));
          }
        }
      }
    }
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
    //Incluir cabecera
      include 'lib/confCabecera.php';
      include 'views/cabecera.php';
    //Incluir container
    if($_GET["vista"]!=null){
      $v = substr($_GET["vista"], -2);
      if($v=="c"){
        include 'views/containerJuego2.php';
      }
      if($v=="f"){
        include 'views/containerJuego.php';
      }
    }else{
      include 'views/containerJuego2.php';
    }
      
    ?>
  </body>
  
</html>