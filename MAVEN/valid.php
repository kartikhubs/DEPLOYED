<?php 
   $conn=mysqli_connect('localhost','root','','maven1');
   
   $answer=$_POST['number'];
   $name=$_POST['full'];
   $select="SELECT * from signup order by Username desc";
   $result=mysqli_query($conn,$select);
   $row=mysqli_fetch_assoc($result);
   echo $row['Username'];?>
   