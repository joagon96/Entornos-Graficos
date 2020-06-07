<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
</head>
<body>
    <?php
    session_start();
    ?>
    <html>
    <body>
    <?php
    if (!isset($_SESSION["contador"])){
    $_SESSION["contador"] = 1;
    }else{
    $_SESSION["contador"]++;
    } ?>
    <a href= "cant_visitas.php">Otra pagina</a>
</body>
</html>
</body>
</html>