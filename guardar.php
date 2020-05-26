<?php
 //conectamos Con el servidor
 $host ="localhost";
 $user ="id13285460_papeleria2";
 $pass ="contraseña123X";
 $db="id13285460_papeleria";

 //funcion llamada conexion con (dominio,usuarios,contraseña,base_de_datos)
 $con = mysqli_connect($host,$user,$pass,$db);

$Nombre=$_POST['Nombre'];
$Email=$_POST['Email'];
$Asunto=$_POST['Asunto'];

$insertar="INSERT INTO datos (Nombre, Email, Asunto) values ('$Nombre', '$Email', '$Asunto')";

$query=mysqli_query ($con,$insertar);

if(!$query){
  echo"Hubo Algun Error";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Regresar</a>";
 }

?>