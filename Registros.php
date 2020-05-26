<!DOCTYPE>
<html>
<head>
	<title> Consultar</title>
</head>
<body>
	<?php
	$host = "localhost";
	$user = "id13285460_papeleria2";
	$pass = "contraseña123X";
	$db = "id13285460_papeleria";

	$conexion = mysqli_connect($host,$user,$pass,$db)
	or die ("Error en la conexion");

	$consulta = mysqli_query($conexion, "SELECT * from datos")
	or die ("Error al traer los datos");
	?>

	<table border= "1">
	<tr>
	<td >Nombre</td>
	<td  >Correo</td>
	<td  >Asunto</td>
	</tr>
<?php
	while($extraido = mysqli_fetch_array($consulta))
	{
		?>
		<tr>
		<td> <?php echo $extraido['nombre'] ?> </td>
		<td> <?php echo $extraido['correo'] ?> </td>
		<td> <?php echo $extraido['asunto'] ?> </td>
		</tr>
<?php
	} 

	mysqli_close($conexion);
	echo "</table>";
	?>

</body>
</html>