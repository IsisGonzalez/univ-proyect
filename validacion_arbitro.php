<?php    

require_once("conexion.php");


if(isset($_POST['submit'])){
      
      $nombre                    = $_POST['nombre'];
      $apellido                  = $_POST['apellido'];
      $nacionalidad              = $_POST['nacionalidad'];
      $aoe                       = $_POST['aoe'];
      
      
      $guardar="INSERT INTO arbitros(nombre_a,apellido_a,nacionalida_a,ao_exp) VALUES ('$nombre','$apellido','$nacionalidad','$aoe')";
      mysqli_query($db,$guardar) or die('error'.mysqli_error($db));
      header("location:menu1.php");


    }

?>