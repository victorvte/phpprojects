<?php
  //Incluir los ficheros externos
    include 'conf.php';
    include 'lib/Jugador.php';
    include 'lib/Basedatos.php';
    
  $db = new Basedatos();
  //$prueba = $db->mostrarUsuarios();
  //$prueba2 = $db->insertarUsuario("juan", "perez");
  //var_dump($prueba);
  //var_dump($prueba2);
  //$prueba3 = $db->checkarUsuario("juan");
  //var_dump($prueba3);
  session_start();
  if($_SESSION["idioma"]==null){
    $_SESSION["idioma"] = "es";
  }
 // var_dump($_POST["nombre"]);

  if($_POST["nombre"]!=null){
    
    $checkarUser = $db->checkarUsuario($_POST["nombre"], $_POST["apellido"]);
    if($checkarUser){
      $_SESSION['jugador'] = new Jugador($checkarUser["nombre"]);
      $_SESSION['jugador']->setApellido($checkarUser["apellido"]);
      $_SESSION['jugador']->setPuntos($checkarUser["puntos"]);
    }else{
      $insertarUser = $db->insertarUsuario($_POST["nombre"], $_POST["apellido"]);
      
      $_SESSION['jugador'] = new Jugador($_POST["nombre"]);
      if(isset($_SESSION['jugador'])){
        if(isset($_POST["apellido"])){
          $_SESSION['jugador']->setApellido($_POST["apellido"]);
        }
      }
    }
      
    if(isset($_SESSION['jugador'])){
      
        //establecer meta para calcular
      if($_POST["meta"]!=null){
        $_SESSION['jugador'] ->setMeta($_POST["meta"]);
      }else{
        $_SESSION['jugador'] ->setMeta(2);
      }

      /*if(isset($_POST["edad"])){
        $_SESSION['jugador']->setEdad($_POST["edad"]);
      }*/
      
      if(isset($_POST["en"])){
        $_SESSION['idioma'] = "en";
      }elseif(isset($_POST["es"])){
        $_SESSION['idioma'] = "es";
      }
      
      if(isset($_POST["juego"])){
        if($_POST["juego"] == "junior"){
        $_SESSION['jugador']->setTipo("junior");
        }else{
        $_SESSION['jugador']->setTipo("junior+");
        }
      }  
    }
  
  }
  
?>