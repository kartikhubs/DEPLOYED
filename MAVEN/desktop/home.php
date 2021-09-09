<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:sublime1.html');
}
?>

<html>
<head>
	<title>INDEX PAGE</title>
</head>
<body>
	<h2>HELLLO NICE PEOPLE</h2>
</body>
</html>