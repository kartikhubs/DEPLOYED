<?php 
   $conn=mysqli_connect('localhost','root','','kbc');
   
   $session=$_POST['sess'];
   $college=$_POST['college'];
   $stock1=$_POST['stock1'];
   $stock2=$_POST['sub2'];
   $quant=$_POST['quant'];

   $sql="INSERT into sony(SESSION,COLLEGE,STOCK1,STOCK2,QUANTITY) values('$session','$college','$stock1','$stock2','$quant')";

   $update="UPDATE sony SET QUANTITY='$quant' where SESSION='$session'";

   if(!mysqli_query($conn,$update)){
   	echo "NOT UPDATED";
   }
   else{
   	echo "UPDATED";
   }?>