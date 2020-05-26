<!DOCTYPE>
<html>
<head>
	<title> Actualizar</title>
</head>
<body>
<?php
$host = "localhost";
$user = "id13285460_papeleria2";
$pass = "contraseña123X";
$db = "id13285460_papeleria"

$conexion = mysql_connect($host,$user,$pass,$db)
or die("Error en la conexion");

$Clave = $['txtClave'];
$nombre = $['txtNombre'];

mysql_query($host, "UPDATE datos set nombre='$nombre' where clave='$clave'")
	or die("Error al Actualizar");

	mysql_close($conexion);
	echo "Datos actualizados correctamente";

?>

 
</body>
</html>