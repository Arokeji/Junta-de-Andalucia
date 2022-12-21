<?php
session_start();

//Conexion con la base de datos
include("conexion.php");
$link=conectarse();

$consulta = mysql_query("SELECT id, dni, email FROM usuarios", $link);

$error = 1;
			  
while($row = mysql_fetch_array($consulta))
{
if($dni == $row['dni'] && $email == $row['email'])
	{
	$error = 0;
	$identificador = $row['id'];
	$_SESSION["identificador"] = $identificador;
	}
}

if($error == 1)
{
echo "respuestaPHP=Login incorrecto.";
}
else
{
echo "respuestaPHP=Login correcto";
echo "&identificadorPHP=".$identificador;
}

?>