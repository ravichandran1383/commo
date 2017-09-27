<?php
$con = mysql_connect('commo-181207:us-central1:commodb', 'root', 'como#9!');
if($con) 
echo 'connected';
die(mysql_error());
?>