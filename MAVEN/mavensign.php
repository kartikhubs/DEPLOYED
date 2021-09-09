<?php 
  $conn=mysqli_connect('localhost','root','','maven1');
  
  
  $user=$_POST['name_'];
  $email=$_POST['email_'];
  $pass=$_POST['pass'];
  $pass1=$_POST['passcode'];
  
  $dob=$_POST['date_'];

  $already="SELECT * from signup where Email='$email'";
  $result=mysqli_query($conn,$already);
  if(mysqli_num_rows($result)>0){
  	echo '<script type="text/javascript">
  	    window.onload=function(){
  	    	alert("ALREADY A USER");
  	    }</script>';
  	header('refresh:0;url=signupc.html');
  }
  else{

  $insert="INSERT into signup(Username,Email,Password,Confirm,DOB) values ('$user','$email','$pass','$pass1','$dob')";

  	
  	if($pass!=$pass1){
  		echo '<script type="text/javascript">
  		            window.onload=function(){
  		            	alert("passwords do not match");


  		            }</script>';
  		header('refresh:0;url=signupc.html');
  	}
  	else{
      if(mysqli_query($conn,$insert)){
  		
  		header('refresh:0;url=loginpage.html');
  	}}
  }
  
  ?>