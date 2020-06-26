<?php    

require_once("conexion.php");


if(isset($_POST['submit'])){
     

      $nombre                    = $_POST['nombre'];
      $apellido                  = $_POST['apellido'];
      $edad                      = $_POST['edad'];

   $query="INSERT INTO entrenador(nombre_e,apellido_e,edad_e) VALUES('$nombre','$apellido','$edad')";
   mysqli_query($db,$query) or die (mysqli_error($db));

header("location:menu1.php");
}


?>