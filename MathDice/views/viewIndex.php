<div class="row">
  <div class="col-sm-6" id="form"> 
    <form method="post" action="index.php">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" name="nombre" value=""/> <br>
      <label for="apellido">Apellido:</label> <br>
      <input type="text" class="form-control" name="apellido" value=""/> <br>
      <label for="edad">Meta:</label> <br>
      <input type="text" class="form-control" name="meta" value=""/> <br>
      
      <div class="col-sm-4"> 
        <label for="idioma">Idioma:</label> <br>
        <label for="esp">Español:</label> 
        <input type="radio" name="es" value=""/> 
        <label for="eng">Ingles:</label>
        <input type="radio" name="en" value=""/> <br>
      </div>
       <div class="col-sm-2"> </div>
       <div class="col-sm-2"> </div>
      <div class="col-sm-4"> 
        <label for="idioma">Tipo de Juego:</label> <br>
        <label for="esp">Junior:</label> 
        <input type="radio" name="juego" value="junior" checked/> 
        <label for="eng">Junior+:</label>
        <input type="radio" name="juego" value="junior+"/><br>
      </div>
      <div class="col-sm-2"> </div>
      <div class="col-sm-1"> </div>
      <div class="col-sm-6"> 
      <input type="submit" class="btn btn-primary" name="submit" value="Jugar"/>
      </div>
    </form>
  </div>
  <div class="col-sm-6">
    <img src="img/math-dice.png" class="img-responsive" alt="Cinque Terre" id="logo">
  </div>
</div>