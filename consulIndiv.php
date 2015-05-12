<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consultas individuales</title>
<style type="text/css">
<!--
.Estilo2 {	font-size: 36px;
	font-weight: bold;
}
.Estilo3 {color: #92A5C3; font-family: "Times New Roman", Times, serif;}
.Estilo5 {color: #FF0000; font-family: "Times New Roman", Times, serif; }
.Estilo6 {	font-family: Stencil;
	color: #0000FF;
}
#capa1 {	position:absolute;
	left:2px;
	top:2px;
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
    <p class="Estilo6">&quot;MedicamenTOS&quot;</p>
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
<?  $idMedicamento=$_REQUEST["idMedicamento"]; 
	$conectado=@mysql_connect("localhost","root","12345") or die ("no se logro la conexion"); 
	$db=mysql_select_db("farmaciag");  	
	$query="select * from medicamentos where idMedicamento='".$idMedicamento."'"; 
	$qry=mysql_query($query);  
	$i=mysql_num_rows($qry); 
	 if ($i==0) {  ?>   <p>     <script language="JavaScript" type="text/javascript">   alert("El Medicamento no existe");   		location.href="consulIndiv.html";    </script>    
	  <?   }   else   {   $r=0;    $row=0;    mysql_data_seek($qry,$r);   
	   $row=mysql_fetch_object($qry);    
	   mysql_close($conectado);    }    ?> 
	     </p>  
		  <table width="887" height="138" border="1" align="center" cellpadding="2" cellspacing="1">    
		   <tr> 
		  <td width="104" align="center" valign="middle">Id Medicamento: </td>      
		  <td width="139" align="center" valign="middle">Nombre: </td> 
		  <td width="142" align="center" valign="middle">Tipo:</td>       
		  <td width="110" align="center" valign="middle">Cantidad en unidades/ml/mg: </td> 
		  <td width="142" align="center" valign="middle">Tipo de medicamento:</td>     
		  <td width="84" align="center" valign="middle">Stok</td>   
		  <td width="84" align="center" valign="middle">Precio</td>   
		  </tr>     
		  <tr>       
		  <td align="center" valign="middle"><? print $row->idMedicamento; ?>&nbsp;</td>       
		  <td align="center" valign="middle"><? print $row->nombM; ?>&nbsp;</td>       
		  <td align="center" valign="middle"><? print $row->tipoM ?>&nbsp;</td>       
		  <td align="center" valign="middle"><? print $row->cantM; ?>&nbsp;</td>     
		  <td align="center" valign="middle"><? print $row->tipo; ?>&nbsp;</td>  
		  <td align="center" valign="middle"><? print $row->stok; ?>&nbsp;</td>   
		  <td align="center" valign="middle"><? print $row->precM; ?>&nbsp;</td>   
</tr>   </table>   </p> </div> 
<p>&nbsp;</p>
<p>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="244" height="58">
    <param name="movie" value="button4.swf" />
    <param name="quality" value="high" />
    <param name="bgcolor" value="#FFFFFF" />
    <embed src="button4.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="244" height="58" bgcolor="#FFFFFF"></embed>
	<form METHOD="LINK" ACTION="consultasAntib.html" > </form>
  </object>
</p>
</body>
</html>
