<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cantidad de visitas</title>
</head>
<body>
<?php
session_start();
?>
    <html>
    <body>
    <a href="cuenta.php"></a>
    <?php
    echo "Has visitado " . ($_SESSION["contador"]) . " páginas";
    ?>
    <br>
    <br>
    <a href="cuenta.php">Otra página</a>
</body>
</html>        
</body>
</html>