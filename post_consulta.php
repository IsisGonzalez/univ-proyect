<?php

require_once("conexion.php");

if(isset($_POST['submit'])){


$torneo=$_POST['torneo'];
$ano=$_POST['ano'];


$query="SELECT * FROM torneo1 WHERE nombre_t='$torneo' AND ao='$ano'";
$query2=mysqli_query($db,$query) or die(mysqli_error($db));
$isis=mysqli_fetch_array($query2);

$jesus=$isis[0];


$query1="SELECT nombrej,apellidoj,nacionalidadj,nombre_e,apellido_e,nombre_a,apellido_a,ao_exp,modalidad,nombre_t,pais,ao,cantidad,categoria_p FROM grand_slam as d left join jugador as t on d.jugador=t.id_jugador left join entrenador as e on e.id_entrenador=d.entrenador left join arbitros as v on v.id_arbitro=d.arbitro left join premio1 as k on k.id_premio=d.premio left join partido1 as p on d.partido=p.id_partido left join torneo1 as g on d.torneo=g.id_torneo WHERE d.torneo='$jesus' AND g.ao='$ano'";
$grand=mysqli_query($db,$query1) or die(mysqli_error($db));
$grand1=mysqli_fetch_array($grand);


echo $grand1['nombrej']. " gano " .$grand1['nombre_t']. " en el año " .$grand1['ao']. " en la modalidad de " .$grand1['modalidad']. " Gano ".$grand1['cantidad']. " Dolares ";



/* 

echo $grand1['nombrej'];
echo $grand1['apellidoj'];
echo $grand1['nacionalidadj'];
echo $grand1['nombre_e'];

echo $grand1['apellido_e'];
echo $grand1['ao_exp'];
echo $grand1['modalidad'];
echo $grand1['nombre_t'];

echo $grand1['pais'];
echo $grand1['ao'];
echo $grand1['cantidad'];
echo $grand1['categoria_p'];

 */
}
