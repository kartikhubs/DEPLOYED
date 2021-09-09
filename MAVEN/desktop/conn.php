<?php
define('$host','localhost');
define('$username','root');
define('$password','');
define('$dbname','universe');
$con=mysql_connect($host,$username,$password) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
if (mysqli_connect_errno($con)) { 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
} else { 
	echo “Successfully connected to your database…”; 
} ?>

