<?php
    //session_start();
    if(isset($_GET['idioma'])){
      $idioma = substr($_GET['idioma'], -2);
      $_SESSION['idioma']=$idioma;
      //var_dump($_GET['idioma']);
    }
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
      "idioma" => array(
        "es" => "Idioma",
        "en" => "Language"
      ),
      "vista" => array(
        "es" => "Vista",
        "en" => "View"
      ),
      "juego" => array(
        "es" => "Juego",
        "en" => "Game"
      ),
      "perfil" => array(
        "es" => "Perfil",
        "en" => "Profile"
      )
    );
    $array_submenu_juego = array(
      1 => array(
        "es" => "Juvenil",
        "en" => "Junior"
      ),
      2 => array(
        "es" => "Juvenil+",
        "en" => "Junior+"
      )
    );
    $array_submenu_idioma = array(
      1 => array(
        "es" => "Español",
        "en" => "Spanish"
      ),
      2 => array(
        "es" => "Ingles",
        "en" => "English"
      )
    );
    $array_submenu_vista = array(
      1 => array(
        "es" => "Filas",
        "en" => "Rows"
      ),
      2 => array(
        "es" => "Colunas",
        "en" => "Columns"
      )
    );
?>