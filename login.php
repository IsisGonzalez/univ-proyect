<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title> :. Grand Slam .: </title>
   <link rel="shortcut icon" href="imag/tennis-2.png" type="image/x-icon">
   <link rel="stylesheet" href="fonts.css">
   <link rel="stylesheet" type="text/css" href="css/fonts.css">
   <link rel="stylesheet" type="text/css" href="css/estilos_redessociales.css">
   <link rel="stylesheet" type="text/css" href="css/estilos_paginacion.css">
   <link rel="stylesheet" type="text/css" href="css/estilos_login.css">
   <link rel="stylesheet" type="text/css" href="estilos_login_fondo.css">
   <link rel="stylesheet" type="text/php" href="login/validacion_login.php">
   <link href='https://fonts.googleapis.com/css?family=Ruge+Boogie' rel='stylesheet' type='text/css'>
</head>
<body>
   <section>
      <header>
         <div class="social">
            <ul>
               <li><a href="https://www.facebook.com/gonza08isis" target="_blank" class="icon-facebook2"></a></li>
               <li><a href="https://www.twitter.com/IP_UNF" target="_blank" class="icon-twitter2"></a></li>
               <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="icon-mail"></a></li>
            </ul>
         </div>
         <nav>
            <ul>
               <li><a href="index.php"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
               <li><a href="#"><span class="tercero"><i class="icon icon-briefcase"> </i></span>Acerca de</a></li>
               <li><a href="#"><span class="cuarto"><i class="icon icon-copy">       </i></span>Multimedia</a></li>
               <li><a href="login.php" class="active"><span class="quinto"><i class="icon icon-envelop">    </i></span>Ingresar</a></li>
               <li><a href="consultas.php"><span class="sexto"><i class="icon icon-address-book"></i></span>Consultas</a></li>
            </ul>
         </nav> 
      </header>

      <article>
         <div class="content">
            <form action = "validacion_login.php" methos = "POST">
               <center>  
                  <h3> Login de Usuario </h3>
                  <h5> Los campos con (*) son requeridos </h5>
                  
                  <tr>
                     <td> * Usuario: </td>
                     <td><input type = "text" max-length="8" placeholder="Ej.: UNEFA" name = "usuario" required></td>
                  </tr>
                  <br></br>

                  <tr>
                     <td> * Password: </td>
                     <td><input type = "password" max-length="8"placeholder="Ej.: 3xt4j3r4d0" name = "pass" required></td>
                  </tr>
                  <br></br>

                  <tr>
                     <td></td>
                     <td><button type = "submit" name="ingresar">Iniciar Sesion</button></td>
                  </tr>

                  <tr>
                     <td></td>
                     <td><a href="registro_de_usuario.php"><button type = "button" name="registrar">Registrar</button></a></td>
                  </tr>
               </center>
            </form>
            <?php 
               if (isset ($_POST['ingresar'])) {
                  require ("validacion_login.php");
               }        
            ?>
            </table>
      </article>
   </section> 

   <div class="paginacion">
      <ul>
         <li><a href="index.php" class="prim">1</a></li>
         <li><a href="listados.html" class="ter">2</a></li>
         <li><a href="planillas.html" class="cua">3</a></li>
         <li><a href="login.php" class="active" class="qui">4</a></li>
         <li><a href="planillas.html" class="sex">5</a></li>
      </ul>
   </div>

   <footer> 
      &copyCopyright 2015 
      <h5> :.Gonzalez Isis.:  ¬.¬  :.Rodriguez F. Jesús A.:  ¬.¬  :.Ladino Roller.:  ¬.¬  
           :.Rojas Angelo.:  ¬.¬  :.Gravini Andres.:  ¬.¬  :.Arquitectura del Software.:
      </h5>
   </footer>
</body>
</html>