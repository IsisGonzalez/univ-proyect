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
          <li><a href="#"><span class="tercero"><i class="icon icon-briefcase"> </i></span>Acerca de </a></li>
          <li><a href="multimedia.php"><span class="cuarto"><i class="icon icon-copy">       </i></span>Multimedia</a></li>
          <li><a href="login.php"><span class="quinto"><i class="icon icon-envelop">    </i></span>Logearse</a></li>           
          <li><a href="consultas.php"><span class="sexto"><i class="icon icon-address-book"></i></span>Contacto</a></li>
        </ul>
      </nav>       
    </header>

    <article>
      <h3 align="center">GRAND SLAM </h3>
      
      <?php
        echo 'MENU';
        echo 'Para Registrar Jugador presione x';
        echo 'Para Registrar Jugador presione z';
        echo 'Para Registrar Jugador presione w';

        if (isset (x)){

        $x = header("location:registro_de_jugador.php");
        }else if (isset (z)){

        $z = header("location:registro_de_entrenador.php");}
        else if (isset (w)){
        $w = header("location:registro_de_arbitros.php");
        }
      ?>
    
    </article>
  </section> 
  <div class="paginacion">
    <ul>
      <li><a href="index.php" class="active" class="prim">1</a></li>
      <li><a href="listados.html" class="ter">2</a></li>
      <li><a href="multimedia.php" class="cua">3</a></li>
      <li><a href="login.php" class="qui">4</a></li>
      <li><a href="consulta.php" class="sex">5</a></li>
  </ul>
  </div>   
  <footer> 
    & @copyCopyright 2015@ 
    <h5> :.Gonzalez Isis.:  ¬.¬  :.Rodriguez F. Jesús A.:  ¬.¬  :.Ladino Roller.:  ¬.¬  :.Rojas Angelo.:  ¬.¬  
         :.Gravini Andres.:  ¬.¬  :.Arquitectura del Software.:
    </h5>
  </footer>
</body>
</html>