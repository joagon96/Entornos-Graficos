<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    function comprobar_nombre_usuario($nombre_usuario){
        //compruebo que el tamaño del string sea válido. 
        if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){ 
            echo $nombre_usuario . " no es válido<br>"; 
            return false; 
        } 
        //compruebo que los caracteres sean los permitidos 
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
        for ($i=0; $i<strlen($nombre_usuario); $i++){
            if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){ 
                echo $nombre_usuario . " no es válido<br>"; 
                return false; 
            } 
        } 
        echo $nombre_usuario . " es válido<br>"; 
        return true; 
    }

    if (!isset($_POST['submit'])) {
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Usuario: <input name="usuario" size="5">
        <input type="submit" name="submit" value="Ir">
        </form>
        <?php
    }
    else {
        $usuario = $_POST['usuario'];
        comprobar_nombre_usuario($usuario);
    }
    ?>   
</body>
</html>