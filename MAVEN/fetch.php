<?php 
    $conn=mysqli_connect('localhost','root','','expert2');
    
    
    
    if($conn){
    	echo "CONNECTED";
    }
    else{
    	echo "NOT";
    }

    $full=$_POST['name'];
    $email=$_POST['emailid'];
    $phono=$_POST['phono'];
    $prof=$_POST['profession'];
    $skill=$_POST['skill'];
    $status=$_POST['status'];
    
    $exp=$_POST['exp'];
    $stream=$_POST['stream'];

    
 
    if($stream=="pcm"){
    
    $insert="INSERT into pcm1 (FullName,Email,Phono,Profession,Skills,Status,Exp,Stream) values ('$full','$email','$phono','$prof','$skill','$status','$exp','$stream')";
    if(mysqli_query($conn,$insert)){
    		header('refresh:0;url=Thankyou.html');
    	}
    else{
    		echo "NOT INSERTED";
    	}}
    else if($stream=="arts"){
    	$insert="INSERT into arts (FullName,Email,Phono,Profession,Skills,Status,Exp,Stream) values ('$full','$email','$phono','$prof','$skill','$status','$exp','$stream')";
    if(mysqli_query($conn,$insert)){
    		header('refresh:0;url=Thankyou.html');
    	}
    else{
    		echo "NOT INSERTED";
    	}}
    else if($stream=="bio"){
    	$insert="INSERT into bio (FullName,Email,Phono,Profession,Skills,Status,Exp,Stream) values ('$full','$email','$phono','$prof','$skill','$status','$exp','$stream')";
    if(mysqli_query($conn,$insert)){
    		header('refresh:0;url=Thankyou.html');
    	}
    else{
    		echo "NOT INSERTED";

    }}
    else if($stream=="commerce"){
    	$insert="INSERT into commerce (FullName,Email,Phono,Profession,Skills,Status,Exp,Stream) values ('$full','$email','$phono','$prof','$skill','$status','$exp','$stream')";
    if(mysqli_query($conn,$insert)){
    		header('refresh:0;url=Thankyou.html');
    	}
    else{
    		echo "NOT INSERTED";

    }


    }
    else if($stream=="others"){
    	$insert="INSERT into others (FullName,Email,Phono,Profession,Skills,Status,Exp,Stream) values ('$full','$email','$phono','$prof','$skill','$status','$exp','$stream')";
    if(mysqli_query($conn,$insert)){
    		header('refresh:0;url=Thankyou.html');
    	}
    else{
    		echo "NOT INSERTED";

    }
    }

    
    ?>