<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="papeleria";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $conectar = mysqli_connect($host,$user,$pass,$db);

$Nombre=$_POST['Nombre'];
$Email=$_POST['Email'];
$Asunto=$_POST['Asunto'];

$sqli="INSERT INTO datos (Nombre, Email, Asunto) values ('$Nombre', '$Email', '$Asunto')";

$ejecutar=mysqli_query ($conectar,$sqli);

if(!$ejecutar){
	echo"Hubo un error";
}else {
	echo"Datos guardados correctamente <br> <a href='index.html'>Volver</a>";
}

?>