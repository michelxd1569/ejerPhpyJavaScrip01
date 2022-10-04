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