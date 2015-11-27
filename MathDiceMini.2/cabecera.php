<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><?= $array_menu["titulo"][$_SESSION["idioma"]]?></a>
        </div>
        <div>
          <ul class="nav navbar-nav">
          <li><a href="index.php"><?= $array_menu["inicio"][$_SESSION["idioma"]]?></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $array_menu["tiposJuego"][$_SESSION["idioma"]]?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="junior.php"><?= $array_submenu_juego[1][$_SESSION["idioma"]]?></a></li>
                <li><a href="<?php if(isset($_SESSION["jugador"])){ ?>junior.php <?php }else{ ?>index.php<?php } ?>"><?= $array_submenu_juego[2][$_SESSION["idioma"]]?></a></li>
              </ul>
            </li>
            <li><a href="#"><?= $array_menu["instrucciones"][$_SESSION["idioma"]]?></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $array_menu["idioma"][$_SESSION["idioma"]]?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?=$_SERVER["REQUEST_URI"]?>?idioma=es"><?= $array_submenu_idioma[1][$_SESSION["idioma"]]?></a></li>
                <li><a href="<?=$_SERVER["REQUEST_URI"]?>?idioma=en"><?= $array_submenu_idioma[2][$_SESSION["idioma"]]?></a></li>
              </ul>
            </li>
            <li><a href="index2.php"><?= $array_menu["perfil"][$_SESSION["idioma"]]?></a></li>
          </ul>
        </div>
      </div>
</nav>