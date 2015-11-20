<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'conf.php';
            include 'funciones.php';
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <?php
          include 'cabecera.php';
        ?>
        <p>  
                <?php 
                //var_dump(isset($resul));
                    if(isset($resul)){ 
                ?>
                    <h1>El resultado es: <?= $resul ?> </h1> 
                <?php 
                    }else{
                        print_r("ERROR! Los dados no corresponden con los numeros o no has marcado un simbolo de operacion");
                    }
                ?>
        </p>
    </body>
</html>
