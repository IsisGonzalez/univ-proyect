<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title> :. Grand Slam .: </title>
   <link rel="shortcut icon" href="imag/tennis-2.png" type="image/x-icon">
   <link rel="stylesheet" href="estilos.css">
   <link rel="stylesheet" href="fonts.css">
   <link rel="stylesheet" type="text/css" href="css/estilos_redessociales.css">
   <link rel="stylesheet" type="text/css" href="css/fonts.css">
   <link rel="stylesheet" type="text/css" href="css/estilos_paginacion.css">
   <link rel="stylesheet" type="text/css" href="css/estilos_jugador.css">
   <link rel="stylesheet" type="text/php" href="validacion_entrenador.php">
   <link href='https://fonts.googleapis.com/css?family=Ruge+Boogie' rel='stylesheet' type='text/css'>
   <script src="jquery.min.js"></script>
   <script src="validCampoFranz.js"></script>
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
               <li><a href="index.php" class="active"><span class="primero"><i class="icon icon-home"></i></span>Inicio</a></li>
               <li><a href="aaa.php"><span class="tercero"><i class="icon icon-briefcase"> </i></span>Acerca de </a></li>
               <li><a href="multimedia.php"><span class="cuarto"><i class="icon icon-copy">       </i></span>Multimedia</a></li>
               <li><a href="login.php"><span class="quinto"><i class="icon icon-envelop">    </i></span>Logearse</a></li>
               <li><a href="consultas.php"><span class="sexto"><i class="icon icon-address-book"></i></span>Contacto</a></li>
            </ul>
         </nav>
      </header>

      <article>
         <div class="content">
            <form action = "validacion_usuario.php" method="POST" >
               </center>  

                  <?php if(@$_GET['listo'] == "agregado") : ?>
                     
                     <p> Agregado Exitosamente </p>
                  
                  <?php endif; ?>

                  <h3> Registro de Usuarios </h3>
                  <h5> Los campos con (*) son requeridos </h5>

                  <tr>
                     <td> * Nombre: </td>
                     <td><input type = "text" size="3" maxlength="20" placeholder="Ej.: Roberto" name = "nombre" id="miCampo1" required></td>
                  </tr>
                  <br></br>

                  <tr>
                     <td> * Apellido: </td>
                     <td><input type = "text" size="3" maxlength="20" placeholder="Ej.: Peralta" name = "apellido" id="miCampo3" required></td>
                  </tr>
                  <br></br>

                  <tr>
                     <td> * email: </td>
                     <td><input type = "text" size="10" maxlength="35" placeholder="Ej.: Americano@grnads.net" name = "email" required></td>
                  </tr>
                  <br></br>
                  
                  <tr>
                     <td> * nick usuario: </td>
                     <td><input type = "text" size="6" maxlength="10" placeholder="Ej.: rolandgarros" name = "login" required></td>
                  </tr>
                  <br></br>
            
                  <tr>
                     <td> * contraseña: </td>
                     <td><input type = "password" size="8" maxlength="20" placeholder="Ej.: 2 años" name = "pass" required></td>
                  </tr>
                  <br></br>

                  <tr>
                     <td> * confirmar contraseña: </td>
                     <td><input type = "password" size="8" maxlength="20" placeholder="Ej.: 2015" name = "rpass" required></td>
                  </tr>
                  <br></br>
                     
                  <tr>
                     <td></td>
                     <td><button type = "submit" value="submit"  name="submit">Guardar</button></td>
                  </tr>

                  <tr>
                     <td></td>
                     <td><button type = "reset">Borrar</button></td>
                  </tr>

               </center>
            </form>
            </table>
      </article>
   </section> 
   
   <div class="paginacion">
      <ul>
         <li><a href="index.php" class="active" class="prim">1</a></li>
         <li><a href="aaa.php" class="ter">2</a></li>
         <li><a href="multimedia.php" class="cua">3</a></li>
         <li><a href="login.php" class="qui">4</a></li>
         <li><a href="consulta.php" class="sex">5</a></li>
      </ul>
   </div>   

   <footer> 
      & @copyCopyright 2015@ 
      <h5> :.Gonzalez Isis.:  ¬.¬  :.Rodriguez F. Jesús A.:  ¬.¬  :.Ladino Roller.:  ¬.¬  
           :.Rojas Angelo.:  ¬.¬  :.Gravini Andres.:  ¬.¬  :.Arquitectura del Software.:
      </h5> 
   </footer>
</body>
</html>

<script type="text/javascript">
   $(function(){

      $('#miCampo1').validCampoFranz(' abcdefghijklmnopqrstuvwxzyñáéíóú');
      $('#miCampo3').validCampoFranz(' abcdefghijklmnopqrstuvwxzyñáéíóú');


      $('#miCampo2').validCampoFranz('0123456789');

   })
</script>