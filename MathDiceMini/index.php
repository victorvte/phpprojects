<!DOCTYPE html>
<html>

  <head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    
    <?php
      include 'conf.php';
      include 'funciones.php';
      
      function reload(){
          header("Refresh:0");
      }
      
      if ($_POST['submit_button']) {
      $a = $_POST['update'];
      echo $a;
      }
      else {}
    ?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  
  <body>
  
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><?= $array_menu["titulo"][$idioma]?></a>
        </div>
        <div>
          <ul class="nav navbar-nav">
          <li class="active"><a href="#"><?= $array_menu["inicio"][$idioma]?></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $array_menu["tiposJuego"][$idioma]?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><?= $array_submenu[1][$idioma]?></a></li>
                <li><a href="#"><?= $array_submenu[2][$idioma]?></a></li>
                <li><a href="#"><?= $array_submenu[3][$idioma]?></a></li>
              </ul>
            </li>
            <li><a href="#"><?= $array_menu["instrucciones"][$idioma]?></a></li>
          </ul>
        </div>
      </div>
    </nav>
  
    <div class="container">
      <div class="row">
        <div class="col-sm-2"><img src="imagenes/dado1.png" class="img-responsive"></div>
        <div class="col-sm-2"><img src="imagenes/dado2.png" class="img-responsive"></div>
        <div class="col-sm-2"><img src="imagenes/dado3.png" class="img-responsive"></div>
        <div class="col-sm-2"><img src="imagenes/dado4.png" class="img-responsive"></div>
        <div class="col-sm-2"><img src="imagenes/dado5.png" class="img-responsive"></div>
        <div class="col-sm-2"><img src="imagenes/dado6.png" class="img-responsive"></div>
      </div>
      <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-4"> </div>
      </div>
      <div class="row" id="numRandom">
        <div class="col-sm-2"> Tu dado es: </div>
        <div class="col-sm-4"> <img src="imagenes/dado<?= $numeroDado ?>.png" class="img-responsive"></div>
      </div>
      <div class="row" id="numRandom">
        <div class="col-sm-2"> 
        <button type="button" value="reload">Reload Number!</button>
        <input type="submit" class="button" name="reload" value="reload" onClick="history.go(0)"/>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"></form>
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