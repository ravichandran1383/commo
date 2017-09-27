<?php
$dsn = getenv('MYSQL_DNS');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$con = mysql_connect($dsn,$user,$password);
if($con) 
echo 'connected';
die(mysql_error());
?>