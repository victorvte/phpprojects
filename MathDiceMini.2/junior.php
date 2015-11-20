<?php
  //Inncluir ficheros externos
    
    include 'lib/Juego.php';
    include 'lib/Jugador.php';

  //recuperar variables session
  session_start();

  //Comprobar que el jugador se ha registrado, sino se le redirige al indice
  if(!isset($_SESSION['jugador'])){
    header('Location: https://phpprojects-victorvte.c9.io/MathDiceMini.2/index.php');
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

    //establecer meta para calcular
    $_SESSION['jugador'] ->setMeta(10);

      //calcular
      //if ($_POST['opDado1']!=null||$_POST['opDado2']!=null||$_POST['opDado3']!=null||$_POST['opDado4']!=null||$_POST['opDado5']!=null){
        $_SESSION['jugador']->setTirada(1);
        $_SESSION["calcular"] = $_POST['resul'];

        if(isset($_POST['dado0'])){
          if($_POST['dado0'] == $_SESSION["calcular"]){
            $_SESSION['jugador']->setPuntos(1);
            
            if($_SESSION['jugador']->getPuntos() == $_SESSION['jugador']->getMeta()){
              echo '<script>
                      var c = confirm("Enhorabuena!! Has ganado! Quieres  seguir jugando?");
                        if (c == true) {
                            window.location.replace("https://phpprojects-victorvte.c9.io/MathDiceMini.2/junior.php");
                        } else {
                            window.location.replace("https://phpprojects-victorvte.c9.io/MathDiceMini.2/index.php");
                        }
                    </script>';
            }
          }
        }
      //}
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
    <script src="js/js.js"></script>
  </head>
  <body>
    <?php
    //Incluir cabecera
      include 'conf.php';
      include 'cabecera.php';
    ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <table class="table">
            <thead>
              <tr>
                <th>Ultima tirada</th>
              </tr>
            </thead>
            <tbody>
              <tr class="success">
                <td>Resultado tirada: </td>
                <td><?= $_SESSION["calcular"] ?></td>
              </tr>
              <tr class="danger">
                <td>Numero a sacar: </td>
                <td><?= $_POST['dado0'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-sm-2"> </div>
        <div class="col-sm-2">  <img src="imagenes/dodecaedro<?php echo $dado0 ?>.png" class="img-responsive"></div>
        <div class="col-sm-2"> </div>
        <div class="col-sm-2">
          
          <table class="table"><thead>
              <tr>
                <th>Jugador: <?= $_SESSION['jugador']->getNombre(); ?> <?= $_SESSION['jugador']->getApellido(); ?></th>
              </tr>
            </thead>
            <tbody>
              <tr class="success">
                <td>Tirada: </td>
                <td><?= $_SESSION['jugador']->getTirada(); ?></td>
              </tr>
              <tr class="info">
                <td>Puntos: </td>
                <td><?= $_SESSION['jugador']->getPuntos(); ?></td>
              </tr>
              <tr class="danger">
                <td>Meta</td>
                <td><?= $_SESSION['jugador']->getMeta(); ?></td>
              </tr>
            </tbody>
          </table>
          
        </div>
        
      </div>
      <div class="row" id="numRandom">
        <!-- Se utiliza la funcion 'dadoAleatorio' del fichero 'funciones' para hallar los numeros aleatorios de las imgenes de los dados !-->
        <div class="col-sm-2"> Dado 1: <br> 
        <img class="dado3" src="imagenes/dado<?php echo $dado1 ?>.png" class="img-responsive" onClick="dado1(<?=$dado1?>)" id="1"></div>
        <div class="col-sm-2"> Dado 2: <br> 
        <img class="dado3" src="imagenes/dado<?php echo $dado2 ?>.png" class="img-responsive" onClick="dado2(<?=$dado2?>)" id="2"></div>
        <div class="col-sm-2"> Dado 3: <br> 
        <img class="dado3" src="imagenes/dado<?php echo $dado3 ?>.png" class="img-responsive" onClick="dado3(<?=$dado3?>)" id="3"></div>
        <div class="col-sm-2"> Dado 4: <br> 
        <img class="dado6" src="imagenes/dado<?php echo $dado4 ?>.png" class="img-responsive" onClick="dado4(<?=$dado4?>)" id="4"></div>
        <div class="col-sm-2"> Dado 5: <br> 
        <img class="dado6" src="imagenes/dado<?php echo $dado5 ?>.png" class="img-responsive" onClick="dado5(<?=$dado5?>)" id="5"></div>
        
        <div class="col-sm-2"> </div>
        
      </div>
      
        <div class="row">
          <form method="post" action="junior.php">
          <div class="col-sm-2"><br> <img class="dado3" src="imagenes/suma.jpg" class="img-responsive" onClick="añadirOp('+')"> </div>
          <div class="col-sm-2"><br> <img class="dado3" src="imagenes/resta.jpg" class="img-responsive" onClick="añadirOp('-')"> </div>
          <?php if($_SESSION['jugador']->getTipo() == "junior+"){?>
            <div class="col-sm-2"><br> <img class="dado3" src="imagenes/multiplicacion.jpg" class="img-responsive" onClick="añadirOp('*')"> </div>
            <div class="col-sm-2"><br> <img class="dado3" src="imagenes/division.jpg" class="img-responsive" onClick="añadirOp('/')"> </div>
          <?php } ?>
              
              <input type="hidden" name="dado0" value="<?=$dado0?>"/> 
              <input type="hidden" name="dado1" value="<?=$dado1?>"/>
              <input type="hidden" name="dado2" value="<?=$dado2?>"/>
              <input type="hidden" name="dado3" value="<?=$dado3?>"/>
              <input type="hidden" name="dado4" value="<?=$dado4?>"/>
              <input type="hidden" name="dado5" value="<?=$dado5?>"/>
        </div>

        <div class="row">
          <div class="col-sm-10"> 
              <table>
                <tr>
                  <td><input type="text" id="txtResul" value="" name="resul" readonly/></td>
                </tr>
              </table>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-2"> </div>
          <div class="col-sm-2"> </div>
          <div class="col-sm-2"> 
              <input type="submit" class="button" name="submit" value="Comprobar"  onClick="calcular()"/><br><br>
            </form>
          </div>
        </div> 

    </div>

  </body>
  
</html>