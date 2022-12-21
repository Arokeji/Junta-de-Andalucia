<?php
session_start();

//Conexion con la base de datos
include("conexion.php");
$link=conectarse();

?>

<head>
<title>Formación Profesional ::Junta de Andalucía::</title>
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
a:link {
	color: #006600;
}
.Estilo3 {
	font-size: 9px;
	text-decoration: blink;
}
.estiloverde {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-transform: capitalize;
	color: #00CC00;
}
-->
</style>
</head>
<body bgcolor="#ffffff">

  <table border="0" cellspacing="0" cellpadding="0" align="center" width="550" height="100%">
    <tr>
      <td width="550"><div align="center">
      <script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("Esta página requiere el archivo AC_RunActiveContent.js.");
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
      <td height="438"><p><img src="imagenes/sobre2.jpg" width="520" height="100"><br>
      </p>
      <table width="80%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="50%" align="center" valign="top">
          
          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="130" height="130" id="quees" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="quees.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="quees.swf" quality="high" bgcolor="#ffffff" width="130" height="130" name="quees" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>          </td>
          <td width="50%" align="center" valign="top"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="130" height="130" id="queestudiar" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="queestudiar.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="queestudiar.swf" quality="high" bgcolor="#ffffff" width="130" height="130" name="queestudiar" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object></td>
          <td width="50%" align="center" valign="top">	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="130" height="130" id="dondeestudiar" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="dondeestudiar.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="dondeestudiar.swf" quality="high" bgcolor="#ffffff" width="130" height="130" name="dondeestudiar" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object></td>
          <td width="50%" align="center" valign="top"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="130" height="130" id="comoacceder" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="comoacceder.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="comoacceder.swf" quality="high" bgcolor="#ffffff" width="130" height="130" name="comoacceder" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object></td>
        </tr>
        <tr>
          <td>
          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="130" height="130" id="organizacion" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="organizacion.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="organizacion.swf" quality="high" bgcolor="#ffffff" width="130" height="130" name="organizacion" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
          </td>
          <td>
          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="130" height="130" id="modalidades" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="modalidades.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="modalidades.swf" quality="high" bgcolor="#ffffff" width="130" height="130" name="modalidades" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
          </td>
          <td>
          <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="130" height="130" id="becasyayudas" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="becasyayudas.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="becasyayudas.swf" quality="high" bgcolor="#ffffff" width="130" height="130" name="becasyayudas" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
          </td>
          <td><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="130" height="130" id="salidasposteriores" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="salidasposteriores.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="salidasposteriores.swf" quality="high" bgcolor="#ffffff" width="130" height="130" name="salidasposteriores" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object></td>
        </tr>
      </table>
      <p><br />
        <img src="imagenes/bajo.jpg" width="520" height="100">
        
        
        <?php //Mostrar nombre del usuario
	
		$identificador = $_SESSION['identificador'];
		if(!$_SESSION['identificador'])
		echo "No se ha identificador el usuario";
		else
		{
		$consultanombre = mysql_query("SELECT nombre, apellidos FROM usuarios WHERE id=$identificador", $link);
		
		while($row = mysql_fetch_array($consultanombre))
		echo "<span class='estiloverde>".$row['nombre']." ".$row['apellidos'];
		}//FIN ELSE
		?>
        </span>
        <br />
        <br />
        <a href="listado.php"><img src="imagenes/inscripciones.gif" width="85" height="9" border="0"></a><br />
        <span class="Estilo3">(consulta "<strong>¿qué estudiar?</strong>" para solicitar los módulos deseados)</span><br />
        <br />
        <a href="index.php"><img src="imagenes/desconectar.gif" width="94" height="20" border="0"></a>      </p>
      <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td></td>
    </tr>
  </table>
</body>
</html>
