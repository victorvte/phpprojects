<!DOCTYPE html>
<html>

  <head>
    <title>Math Dice Mini</title>
    <meta charset="utf-8">
    
    <?php
    //Inncluir los ficheros externos
      include 'conf.php';
      include 'funciones.php';
      
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
          <div class="col-sm-2"><img src="imagenes/dado<?php echo $imgDadoUno = dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
          <div class="col-sm-2"><img src="imagenes/dado<?php echo $imgDadoUno = dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
          <div class="col-sm-2"><img src="imagenes/dado<?php echo $imgDadoUno = dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
          <div class="col-sm-2"><img src="imagenes/dado<?php echo $imgDadoUno = dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
          <div class="col-sm-2"><img src="imagenes/dado<?php echo $imgDadoUno = dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
          <div class="col-sm-2"><img src="imagenes/dado<?php echo $imgDadoUno = dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
        </div>
      <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-4"> </div>
      </div>
      <div class="row" id="numRandom">
        <!-- Se utiliza la funcion 'dadoAleatorio' del fichero 'funciones' para hallar los numeros aleatorios de las imgenes de los dados !-->
        <div class="col-sm-2"> Dado 1: <br> <img src="imagenes/dado<?php echo $imgDadoUno = dadoAleatorio(1, 6); ?>.png" class="img-responsive"> </div>
        <div class="col-sm-2"> Dado 2: <br> <img src="imagenes/dado<?php echo $imgDadoDos = dadoAleatorio(1, 6); ?>.png" class="img-responsive"></div>
        <div class="col-sm-2"> </div>
        <div class="col-sm-6"> 
        <!-- Se utiliza post en el formulario para enviar los datos !-->
          <form method="post" action="resul.php">
            Dado 1: <br>
            <input type="text" name="dadoUno" value=""/> <br><br>
            Sumar dados --> 
            <input type="radio" name="op" value="mas"/> <p></p>
            Restar dados -->
            <input type="radio" name="op" value="menos"/> <br><br>
            Dado 2: <br>
            <input type="text" name="dadoDos" value=""/> <p></p>
            <input type="hidden" name="imgDadoUno" value="<?=$imgDadoUno?>"/> <p></p>
            <input type="hidden" name="imgDadoDos" value="<?=$imgDadoDos?>"/> <p></p>
            <input type="submit" class="button" name="submit" value="submit"/>
          </form>
        </div>
      </div>
      <div class="row" id="numRandom">
        <div class="col-sm-2">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="submit" class="button" name="Reload" value="Reload"/>
          </form>
        </div>
      </div>
    </div>
    
  <!--<div class="container">
    <div class="jumbotron">
      <h1>My first Bootstrap website!</h1>      
      <p>This page will grow as we add more and more components from Bootstrap...</p>      
      <a href="#" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Search</a>
    </div>
  
    <div class="row">
      <div class="col-md-3">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-md-3"> 
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-md-3"> 
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Submenu 1-1</a></li>
              <li><a href="#">Submenu 1-2</a></li>
              <li><a href="#">Submenu 1-3</a></li>                        
            </ul>
          </li>
          <li><a href="#">Menu 2</a></li>
          <li><a href="#">Menu 3</a></li>
        </ul>
      </div>
      <div class="clearfix visible-lg"></div>
    </div>
  </div>
  !--> 
  </body>
  
</html>