<?php
$link = mysql_connect("localhost", "root", "unes")
    or die("Impossible de se connecter : " . mysql_error());
//echo 'Connexion r�ussie ',"\n";
mysql_select_db('post');

?>


