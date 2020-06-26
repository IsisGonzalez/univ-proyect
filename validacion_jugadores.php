<?php    

require_once("conexion.php");


if(isset($_POST['submit'])){
     

      $nombre                    = $_POST['nombre'];
      $apellido                  = $_POST['apellido'];
      $edad                      = $_POST['edad'];
      $nacionalidad              = $_POST['nacionalidad'];
      $puntuacion_de_juegos      = $_POST['puntuacion_de_juegos'];
      
   $query="INSERT INTO jugador(nombrej,apellidoj,edadj,nacionalidadj,p_j) VALUES('$nombre','$apellido','$edad','$nacionalidad','$puntuacion_de_juegos')";
   mysqli_query($db,$query) or die (mysqli_error($db));

header("location:menu1.php");
}

?>