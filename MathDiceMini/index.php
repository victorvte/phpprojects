<!DOCTYPE html>
<html>
  <?php
    $idioma = "es";
    $array_menu = array(
      "titulo" => array(
        "es" => "MathDice",
        "en" => "MathDice"
      ),
      "inicio" => array(
        "es" => "Inicio",
        "en" => "Home"
      ),
      "instrucciones" => array(
        "es" => "Instrucciones",
        "en" => "Instruccions"
      ),
      "tiposJuego" => array(
        "es" => "Modo de juego",
        "en" => "Game mode"
      ),
    );
    $array_submenu = array(
      1 => array(
        "es" => "Juego tradicional",
        "en" => "Traditional mode"
      ),
      2 => array(
        "es" => "Juego modificado",
        "en" => "Game modified"
      ),
      3 => array(
        "es" => "Modo infantil",
        "en" => "Kids mode"
      )
    );
  ?>
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
    <div class="col-sm-2">Dado 1</div>
    <div class="col-sm-2">Dado 2</div>
    <div class="col-sm-2">Dado 3</div>
    <div class="col-sm-2">Dado 4</div>
    <div class="col-sm-2">Dado 5</div>
    <div class="col-sm-2">Dado 6</div>
  </div>
  <div class="row">
    <div class="col-*-*"></div>
    <div class="col-*-*"></div>
    <div class="col-*-*"></div>
  </div>
  <div class="row">
    ...
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