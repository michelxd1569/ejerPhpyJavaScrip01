<?php
    var_dump(isset($_POST["enviar"]));
    if(isset($_POST["enviar"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];

        echo "hola $nombre $apellido";
    }
    else{
        echo "no enviado";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>

    <form action="hola.php" id="formulario" method="post">
        <p><input type="text" name="nombre" id="nombre"></p>
        <p><input type="text" name="apellido" id="apellido"></p>
        <div id="mensaje"></div>
        
        <input type="submit" id="boton" name="enviar"value="enviar" >
        <script src="main.js"></script>
    </form>
    
        
</body>
</html>

