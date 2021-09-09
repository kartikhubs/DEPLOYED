<?php

	$con=mysqli_connect('localhost:3306','root','','redmi');
	if(!$con){
		echo "CONNECTION LOST";
	}
	if(!mysqli_select_db($con,'redmi')){
		echo "DATABASE NOT SELECTED";

	}
	$session=$_POST['sess'];
	$college=$_POST['college'];
	$new=$_POST['stock'];

	
	
	$r="INSERT into note (SESSION,COLLEGE,STOCK) values ('$session','$college','$new')";
	if(!mysqli_query($con,$r)){
		echo "NOT INSERTED!!";
	}
	else{
		header("refresh:1;url=sachin2.html");
	}

	

?>