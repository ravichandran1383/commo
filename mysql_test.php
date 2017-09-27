<?php
$con = mysqli_connect('/cloudsql/commo-181207:us-central1:commodb','root','como#9!','commodb');
if($con) 
echo 'connected';
die(mysql_error());
?>