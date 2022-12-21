<?php

//Conexion con la base de datos
include("flash/conexion.php");
$link=conectarse();

$concreto = $_GET['concreto'];

$eliminar = mysql_query("DELETE FROM solicitudes WHERE id=$concreto", $link);

echo "<meta http-equiv='refresh' content='0;URL=listado.php'>";
?>