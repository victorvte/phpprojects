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