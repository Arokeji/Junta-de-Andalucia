<?php
session_start();
$identificador = $_SESSION['identificador'];

$error = 0;

//Conexion con la base de datos
include("conexion.php");
$link=conectarse();

//Recogida de la variable que ha pasado FLASH
$codigo = $_POST['codigo'];

//Recogida de la variable global
$identificador = $_SESSION['identificador'];

if(!$_SESSION['identificador'])
{
echo "respuestaPHP=Debes hacer login";
$error = 1;
}
else
{
$consulta = mysql_query("SELECT usuario, modulo FROM solicitudes" ,$link);
while($row = mysql_fetch_array($consulta))
{
if($identificador == $row['usuario'] && $codigo == $row['modulo'])
{
$error = 1;
echo "respuestaPHP=Ya estas inscrito ;)";
}
}
}

if($error == 0)
{
//Consulta sobre la base de datos
$consulta = mysql_query("INSERT INTO solicitudes(usuario, modulo, fecha) VALUES ('$identificador', '$codigo', NOW())" ,$link);

echo "respuestaPHP=Inscrito :)";
}

?>