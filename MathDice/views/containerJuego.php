<div class="container">
  <div class="row" id="cabeceraJuego">
    <div class="col-sm-1"> </div>
    <div class="col-sm-4">
      <table class="table">
        <thead>
          <tr>
            <th>Ultima tirada</th>
          </tr>
        </thead>
        <tbody>
          <tr class="success">
            <td>Resultado tirada: </td>
            <td><?= $_SESSION["calcular"] ?></td>
          </tr>
          <tr class="danger">
            <td>Numero a sacar: </td>
            <td><?= $_POST['dado0'] ?></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-sm-2">  <img src="img/dodecaedro<?php echo $dado0 ?>.png" class="img-responsive"></div>
    <div class="col-sm-4">
      
      <table class="table"><thead>
          <tr>
            <th>
              Jugador: <?= $_SESSION['jugador']->getNombre(),' ', $_SESSION['jugador']->getApellido(); ?> 
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="success">
            <td>Puntos: </td>
            <td><?= $_SESSION['jugador']->getPuntos(); ?></td>
          </tr>
          <tr class="danger">
            <td>Meta</td>
            <td><?= $_SESSION['jugador']->getMeta(); ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  
  <div class="row" id="numRandom">
    <!-- Se utiliza la funcion 'dadoAleatorio' de la clase 'Juego' para hallar los numeros aleatorios de las imgenes de los dados !-->
    <div class="col-sm-1"> </div>
    <div class="col-sm-2"><br> 
    <img class="dado3" src="img/dado<?php echo $dado1 ?>.png" class="img-responsive" onClick="dado1(<?=$dado1?>)" id="1"></div>
    <div class="col-sm-2"><br> 
    <img class="dado3" src="img/dado<?php echo $dado2 ?>.png" class="img-responsive" onClick="dado2(<?=$dado2?>)" id="2"></div>
    <div class="col-sm-2"><br> 
    <img class="dado3" src="img/dado<?php echo $dado3 ?>.png" class="img-responsive" onClick="dado3(<?=$dado3?>)" id="3"></div>
    <div class="col-sm-2"><br> 
    <img class="dado6" src="img/dado<?php echo $dado4 ?>.png" class="img-responsive" onClick="dado4(<?=$dado4?>)" id="4"></div>
    <div class="col-sm-2"><br> 
    <img class="dado6" src="img/dado<?php echo $dado5 ?>.png" class="img-responsive" onClick="dado5(<?=$dado5?>)" id="5"></div>
  </div>
  <div class="row" id="operaciones">
  <form method="post" action="juego.php">
    <div class="col-sm-2"> </div>
    <div class="col-sm-2"><br> <img class="dado3" src="img/suma.jpg" class="img-responsive" onClick="añadirOp('+')"> </div>
    <div class="col-sm-2"><br> <img class="dado3" src="img/resta.jpg" class="img-responsive" onClick="añadirOp('-')"> </div>
  <?php if($_SESSION['jugador']->getTipo() == "junior+"){?>
    <div class="col-sm-2"><br> <img class="dado3" src="img/multiplicacion.jpg" class="img-responsive" onClick="añadirOp('*')"> </div>
    <div class="col-sm-2"><br> <img class="dado3" src="img/division.jpg" class="img-responsive" onClick="añadirOp('/')"> </div>
  <?php } ?>
      
    <input type="hidden" name="dado0" value="<?=$dado0?>"/> 
    <input type="hidden" name="dado1" value="<?=$dado1?>"/>
    <input type="hidden" name="dado2" value="<?=$dado2?>"/>
    <input type="hidden" name="dado3" value="<?=$dado3?>"/>
    <input type="hidden" name="dado4" value="<?=$dado4?>"/>
    <input type="hidden" name="dado5" value="<?=$dado5?>"/>
  </div>
    
    <div class="row">
      <div class="col-sm-1"> </div>
      <div class="col-sm-10"> 
          <input type="text" class="form-control" id="txtResul" value="" name="resul" readonly/>
      </div>
    </div>
    <br>
    <div class="row" id="botones">
    
      <div class="col-sm-2"> </div>
      <div class="col-sm-1"> </div>
      <div class="col-sm-2"> 
        <input type="button" class="btn btn-primary" name="tirar" value="Volver a tirar"  onClick="recargar()"/>
      </div>
      <div class="col-sm-2"> 
        <input type="submit" class="btn btn-primary" name="submit" value="Comprobar"  onClick="calcular()"/>
      </div>
      <div class="col-sm-2"> 
          <input type="button" class="btn btn-primary" name="limpiar" value="Restaurar"  onClick="restaurar()"/><br><br>
        </form>
      </div>
    </div> 

</div>