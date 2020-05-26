<!DOCTYPE>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php
	$host= "localhost";
	$user="root";
	$pass="contraseña123X";
	$db= "ejemplo";

	$conexion= mysql_connect($host,$user,$pass,$db)
	or die ("Error en la conexion");

	$clave= $_POST['txtClave'];

	mysql_query($conexion, "DELETE from datos where clave='$clave'")
	or die ("Error al eliminar los datos");

	mysql_close($conexion);
	echo "Datos eliminados correctamente";

	?>

</body>
</html>