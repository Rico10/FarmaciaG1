<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Consulta General</title>
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
	left:8px;
	top:8px;
	width:1212px;
	height:295px;
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
<p>
  <?    $conectado=@mysql_connect("localhost","root","12345") or die ("No se logr&oacute; la conexi&oacute;n");    $db=mysql_select_db("farmaciag");    $query="select * from medicamentos";    $qry=mysql_query($query);    $i=mysql_num_rows($qry);    if($i==0)    {     ?>
</p>
<p>&nbsp;</p>
<p>     
  <script>     alert("La tabla esta vacia");     </script>     
  <?   }   else   {   ?>   
</p>
<table width="99%" border="1">     
<tr bordercolor="#CCCCCC">       
<td width="13%"><div align="center"><strong><font color="#000066" size="2" face="Tahoma">idMedicamento </font></strong></div></td>       
<td width="9%"><div align="center"><strong><font color="#000066" size="2" face="Tahoma">Nombre</font></strong></div></td>      
<td width="8%"><div align="center"><strong><font color="#000066" size="2" face="Tahoma">Tipo </font></strong></div></td>       
<td width="16%"><div align="center"><strong><font color="#000066" size="2" face="Tahoma">Cantidad en unidades/ml/mg </font></strong></div></td>      
<td width="12%"><div align="center"><strong><font color="#000066" size="2" face="Tahoma">Tipo de medicamento</font></strong></div></td> 
<td width="12%"><div align="center"><strong><font color="#000066" size="2" face="Tahoma">Stok</font></strong></div></td> 
<td width="12%"><div align="center"><strong><font color="#000066" size="2" face="Tahoma">Precio</font></strong></div></td> 
</tr>    
 <?  $r=0;   $row=0;   mysql_data_seek($qry,$r);   while ($r<$i)   {   $row=mysql_fetch_object($qry);   ?>     
<tr bordercolor="#CCCCCC">       
<td><div align="center"><font color="#000099"><? print $row->idMedicamento; ?></font></div></td>       
<td><div align="center"><font color="#000099"><? print $row->nombM; ?></font></div></td>      
<td><div align="center"><font color="#000099"><? print $row->tipoM; ?></font></div></td>       
<td><div align="center"><font color="#000099"><? print $row->cantM; ?></font></div></td>   
<td><div align="center"><font color="#000099"><? print $row->tipo; ?></font></div></td>      
<td><div align="center"><font color="#000099"><? print $row->stok; ?></font></div></td>    
<td><div align="center"><font color="#000099"><? print $row->precM; ?></font></div></td> 
</tr>     
<?  $r=$r+1;   }    }    mysql_close($conectado);   ?>   </table>   </p> </div> 
</body>
</html>
