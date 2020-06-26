<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">   
  <title> :. Grand Slam .: </title>
  <link rel="shortcut icon" href="imag/tennis-2.png" type="image/x-icon">      
  <link rel="stylesheet" type="text/php" href="consulta.php">
  <link rel="stylesheet" href="estilos_consultas.css">
  <link rel="stylesheet" href="fonts.css">
  <link rel="stylesheet" href="consulta.css">
  <link rel="stylesheet" type="text/css" href="css/estilo_consultas.css">
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
          <li><a href="aaa.php"><span class="tercero"><i class="icon icon-briefcase"> </i></span>Acerca de</a></li>
          <li><a href="multimedia.php"><span class="cuarto"><i class="icon icon-copy">       </i></span>Multimedia</a></li>
          <li><a href="login.php"><span class="quinto"><i class="icon icon-envelop">    </i></span>Ingresar</a></li>
          <li><a href="consultas.php"><span class="sexto"><i class="icon icon-address-book"></i></span>Concultas</a></li>
        </ul>
      </nav>       
    </header>

    <article>
      <h3 align="center">GRAND SLAM </h3>
      <div class="table">
        </center>
        <form name="busqueda" action="post_consulta.php" method="post">
          <tr>
            <td> Torneo: </td>
            <td class="cons">
              <select name="torneo" Required>
                <option>       </option>
                <option value ="Pepito">Australian Open</option>
                <option value="Us Open">The Championships Wimbledon</option>
                <option value="Australian Open">Roland Garros Parisn</option>
                <option value="Australian Open">Australia Open</option>
            </td>
              </select>              
          </tr> 
          <tr>                       
            <td> A&ntilde;o: </td>
            <td class="cons">
              <select name="ano" Required>
                <option>       </option>
                <option value ="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
            </td>
              </select>
          </tr> 
          <tr>          
            <td></td>
            <td>
              <button type = "submit" value="submit"  name="submit">Buscar</button>
            </td>
          </tr>
        </form>
        </center>
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
      <li><a href="listados.html" class="ter">2</a></li>
      <li><a href="planillas.html" class="cua">3</a></li>
      <li><a href="login.php" class="qui">4</a></li>
      <li><a href="planillas.html" class="sex">5</a></li>
    </ul>
  </div>    
  
  <script src="js/reloj.js"></script>
  
  <footer> 
    &copyCopyright 2015 
    <h5> :.Gonzalez Isis.:  ¬.¬  :.Rodriguez F. Jesús A.:  ¬.¬  :.Ladino Roller.:  ¬.¬  
         :.Rojas Angelo.:  ¬.¬  :.Gravini Andres.:  ¬.¬  :.Arquitectura del Software.:
    </h5> 
  </footer>
</body>
</html>