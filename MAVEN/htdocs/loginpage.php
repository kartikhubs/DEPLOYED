<?php 
   $conn=mysqli_connect('localhost','root','','KARTIK');


   $login=mysqli_query($conn,"SELECT * from sonu where EMAILID='".$_POST['email_id']."' AND PASSWORD='".$_POST['passcode']."'");
   $count=mysqli_num_rows($login);

 
   

   if($count==0){
      header('refresh:1;url=login.html');
   }
   else{
   	header('refresh:1;url=logout.html');
   }?>