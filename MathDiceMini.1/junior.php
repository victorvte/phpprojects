<?php
  //@session_start();
  //Inncluir ficheros externos
    
    //include 'funciones.php';
    include 'lib/Juego.php';
    include 'lib/Jugador.php';

  //recuperar variables session
  @session_start();
  //$nombre = $_SESSION['nombre'];
  //var_dump($_SESSION['nombre']);
  //$apellido = $_SESSION["apellido"];
  //$edad = $_SESSION["edad"];
  //var_dump($_SESSION["jugador"]);
  
  //Comprobar que el jugador se ha registrado, sino se le redirige al indice
  if(!isset($_SESSION['jugador'])){
    header('Location: https://phpprojects-victorvte.c9.io/MathDiceMini.1/index.php');
  }else{
  //if(isset($_SESSION['jugador'])){
    //var_dump($_SESSION['jugador']);
    $juego = new Juego();
    
    //establecer meta para calcular
    $dado0 = $juego->dadoAleatorio(1, 12);
    //$jugador = unserialize($_SESSION['jugador']);
    //$_SESSION['jugador']->setMeta(1);
    $_SESSION['jugador'] ->setMeta(10);
    //$tirada = $jugador->getTirada();
    //var_dump($_POST['opDado1'],$_POST['opDado2'],$_POST['opDado3'],$_POST['opDado4'],$_POST['opDado5']);
      
      //calcular
      if ($_POST['opDado1']!=null||$_POST['opDado2']!=null||$_POST['opDado3']!=null||$_POST['opDado4']!=null||$_POST['opDado5']!=null){
        $_SESSION['jugador']->setTirada(1);
        $resulOp = $juego->calcular();
        $_SESSION["calcular"] = $resulOp;
        //var_dump($_SESSION["calcular"]);
        //var_dump($_POST['opDado0']);
        if(isset($_POST['dado0'])){
          if($_POST['dado0'] == $_SESSION["calcular"]){
            $_SESSION['jugador']->setPuntos(1);
            
            if($_SESSION['jugador']->getPuntos() == $_SESSION['jugador']->getMeta()){
              echo '<script>
                      var c = confirm("Enhorabuena!! Has ganado! Quieres  seguir jugando?");
                        if (c == true) {
                            window.location.replace("https://phpprojects-victorvte.c9.io/MathDiceMini.1/junior.php");
                        } else {
                            window.location.replace("https://phpprojects-victorvte.c9.io/MathDiceMini.1/index.php");
                        }
                    </script>';
            }
          }
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
        <div class="col-sm-2"> Dado 1: <br> <img src="imagenes/dado<?php echo $dado1 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"> </div>
        <div class="col-sm-2"> Dado 2: <br> <img src="imagenes/dado<?php echo $dado2 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
        <div class="col-sm-2"> Dado 3: <br> <img src="imagenes/dado<?php echo $dado3 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
        <div class="col-sm-2"> Dado 4: <br> <img src="imagenes/dado<?php echo $dado4 = $juego->dadoAleatorio(1, 3); ?>.png" class="img-responsive"></div>
        <div class="col-sm-2"> Dado 5: <br> <img src="imagenes/dado<?php echo $dado5 = $juego->dadoAleatorio(1, 3); ?>.png" class="img-responsive"></div>
        
        <div class="col-sm-2"> </div>
        
      </div>
      
        <div class="row">
          
          <!-- Se utiliza post en el formulario para enviar los datos !-->
            <form method="post" action="junior.php">
              <div class="row">
              <div class="col-sm-2"> 
                Sumar -> 
                <input type="radio" name="opDado1" value="mas" /> <p></p>
                Restar ->
                <input type="radio" name="opDado1" value="menos"/> <br><br>
              </div>
              <div class="col-sm-2"> 
                Sumar -> 
                <input type="radio" name="opDado2" value="mas"/> <p></p>
                Restar ->
                <input type="radio" name="opDado2" value="menos"/> <br><br>
              </div>
              <div class="col-sm-2"> 
                Sumar -> 
                <input type="radio" name="opDado3" value="mas"/> <p></p>
                Restar ->
                <input type="radio" name="opDado3" value="menos"/> <br><br>
              </div>
              <div class="col-sm-2"> 
                Sumar -> 
                <input type="radio" name="opDado4" value="mas"/> <p></p>
                Restar ->
                <input type="radio" name="opDado4" value="menos"/> <br><br>
              </div>
              <div class="col-sm-2"> 
                Sumar -> 
                <input type="radio" name="opDado5" value="mas"/> <p></p>
                Restar ->
                <input type="radio" name="opDado5" value="menos"/> <br><br>
              </div>
              </div>
              
              <?php if($_SESSION['jugador']->getTipo() == "junior+"){?>
              <div class="row">
                  <div class="col-sm-2"> 
                  Dividir -> 
                  <input type="radio" name="opDado1" value="div" /> <p></p>
                  Multiplicar ->
                  <input type="radio" name="opDado1" value="mul"/> <br><br>
                  </div>
                  <div class="col-sm-2"> 
                    Dividir -> 
                    <input type="radio" name="opDado2" value="div" /> <p></p>
                    Multiplicar ->
                    <input type="radio" name="opDado2" value="mul"/> <br><br>
                  </div>
                  <div class="col-sm-2"> 
                    Dividir -> 
                    <input type="radio" name="opDado3" value="div" /> <p></p>
                    Multiplicar ->
                    <input type="radio" name="opDado3" value="mul"/> <br><br>
                  </div>
                  <div class="col-sm-2"> 
                    Dividir -> 
                    <input type="radio" name="opDado4" value="div" /> <p></p>
                    Multiplicar ->
                    <input type="radio" name="opDado4" value="mul"/> <br><br>
                  </div>
                  <div class="col-sm-2"> 
                    Dividir -> 
                    <input type="radio" name="opDado5" value="div" /> <p></p>
                    Multiplicar ->
                    <input type="radio" name="opDado5" value="mul"/> <br><br>
                </div>
                </div>
              <?php } ?>
              
              
              <input type="hidden" name="dado0" value="<?=$dado0?>"/> 
              <input type="hidden" name="dado1" value="<?=$dado1?>"/>
              <input type="hidden" name="dado2" value="<?=$dado2?>"/>
              <input type="hidden" name="dado3" value="<?=$dado3?>"/>
              <input type="hidden" name="dado4" value="<?=$dado4?>"/>
              <input type="hidden" name="dado5" value="<?=$dado5?>"/>
        </div>
        <div class="row">
          <div class="col-sm-2"> </div>
          <div class="col-sm-2"> </div>
          <div class="col-sm-2"> 
              <input type="submit" class="button" name="submit" value="Comprobar"/><br><br>
            </form>
          </div>
        </div>  

    </div>

  </body>
  
</html>