<?php
   $link = mysql_connect("localhost","root","");
   if ($link) {
	   mysql_select_db("torneo_tenis",$link);
	   }else {
	   	echo ('error de conecion');
	   }
?>