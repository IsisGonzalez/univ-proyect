<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> :. Grand Slam .: </title>
  <link rel="shortcut icon" href="imag/tennis-2.png" type="image/x-icon">
  <link rel="stylesheet" type="text/php" href="consulta.php">
  <link rel="stylesheet" href="estilos.css">
  <link rel="stylesheet" href="fonts.css">
  <link rel="stylesheet" type="text/css" href="css/estilos_redessociales.css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/estilos_paginacion.css">
  <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
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
      <div class="background">
        <h3 align="center">GRAND SLAM </h3>
        <br></br>
        
        <?php 
          require_once("conexion.php"); 
          $query="SELECT * FROM jugador as d left join torneo1 as t on  d.jugador_fk=t.id_torneo";
        ?>
        
        <div align="center">
          <table   class="table table-striped table-hover">
            <tr class="info">
              <th scope="col"><div align="center">nombre</div></th>
              <th scope="col"><div align="center">edad</div></th>
              <th scope="col"><div align="center">apellido</div></th>
              <th scope="col"><div align="center">nacionalidad</div></th>
              <th scope="col"><div align="center">puntuacion del jugador</div></th>
              <div></th>

              <?php
                $isis=mysqli_query($db,$query) or die(mysqli_error($db)); while ($muestra= mysqli_fetch_array($isis)){
              ?>
              <tr>
                <td><div class="info2" align="center"><?php echo $muestra['nombrej']; ?></div></td>
                <td><div class="info2" align="center"><?php echo $muestra['apellidoj']; ?></div></td>
                <td><div class="info2" align="center"><?php echo $muestra['edadj']; ?></div></td>
                <td><div class="info2" align="center"><?php echo $muestra['nacionalidadj']; ?></div></td>
                <td><div class="info2" align="center"><?php echo $muestra['p_j']; ?></div></td>
              </tr>  
  
              <?php 
                } 
              ?>
          </table>
        </div>   
    </article>
    
    <div class="wrap">
      <div class="widget">
        <div class="fecha">
          <p id="diaSemana" class="diaSemana"></p>
          <p id="dia" class="dia"></p>
          <p>de </p>
          <p id="mes" class="mes"></p>
          <p>del </p>
          <p id="year" class="year"></p>
        </div>
        <div class="reloj">
          <p id="horas" class="horas"></p>
          <p>:</p>
          <p id="minutos" class="minutos"></p>
          <p>:</p>
          <div class="caja-segundos">
            <p id="ampm" class="ampm"></p>
            <p id="segundos" class="segundos"></p>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <div class="paginacion">
    <ul>
      <li><a href="index.php" class="active" class="prim">1</a></li>
      <li><a href=".html" class="segu">2</a></li>
      <li><a href="listados.html" class="ter">3</a></li>
      <li><a href="planillas.html" class="cua">4</a></li>
      <li><a href="login.php" class="qui">5</a></li>
      <li><a href="planillas.html" class="sex">6</a></li>
    </ul>
  </div>    
                
  <footer> 
    &copyCopyright 2015 
    <h5> :.Gonzalez Isis.:  ¬.¬  :.Rodriguez F. Jesús A.:  ¬.¬  :.Ladino Roller.:  ¬.¬  
          :.Rojas Angelo.:  ¬.¬  :.Gravini Andres.:  ¬.¬  :.Arquitectura del Software.:
    </h5> 
  </footer>
  <script src="js/reloj.js"></script>
</body>
</html>