<!DOCTYPE html>
<html lang="es-VE">
<head>
  <title>Vuela Caracas|Editar Vuelo</title> <!-- Titulo de la Página -->
  <link rel="shortcout icon" type="images" href="./images/logo.png"/> <!--Logo En el navegador -->
  <meta charset="iso-8859-1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--Estilo de la Página -->
  <link href="css/bootstrap2.css" rel="stylesheet" type="text/css">
  <link href="css/administradormmg.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="total">
    <div id="logo">
      <div id="margens">
      </div>
      <div id="logo2">
      </div>
    </div>
    <div id="mostrar">
  <header> <!-- Encabezado de la Página -->

  </header>

  <?php //Secuencia en PHP
    require("conexionbd.php");
      if(isset($_POST['id1'])){
        $destino=($_POST['id2']);
        $idv1=($_POST['id1']);
        
        $query="SELECT * FROM $destino as d 
        left join destino as t on d.Destino=t.Id_Destino left join precio as e on e.Id_TipoVuelo=d.Precio left join vuelo as v on v.Id_vuelo=d.Tipo_Vuelo left join fecha as k on k.Id_Fecha=d.Fecha WHERE d.Tipo_Vuelo='$idv1'";
        $sql =mysqli_query($bd,$query); 

        $row= mysqli_fetch_array($sql);
        $dia1=$row['Fecha'];

        $date = date_create($row['Fecha']);
        $dias= date_format($date,'l');

  ?> 

  <div align="center">
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                  
      <div class="panel-heading">
        <div class="panel-title"><p>Editar Datos del Vuelo</p></div>
      </div>
  
  <form  method="post" action="post_administradormmg.php" name="form1"><!-- Formulario de Recoleccion de Datos -->
      <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon">Fecha del Vuelo </span><input class="form-control"type="date" name="fecha" step="1" min="2013-01-01" max="2019-12-31" value="<?php echo $row['Fecha'];?>">
      </div>
      
      <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon">Destino</span>
      <input  type="text" class="form-control" id="validaletra" name="destino" value="<?php echo $row['Destino']; ?>" placeholder="Seleccione destino" maxlength="15" >   
      </div> 
      
      <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon">Hora de Salida</span>
      <input  type="time" class="form-control" name="hora_s" value="<?php echo $row['Hora_S']; ?>" max="23:59:59" min="00:00:00" step="1">  
      </div> 
      
      <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon">Hora de llegada</span>
      <input  type="time" class="form-control" name="hora_Ll" value="<?php echo $row['Hora_Ll']; ?>" max="23:59:59" min="00:00:00" step="1">                                  
      </div>

      <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon">Precio del Boleto</span>
      <input  type="text" class="form-control" name="precio" value="<?php echo $row['Precio1']; ?>" placeholder="Seleccione precio " maxlength="10" >                                    
      </div>


      <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon">Modelo de Avi&oacute;n</span>
      <input  type="text" class="form-control" name="modelo" id="modelo" value="<?php echo $row['Modelo']; ?>" placeholder="Seleccione modelo" maxlength="10" >
      </div>
  
      <div style="margin-bottom: 25px" class="input-group">
      <span class="input-group-addon">Cantidad de Asientos</span>
      <input  type="number" class="form-control" id="cant" name="cant" value="<?php echo $row['Cant_Asientos']; ?>" placeholder="Seleccione cantidad de asiento" required="required" min="1" max="615" onKeypress="return justNumbers(event);" value="1" >                                        
      </div>

        <div style="margin-bottom: 25px" class="input-group">
          <span class="input-group-addon">Tipo de Vuelo</span>
          <select class="form-control" name="tp" id="tp" values="<?php echo $row['Tipo_Vuelo']?>">
          <option value="Publico">P&uacute;blico</option>
          <option value="Privado">Privado</option>
          </select>
        </div>
    
      <div style="margin-top:10px" class="form-group">
      <!-- Boton-->
      <div  align="center" class="col-sm-12 controls">
        <input type="submit" name="editar" class="btn btn-info" value="Editar" >
      </div>
      </div>   
      <input  type="hidden" class="form-control" name="id2" value="<?php echo $row['Id_vuelo']; ?>" >  
      <input  type="hidden" class="form-control" name="id3" value="<?php echo $row[1]; ?>" >
      <input  type="hidden" class="form-control" name="id4" value="<?php echo $row[2]; ?>" >
      <input  type="hidden" class="form-control" name="id5" value="<?php echo $row[3]; ?>" >
      <input  type="hidden" class="form-control" name="id6" value="<?php echo $row[4]; ?>" > 
  </form>    <?php }  ?> 
  <script type="text/javascript">
  function justNumbers(e)
          {
          var keynum = window.event ? window.event.keyCode : e.which;
          if ((keynum == 8) || (keynum == 46))
          return true;
          
          return /\d/.test(String.fromCharCode(keynum));
          }
  </script>
  </div>
  </div>
  </div><div id="pie"></div>
</body>
</html>
