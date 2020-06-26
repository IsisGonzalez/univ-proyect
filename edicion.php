<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>VUELOS CARACAS</title>
<link rel="stylesheet"     href="css/vuelo.css" type="text/css" media="screen">
<body bgcolor="#002C64">
<div id="total" >
<div id="logo"> 
<div id="margens"></div>
<div id="logo2"></div>
</div>
<div id="menu"></div>
<div id="mostrar">

<div align="center">
  <table   class="table table-striped table-hover"  >
    <tr class="info">
      <th scope="col"><div align="center">ID VUELO</div></th>
      <th scope="col"><div align="center">DIA</div></th>
      <th scope="col"><div align="center">FECHA</div></th>
      <th scope="col"><div align="center">DESTINO</div></th>
      <th scope="col"><div align="center">HORA DE SALIDA</div></th>
      <th scope="col"><div align="center">HORA DE LLEGADA</div></th>
	  <th scope="col"><div align="center">TIPO DE VUELO</div></th>
	  <th scope="col"><div align="center">PRECIO</div></th>
	  <th scope="col"><div align="center">CANTIDAD DE ASIENTOS</div></th>
	  <th scope="col"><div align="center">MODELO</div></th>
	  <th scope="col"><div align="center">EDITAR</div></th>
	  
<div></th>
    
    </tr>
<!--Vaciado de la información-->
<?php  require_once("conexionbd.php");

if(isset($_POST ['buscar'
])) {

$destino=$_POST['destino'];

if($destino=='Caracas'){


$query="SELECT * FROM caracas as d 
  left join destino as t on d.Destino=t.Id_Destino left join precio as e on e.Id_TipoVuelo=d.Precio left join vuelo as v on v.Id_vuelo=d.Tipo_Vuelo left join fecha as k on k.Id_Fecha=d.Fecha order by d.Id_Caracas";


}else if($destino=='Madrid'){


$query="SELECT * FROM Madrid as d 
  left join destino as t on d.Destino=t.Id_Destino left join precio as e on e.Id_TipoVuelo=d.Precio left join vuelo as v on v.Id_vuelo=d.Tipo_Vuelo left join fecha as k on k.Id_Fecha=d.Fecha order by d.Id_Madrid";
}else if($destino=='Curacao'){


$query="SELECT * FROM  curacao as d 
  left join destino as t on d.Destino=t.Id_Destino left join precio as e on e.Id_TipoVuelo=d.Precio left join vuelo as v on v.Id_vuelo=d.Tipo_Vuelo left join fecha as k on k.Id_Fecha=d.Fecha order by d.Id_curacao";
}else if($destino=='BA'){


$query="SELECT * FROM buenos_aires as d 
  left join destino as t on d.Destino=t.Id_Destino left join precio as e on e.Id_TipoVuelo=d.Precio left join vuelo as v on v.Id_vuelo=d.Tipo_Vuelo left join fecha as k on k.Id_Fecha=d.Fecha order by d.Id_buenosaires";
}else if($destino=='SF'){


$query="SELECT * FROM san_francisco as d 
  left join destino as t on d.Destino=t.Id_Destino left join precio as e on e.Id_TipoVuelo=d.Precio left join vuelo as v on v.Id_vuelo=d.Tipo_Vuelo left join fecha as k on k.Id_Fecha=d.Fecha order by d.Id_sanf";
}
} 

$kelly=mysqli_query($bd,$query);
while ($muestra= mysqli_fetch_array($kelly)) { ?>    <tr>
      <td><div align="center"><?php echo $muestra['Id_vuelo']; ?></div></td>
	  <td><div align="center"><?php echo $muestra['Dia']; ?></div></td>
	  <td><div align="center"><?php echo $muestra['Fecha']; ?></div></td>
	  <td><div align="center"><?php echo $muestra['Destino']; ?></div></td>
      <td><div align="center"><?php echo $muestra['Hora_S']; ?></div></td>
      <td><div align="center"><?php echo $muestra['Hora_Ll']; ?></div></td>  
      <td><div align="center"><?php echo $muestra['Tipo_Vuelo']; ?></div></td>
      <td><div align="center"><?php echo $muestra['Precio1']; ?></div></td>
       <td><div align="center"><?php echo $muestra['Cant_Asientos']; ?></div></td>
	   <td><div align="center"><?php echo $muestra['Modelo']; ?></div></td>
	    <form action="administradormmg.php" method="post">
      <td><div align="center"><button name="ver" class="btn btn-primary"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></div></td>
      <input name="id1" type="hidden" value="<?php echo $muestra['Id_vuelo']; ?>">
	  <input name="id2" type="hidden" value="<?php echo $destino; ?>">
    </form>
    </tr><?php }  ?>
  </table>
</div>
</div>
<div id="pie"></div>
</div>
</body>