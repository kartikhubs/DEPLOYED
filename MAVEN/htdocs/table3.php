<?php 
   $conn=mysqli_connect('localhost','root','','kbc');

   $serial=$_POST['serial'];
   $session=$_POST['sess'];
   $college=$_POST['college'];
   $stock1=$_POST['stock1'];
   $stock2=$_POST['sub2'];
   $quant=$_POST['quant'];
   
   

   $sql="INSERT into sony(SNo,SESSION,COLLEGE,STOCK1,STOCK2,QUANTITY) values ('$serial','$session','$college','$stock1','$stock2','$quant')";
   

   if(!mysqli_query($conn,$sql)){
   	header('refresh:0;url=sachin3.html');
   }
   else{
      header('refresh:0;url=issue.html');}?>