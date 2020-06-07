<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendar</title>
</head>
<body>
    <?php
    $enlace=
    ' <html>'.
        '<a href="Pagina.html">Mi pagina</a>'.
    '</html>';
    $fecha=date("d-m-Y");
    $hora= date("H :i:s");
    $destino= $_POST['destino']; 
    $asunto="Recomendacion";
    $desde='From:' .$_POST['email'];
    $comentario= "
    Nombre: $_POST[nombre]\n
    Email: $_POST[email]\n
    Enviado: $fecha a las $hora\n
    Te recomiendo la Pagina $enlace"; 
    ;
    mail($destino,$asunto,$comentario,$desde);
    echo "Recomendacion enviada";
    ?> 
</body>
</html>