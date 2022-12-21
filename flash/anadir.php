<?php

//Conexion con la base de datos
include("conexion.php");
$link=conectarse();

/*Obtiene 'variables' del flash, aunque no es necesario usando POST desde flash
$nombre = $HTTP_POST_VARS["nombre"]; 
$genero = $HTTP_POST_VARS["apellidos"]; 
*/

$email = $_POST['email'];
$dni = $_POST['dni'];

$consultadni = mysql_query("SELECT dni, email FROM usuarios", $link);

$error = 0;
			  
while($row = mysql_fetch_array($consultadni))
{
if($dni == $row['dni'] || $email == $row['email'])
$error = 1;
}

if($error == 1)
{
echo "respuestaPHP=DNI o e-mail ya registrados";
}
else
{
//Consulta sobre la base de datos
$consulta = mysql_query("INSERT INTO usuarios(nombre, apellidos, fecha_nacimiento, dni, provincia, poblacion, codigo_postal, direccion, email, telefono) VALUES ('$nombre', '$apellidos', '$fechanacimiento', '$dni', '$provincia', '$poblacion', '$codigo_postal', '$direccion', '$email', '$telefono')" ,$link);

echo "respuestaPHP=Registro realizado correctamente";
}
?>