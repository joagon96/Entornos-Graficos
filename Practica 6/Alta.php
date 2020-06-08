<html>
<head>
<title>Alta Ciudad</title>
</head>
<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
$vId= $_POST['Id'];
$vCiudad = $_POST['Ciudad'];
$vPais = $_POST['Pais'];
$vHabitantes = $_POST['Habitantes'];
$vSuperficie = $_POST['Superficie'];
$vTieneMetro = $_POST['TieneMetro'];
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(Id) as canti FROM Ciudades WHERE Id='$vId'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantCiudades = mysqli_fetch_assoc($vResultado);
//$vCantUsuarios = mysqli_result($vResultado, 0);
if ($vCantCiudades ['canti']!=0){
echo ("La Ciudad ya Existe<br>");
echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO Ciudades (Id, Ciudad, Pais, Habitantes, Superficie, TieneMetro)
values ('$vId','$vCiudad', '$vPais', '$vHabitantes', '$vSuperficie', '$vTieneMetro')";
mysqli_query($link, $vSql) or die (mysqli_error($link));
echo("Ciudad Registrada, Pronto recibirás un email, confirmandote la actualizaciòn a
nuestra pagina<br>");
echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>