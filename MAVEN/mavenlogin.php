<?php 
   session_start();
   $conn=mysqli_connect('localhost','root','','maven1');
   
   if(isset($_POST['submit'])){
      $_SESSION['username']=$_POST['username'];
      $_SESSION['password']=$_POST['password'];
   
   $select="SELECT * from signup where Username='".$_POST['username']."' AND Password='".$_POST['password']."'";
   
   $result=mysqli_query($conn,$select);
   if(mysqli_num_rows($result)==0){
   	echo '<script type="text/javascript">
   	    window.onload=function(){
   	    alert("INVALID CREDENTIALS/USER DOES NOT EXIST");
   }</script>';
	   header('refresh:0;url=loginpage.html');}
   else{
   	header('location:afterlogin.html');
   }}?>