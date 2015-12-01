<!DOCTYPE html>
<html>
    <?php
    //incluir head
    include 'views/head.php';
    ?>
    <body>
    <?php
    session_start();
    //incluir vista de cabecera
    include 'lib/confCabecera.php';
    include 'views/cabecera.php';
    ?>  
    <div class="col-sm-1"></div>
    <div class="col-sm-2"></div>
    <div class="col-sm-6" id="info"> 
        <h1 id="titInfo">Instrucciones</h1>
        <h2>Junior</h2>
        <p>
            El juego consiste en alcanzar el número del dado dodecaedro <br>
            sumando y restando 6 dados de 6 caras, al conseguirlo obtrendras <br>
            un punto y cuando llegues a la meta pasaras de nivel.
        </p>
        <h2>Junior+</h2>
        <p>
            El juego es el mismo que "Junior" pero añadiendo más operaciones, <br>
            multiplicación y división
        </p>
      </div>
    </body>
    
</html>