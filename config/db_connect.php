<?php
include('config.php');
try
{
	$host   = $config['DB_HOST'];
	$dbname = $config['DB_DATABASE'];
	$dbusername = $config['DB_USERNAME'];
	$dbpassword = $config['DB_PASSWORD'];
	$conn= new PDO("mysql:host=$host;dbname=$dbname",$dbusername,$dbpassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //$conn = mysqli_connect($host, $username, $password, $dbname);
}
catch(PDOException $e)
{
	echo "Error:".$e->getMessage();
}
?>
