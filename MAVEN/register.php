<?php 
   $conn=mysqli_connect('localhost','root','','KARTIK');


   $name=$_POST['name'];
   $email=$_POST['email_id'];
   $pass=$_POST['passcode'];
   $already="SELECT * from sonu where NAME='$name'";
   $taken=mysqli_query($conn,$already);
   if(mysqli_num_rows($taken)==1){
      echo "already taken";
   }
   else{

   $update="INSERT into sonu(NAME,EMAILID,PASSWORD) values('$name','$email','$pass')";
   if(!mysqli_query($conn,$update)){
   	echo "NOT INSERTED";
   }
   else{
   	header("refresh:1;url=login.html");
   }}?>