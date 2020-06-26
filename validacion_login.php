<?php
     
  
     $nombre = $_REQUEST['usuario'];
     $pass   = $_REQUEST['pass'];
     $reqlen = strlen($nombre) * strlen($pass);

     $conexion = mysql_connect("localhost", "root", "") or die ("Problemas al conectar el servidos");

     mysql_select_db("torneo_tenis",$conexion) or die ("error al tratar de conectar con la base de datos");

     $estandar = mysql_query("SELECT * FROM adsi where login = '".$nombre."' and passnormal = '".$pass."'", $conexion);

     $admin    = mysql_query("SELECT * FROM adsi where login = '".$nombre."' and passadmin = '".$pass."'", $conexion);

     if ($row = mysql_fetch_array($estandar)) {

          header("location: menu2.php");

     } else if ($row = mysql_fetch_array($admin)) {

          header("location: menu1.php");
          

     } else {

          echo 'Introdujo un Dato Invalido Por favor Verifique, Intente de Nuevo';
     }

     if ($reqlen > 0) {

     } else {

          echo 'Por Favor Rellene Todos Los Campos Requeridos';
     }

?>
