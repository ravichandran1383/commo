<?php
$con = mysqli_connect(null,'root','como#9!','commodb','','/cloudsql/commo-181207:us-central1:commodb');
if($con) 
echo 'connected';
die(mysql_error());
?>