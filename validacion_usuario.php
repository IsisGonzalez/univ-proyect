<?php    

require_once("conexion.php");


if(isset($_POST['submit'])){
      
      $nombre                    = $_POST['nombre'];
      $apellido                  = $_POST['apellido'];
      $email                     = $_POST['email'];
      $login          		   = $_POST['login'];
      $pass                      = $_POST['pass'];
      $rpass                     = $_POST['rpass'];

     $guardar="INSERT INTO adsi(nombre,apellido,email,login,passnormal) VALUES ('$nombre','$apellido','$email','$login','$pass')";
      mysqli_query($db,$guardar) or die('error'.mysqli_error($db));
      header("location:login.php");

}

?>