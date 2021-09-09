<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'universe');
$email_id=$_POST['email_id'];
$pass_code=$_POST['pass_code'];
$s="select * from galaxy where email_id='$email_id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo("ALREADY TAKEN");
}
else{
    $reg="insert into galaxy(email,password) values('$email_id','$pass_code')";
    mysqli_query($con,$reg);
    echo("registration successfull");


}?>