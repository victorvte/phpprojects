

<!DOCTYPE html>
<html>

  <head>
    <title>Math Dice Mini</title>
    <meta charset="utf-8">
    
    <?php
    //Inncluir los ficheros externos
      include 'conf.php';
      //include 'funciones.php';
      include 'lib/Juego.php';
      
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
      $juego = new Juego();
      
    ?>
  
    <div class="container">
      <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-2"> </div>
        <div class="col-sm-2"> Dado Principal(dodecaedro): <br> <img src="imagenes/dado<?php echo $dado0 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
      </div>
      <div class="row" id="numRandom">
        <!-- Se utiliza la funcion 'dadoAleatorio' del fichero 'funciones' para hallar los numeros aleatorios de las imgenes de los dados !-->
        <div class="col-sm-2"> Dado 1: <br> <img src="imagenes/dado<?php echo $dado1 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"> </div>
        <div class="col-sm-2"> Dado 2: <br> <img src="imagenes/dado<?php echo $dado2 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
        <div class="col-sm-2"> Dado 3: <br> <img src="imagenes/dado<?php echo $dado3 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
        <div class="col-sm-2"> Dado 4: <br> <img src="imagenes/dado<?php echo $dado4 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
        <div class="col-sm-2"> Dado 5: <br> <img src="imagenes/dado<?php echo $dado5 = $juego->dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
        
      </div>
      
        <div class="row">
          
          <!-- Se utiliza post en el formulario para enviar los datos !-->
            <form method="post" action="junior.php">
              <div class="col-sm-2"> 
                Sumar dado --> 
                <input type="radio" name="opDado1" value="mas"/> <p></p>
                Restar dado -->
                <input type="radio" name="opDado1" value="menos"/> <br><br>
              </div>
              <div class="col-sm-2"> 
                Sumar dado --> 
                <input type="radio" name="opDado2" value="mas"/> <p></p>
                Restar dado -->
                <input type="radio" name="opDado2" value="menos"/> <br><br>
              </div>
              <div class="col-sm-2"> 
                Sumar dado --> 
                <input type="radio" name="opDado3" value="mas"/> <p></p>
                Restar dado -->
                <input type="radio" name="opDado3" value="menos"/> <br><br>
              </div>
              <div class="col-sm-2"> 
                Sumar dado --> 
                <input type="radio" name="opDado4" value="mas"/> <p></p>
                Restar dado -->
                <input type="radio" name="opDado4" value="menos"/> <br><br>
              </div>
              <div class="col-sm-2"> 
                Sumar dados --> 
                <input type="radio" name="opDado5" value="mas"/> <p></p>
                Restar dados -->
                <input type="radio" name="opDado5" value="menos"/> <br><br>
              </div>
              
              
              <input type="hidden" name="dado0" value="<?=$dado0?>"/> 
              <input type="hidden" name="dado1" value="<?=$dado1?>"/>
              <input type="hidden" name="dado2" value="<?=$dado2?>"/>
              <input type="hidden" name="dado3" value="<?=$dado3?>"/>
              <input type="hidden" name="dado4" value="<?=$dado4?>"/>
              <input type="hidden" name="dado5" value="<?=$dado5?>"/>
        </div>
        <div class="row">
              <input type="submit" class="button" name="submit" value="submit"/>
            </form>
        </div>  
        
        
        <!--<div class="row" id="numRandom">
        <div class="col-sm-2">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="submit" class="button" name="Reload" value="Reload"/>
          </form>
        </div>
      </div>!-->
    </div>

  </body>
  
</html>