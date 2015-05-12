<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Altas antibioticos</title>
<style type="text/css">
<!--
#capa1 {
	position:absolute;
	left:2px;
	top:2px;
	width:1212px;
	height:207px;
	z-index:1;
	background-color: #FFFFFF;
}
.Estilo2 {
	font-size: 36px;
	font-weight: bold;
}
.Estilo3 {color: #92A5C3; font-family: "Times New Roman", Times, serif;}
#capa2 {
	position:absolute;
	left:2px;
	top:259px;
	width:328px;
	height:541px;
	z-index:2;
	background-color: #FFFFFF;
}
#capaA {
	position:absolute;
	left:42px;
	top:411px;
	width:239px;
	height:140px;
	z-index:3;
	background-color: #FFFFFF;
}
#capaC {
	position:absolute;
	left:44px;
	top:499px;
	width:236px;
	height:150px;
	z-index:4;
	background-color: #FFFFFF;
}
#capaM {
	position:absolute;
	left:42px;
	top:626px;
	width:253px;
	height:117px;
	z-index:5;
	background-color: #FFFFFF;
}
#Layer3 {
	position:absolute;
	left:32px;
	top:282px;
	width:245px;
	height:152px;
	z-index:6;
	background-color: #FFFFFF;
}
.Estilo5 {color: #FF0000; font-family: "Times New Roman", Times, serif; }
#capa3 {
	position:absolute;
	left:1px;
	top:354px;
	width:888px;
	height:97px;
	z-index:7;
}
.Estilo6 {
	font-family: Stencil;
	color: #0000FF;
}
#Layer1 {position:absolute;
	width:820px;
	height:234px;
	z-index:1;
	left: 304px;
	top: 436px;
}
-->
</style>
</head>

<body>
<div id="capa1">  
  <div align="center" class="Estilo2">
    <h1 align="left"><span class="Estilo3"><img src="LOGO.png" alt="logo" width="168" height="232" /></span>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="830" height="223">
        <param name="BGCOLOR" value="" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="text2.swf" />
        <param name="quality" value="high" />
        <embed src="text2.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="830" height="223" ></embed>
      </object>
    </h1>
    <h1>&nbsp;</h1>
    <p class="Estilo6">&quot;ALTAS&quot; </p>
  </div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="148" height="51">
    <param name="BGCOLOR" value="" />
    <param name="movie" value="button12.swf" />
    <param name="quality" value="high" />
    <embed src="button12.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="148" height="51" ></embed>
    <form ACTION="antib.html"></form>
  </object>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="Layer1">
    <?   $idCliente=$_REQUEST["idCliente"];   
		 $nombre=$_REQUEST["nombre"];  
		 $telefono=$_REQUEST["telefono"];    
		 $domicilio=$_REQUEST["domicilio"];    
		 $edad=$_REQUEST["edad"];    
		 $conectado=@mysql_connect("localhost","root","12345") or die ("no se logro la conexion");    
		 $db=mysql_select_db("farmaciag");    
		 $query="select * from cliente where idCliente='".$idCliente."'";    
		 $qry=mysql_query($query);     
		 $i=mysql_num_rows($qry);    
		 if ($i>0) { ?>   </p>   
		  <p>&nbsp; </p>   <p>     
		 <script language="JavaScript" type="text/javascript">   alert("El Cliente ya existe");   location.href="altasAntib.html";   
		 </script>     
		 <?  }  else  {    
		 $nuevo="insert into cliente values ('".$idCliente."','".$nombre."','".$telefono."','".$domicilio."','".$edad."')";    
		 $qry=mysql_query($nuevo); 
		 }   
		 mysql_close($conectado);   
		 ?>   
		 </p>   
		 <p align="center">&nbsp;</p>   
		 <div align="center">
		 <span class="Estilo2">	<font size="5" face="Dauphin"> <b><font size="+5 ">Ya se dieron de alta los datos.</font></b></font>        
</p>   </span></div> </div> 
</body>
</html>
