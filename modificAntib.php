<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modificar</title>
<style type="text/css">
<!--
.Estilo2 {font-size: 36px;
	font-weight: bold;
}
.Estilo3 {color: #92A5C3; font-family: "Times New Roman", Times, serif;}
.Estilo5 {color: #FF0000; font-family: "Times New Roman", Times, serif; }
.Estilo6 {font-family: Stencil;
	color: #0000FF;
}
#capa1 {position:absolute;
	left:5px;
	top:5px;
	width:1212px;
	height:207px;
	z-index:1;
	background-color: #FFFFFF;
}
-->
</style>
</head>

<body>
<div id="capa1">
  <div align="center" class="Estilo2">
    <h1 align="left"><span class="Estilo3"><img src="LOGO.png" alt="logo" width="168" height="232" /></span><span class="Estilo5">
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="866" height="138" title="">
        <param name="BGCOLOR" value="" />
        <param name="BGCOLOR" value="" />
        <param name="movie" value="text1.swf" />
        <param name="quality" value="high" />
        <embed src="text1.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="866" height="138" ></embed>
      </object>
    </span></h1>
    <p class="Estilo6">&quot;MedicamentoS&quot;</p>
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
<p>&nbsp;</p>
<?  
	$idMedicamento=$_REQUEST["idMedicamento"];  
	$nombM=$_REQUEST["nombM"];  
	$tipoM=$_REQUEST["tipoM"];  
	$cantM=$_REQUEST["cantM"];  
	$stok=$_REQUEST["stok"];
	$precM=$_REQUEST["precM"];
	$tipo=$_REQUEST["tipo"]; 
	$conectado=@mysql_connect("localhost","root","12345") or die ("No se logr&oacute; la conexi&oacute;n");  
	$db=mysql_select_db("farmaciag");  
	$strqry="update medicamentos set nombM='".$nombM."',tipoM='".$tipoM."',cantM='".$cantM."',tipo='".$tipo."',stok='".$stok."',precM='".$precM."' where idMedicamento='".$idMedicamento."'";  
	$qry=mysql_query($strqry);  
	$strqry="select * from medicamentos where idMedicamento='".$idMedicamento."'";  
	$qry=mysql_query($strqry);  
	$i=mysql_num_rows($qry);  
	$r=0;  
	$row=0;  
	mysql_data_seek($qry,$r);  
	$row=mysql_fetch_object($qry); ?> 
	<div id="Layer2">   
	<form id="form1" name="form1" method="post" action="mostrarModificarAntib.php">     
	<table width="692" border="1">       
	<tr>         
	<td width="110">id Medicamento</td>   
	<td width="110"><div align="center">Nombre</div></td> 
    <td width="157"><div align="center">Tipo</div></td>         
	<td width="124"><div align="center">Cantidad en unidades/ml/mg </div></td>   
	<td width="124"><div align="center">Tipo de medicamento </div></td>       
	<td width="136"><div align="center">Stok</div></td>  
	<td width="136"><div align="center">Precio</div></td>     
	</tr>       
	<tr>         
	<td><label>             
	<div align="center"><? print $row->idMedicamento; ?>
	</div>           
	</label></td>         
	<td><label>             
	<div align="center"><? print $row->nombM; ?></div>           
	</label></td>         
	<td><label>             
	<div align="center"><? print $row->tipoM; ?></div>           
	</label></td>         
	<td><label></label>             
	<div align="center"><? print $row->cantM; ?></div></td>                    
	<td><label></label>             
	<div align="center"><? print $row->tipo; ?></div></td>         
	<td><label></label> 
	<div align="center"><? print $row->stok; ?></div></td>      
	<td><label></label>             
	<div align="center"><? print $row->precM; ?></div></td>  
	</tr>     </table>       
	<div align="center"></div>     
	<p>&nbsp;</p>    
	<?  mysql_free_result($qry); mysql_close($conectado);  ?>     
	<p>&nbsp;</p>   
	</form> </div> 
</body>
</html>
