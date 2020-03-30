<?php
$conectar=@mysql_connect('localhost','root','');

if(!$conectar){
	echo"No se pudo conectar con el servidor";
}else{
	$base=mysql_select_db('papeleria');
	if(!$base){
		echo"No se encontro la base de datos";
	}
}
$Nombre=$_POST['Nombre'];
$Correo=$_POST['Email'];
$Asunto=$_POST['Asunto'];

$sql="INSERT INTO datos VALUES('$Nombre', '$Email', '%Asunto')";

$ejecutar=mysql_query($sql);

if(!$ejecutar){
	echo"Hubo un error";
}else {
	echo"Datos guardados correctamente <br> <a href='index.html'>Volver</a>";
}

?>