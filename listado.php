<?php
session_start();

$identificador = $_SESSION['identificador'];

//Conexion con la base de datos
include("conexion.php");
$link=conectarse();
?>

<head>
<title>Formaci�n Profesional ::Junta de Andaluc�a::</title>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="AC_RunActiveContent.js" language="javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.Estilo1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.Estilo2 {
	font-family: Arial, Helvetica, sans-serif;
}
a:link {
	color: #006600;
}
-->
</style></head>
<body bgcolor="#ffffff">

  <table border="0" cellspacing="0" cellpadding="0" align="center" width="550" height="100%">
    <tr>
      <td width="550"><div align="center">
      <script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("Esta p�gina requiere el archivo AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0','width','550','height','120','id','cbformacion','align','middle','name','cbformacion','src','cbformacion','quality','high','bgcolor','#ffffff','allowscriptaccess','sameDomain','allowfullscreen','false','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','cbformacion' ); //end AC code
	}
</script>
<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" name="cbformacion" width="550" height="120" align="middle" id="cbformacion">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="cbformacion.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="cbformacion.swf" quality="high" bgcolor="#ffffff" width="550" height="120" name="cbformacion" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
</noscript>
      </div></td>
    </tr>
    <tr height="100%" align="center" valign="top">
      <td height="438" align="left">
      <span class="Estilo2">
      <?php //Listado de modulos a los que el usuario esta inscrito
	  
	  echo "<br />Lista de modulos a los que est�s inscrito:<ul>";
	  $consulta1 = mysql_query("SELECT id, modulo FROM solicitudes WHERE usuario=$identificador", $link);
	  while($row = mysql_fetch_array($consulta1))
	  {
	  $consulta2 = mysql_query("SELECT especialidad FROM modulos WHERE id=".$row['modulo'] ,$link);
	  	while($row2 = mysql_fetch_array($consulta2))
		{
		echo "<li><a href='eliminar.php?concreto=".$row['id']."'><img src='imagenes/eliminar.gif' width='16' height='15' border='0' alt='Borrar de la lista'></a> ".$row2['especialidad']."</li>";
		}
	  }
	  echo "</ul>";
	 
	  ?>
      
      
      <p><a href="fprofesional.php"><img align="left" src="imagenes/atras.jpg" width="84" height="26" border="0" onClick="history.back()"></a></p></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>
</body>
</html>
