<?php
echo $dsn = getenv('MYSQL_DNS');
echo  $user = getenv('MYSQL_USER');
echo $password = getenv('MYSQL_PASSWORD');
$con = mysql_connect($dsn,$user,$password);
if($con) 
echo 'connected';
die(mysql_error());
phpinfo();
?>

