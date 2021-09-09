<?php
	if(count($_POST)>0)
	{
		$conn = mysqli_connect("localhost","root","","universe");
		if(!$conn)
	{
		echo 'Not connected to server';
	}
    if(isset($_POST['submit']))
    {
    	$email_id=$_POST['$email_id'];
    	$pass_code=$_POST['$pass_code'];
    	$query="select * from galaxy where email='$email_id' && password='$pass_code'";
    	$data=mysqli_query($conn,$query);
    	$total=mysqli_num_rows($data);
    	if(total==0){
    		echo'wrong credentials';
    	}
    	else{
    		echo'right credentials';
    	}

    }}?>