<?php 
  $conn=mysqli_connect('localhost:3306','root','','hp');
  

  $sess=$_POST['sess'];
  $coll=$_POST['college'];
  $stk=$_POST['stock'];
  
  $cat2=$_POST['sub1'];

 
  
  $sql="INSERT into inspiron (SESSION,COLLEGE,STOCK,STOCK1) values ('$sess','$coll','$stk','$cat2')";
  if(!mysqli_query($conn,$sql)){
  	echo "NOT INSERTED";
  }
  else{
  	header("refresh:0;url=sachin3.html");
  }
  ?>