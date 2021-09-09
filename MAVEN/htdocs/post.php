<?php 
    
   	if($_SERVER["REQUEST_METHOD"]=="POST"){
   		if(isset($_POST['submit'])){
   		$name=$_REQUEST['name'];
   		$roll=$_REQUEST['roll'];
   		echo $name;
   		echo "<br>";
   		echo $roll;
   	
   }}?>