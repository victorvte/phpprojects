<nav class="navbar navbar-inverse" id="cabecera">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><?= $array_menu["titulo"][$_SESSION["idioma"]]?></a>
        </div>
        <div>
          <ul class="nav navbar-nav">
          <li><a href="index.php"><?= $array_menu["inicio"][$_SESSION["idioma"]]?></a></li>
          <li><a href="juego.php"><?= $array_menu["juego"][$_SESSION["idioma"]]?></a></li>
           <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $array_menu["tiposJuego"][$_SESSION["idioma"]]?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="junior.php"><?= $array_submenu_juego[1][$_SESSION["idioma"]]?></a></li>
                <li><a href="<?php if(isset($_SESSION["jugador"])){ ?>junior.php <?php }else{ ?>index.php<?php } ?>"><?= $array_submenu_juego[2][$_SESSION["idioma"]]?></a></li>
              </ul>
            </li> -->
            <li><a href="info.php"><?= $array_menu["instrucciones"][$_SESSION["idioma"]]?></a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $array_menu["idioma"][$_SESSION["idioma"]]?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?=$_SERVER["REQUEST_URI"]?>?idioma=es"><?= $array_submenu_idioma[1][$_SESSION["idioma"]]?></a></li>
                <li><a href="<?=$_SERVER["REQUEST_URI"]?>?idioma=en"><?= $array_submenu_idioma[2][$_SESSION["idioma"]]?></a></li>
              </ul>
            </li>
            <?php if($_SESSION["jugador"]!=null){ ?>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $array_menu["vista"][$_SESSION["idioma"]]?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="https://phpprojects-victorvte.c9.io/MathDice/juego.php?vista=f"><?= $array_submenu_vista[1][$_SESSION["idioma"]]?></a></li>
                <li><a href="https://phpprojects-victorvte.c9.io/MathDice/juego.php?vista=c"><?= $array_submenu_vista[2][$_SESSION["idioma"]]?></a></li>
              </ul>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
</nav>