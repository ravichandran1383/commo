<?php
/*
$con = mysqli_connect('/cloudsql/commo-181207:us-central1:commodb','root','como#9!','commodb');
if($con) 
echo 'connected';
die(mysql_error());
*/
try{
		$dsn = getenv('MYSQL_DSN');
		$user = getenv('MYSQL_USER');
		$password = getenv('MYSQL_PASSWORD');
		$dbh = new PDO($dsn, $user, $password);	
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = 'select * from wpsc_options';
		$stmt = $dbh->prepare($sql);  
		$stmt->execute();	
		$data = $stmt->fetch(PDO::FETCH_ASSOC);	
		$data['option_name'] = $data['option_name'];
		$dbh = null;
		echo '{"items":'. json_encode($data).'}'; 
		
	}catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
	
?>