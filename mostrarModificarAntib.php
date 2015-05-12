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
	left:7px;
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
    <p class="Estilo6">&quot;Medicamentos&quot;</p>
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
<p>&nbsp;</p>
<p>
 <? $idMedicamento=$_REQUEST["idMedicamento"]; 
	$conectado=@mysql_connect("localhost","root","12345") or die ("no se logro la conexion");  
	$db=mysql_select_db("farmaciag");  
	$strqry="select * from medicamentos where idMedicamento='".$idMedicamento."'";
	$qry=mysql_query($strqry);  
	$i=mysql_num_rows($qry);   
	if ($i==0) {  ?>
</p>
<p>&nbsp;</p>
<p> 
  <script language="JavaScript" type="text/javascript">   alert("El Antibiotico no existe");   location.href="modificarAntib.html";   </script> 
  <?   }   else   { $r=0;  $row=0;  mysql_data_seek($qry,$r);  
	$row=mysql_fetch_object($qry);  
	$idMedicamento=$row->idMedicamento;  $nombM=$row->nombM;  $tipoM=$row->tipoM;  $cantM=$row->cantM; $tipo=$row->tipo; $stok=$row->stok; $precM=$row->precM;  ?> 
</p>
<div id="Layer2">   
	<p>&nbsp;</p>   
	<form id="form1" name="form1" method="post" action="modificAntib.php">    
	<table width="758" border="1">       
	<tr>         
	<td width="110">Id Medicamento</td>        
	<td width="110"><div align="center">Nombre</div></td>        
	<td width="157"><div align="center">Tipo </div></td>         
	<td width="124"><div align="center">Cantidad en unidades/ml/mg</div></td>    
	<td width="124"><div align="center">Tipo de medicamento </div></td>      
	<td width="136"><div align="center">Stok</div></td>   
	<td width="136"><div align="center">Precio</div></td>     
	</tr>      
	<tr>         
	<td><label>           
	<input name="idMedicamento" type="text" id="idMedicamento" value="<? print $row- >idMedicamento;?>" readonly="readonly"/>        
	</label></td>         
	<td><label>           
	<input name="nombM" type="text" id="nombM" value="<? print $row- >nombM;?>"/>         
	</label></td>         
	<td><label>           
	<input name="tipoM" type="text" id="tipoM" value="<? print $row->tipoM;?>"/>         
	</label></td>         
	<td><label>           
	<input name="cantM" type="text" id="cantM" value="<? print $row->cantM;?>"/>        
	</label></td> 
	<td><label>           
	<input name="tipo" type="text" id="tipo" value="<? print $row->tipo;?>"/>        
	</label></td> 
	<td><label>           
	<input name="stok" type="text" id="stok" value="<? print $row->stok;?>"/>        
	</label></td>         
	<td><label>           
	<input name="precM" type="text" id="precM" value="<? print $row->precM;?>" />        
	</label></td>       
	</tr>      
	<tr>         
	<td colspan="7">
	<div align="center">           
	<label>
	<input type="submit" name="Submit2" value="Enviar" />
	<form action="modificarAntib.php"> </form>            
	</label>         
	</div></td>      
    </tr>
	</table> 
    <p>&nbsp;</p>   
	</form>   
	<?  mysql_free_result($qry);  mysql_close($conectado); } ?> 
</div> 
</body>
</html>
