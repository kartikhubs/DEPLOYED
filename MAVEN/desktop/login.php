<?php
if($_POST)
{
	$host="localhost";
	$user="root";
	$pass="";
	$db="gyanganga";

	$username=$_POST['username'];
	$password=$_POST['password'];
	$conn=mysqli_connect($host,$user,$pass,$db);
	$query="SELECT * from ggits where username='$username' and password='$password'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)==1)
	{
		session_start();
		$_SESSION['gyanganga']='true';
		header('location:process.php');


	}
	else
	{
		echo("WRONG CREDENTIALS");
	}
}
?>
<h1>LOGIN</h1>
<form method="POST">
	username:<br> 
	<input type="text" name="username"><br>
	password:<br>
	<input type="password" name="password"><br>
	<input type="submit" value="PROCEED">
</form>