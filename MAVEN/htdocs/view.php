<?php 
    $conn=mysqli_connect('localhost','root','','vivo');
    $conn1=mysqli_connect('localhost','root','','kbc');
    
    
    $entry=$_POST['entry'];
    $session=$_POST['sess'];
    $college=$_POST['college'];
    $stock1=$_POST['stock1'];
    $stock2=$_POST['sub2'];
    $date=$_POST['order_date'];
    $issue=$_POST['issue'];

    $sql="INSERT into y5(ENo,SESSION,COLLEGE,STOCK1,STOCK2,ORDERDATE,ISSUED) values ('$entry','$session','$college','$stock1','$stock2','$date','$issue')";
    
   
    $select1="SELECT * from y5 order by ENo desc";

    $select="SELECT *  from sony order by SNo desc";
   
    $result=mysqli_query($conn1,$select);
    $result1=mysqli_fetch_assoc($result);
    $result2=mysqli_query($conn,$select1);
    $result3=mysqli_fetch_assoc($result2);
    if(!mysqli_query($conn,$sql) or $result1['QUANTITY']<$result3['ISSUED']){
        echo '<script type="text/javascript">
             window.onload=function(){
                alert("NOT ENOUGH STUFF");
             }</script>';
        header("refresh:1;url=sachin1.html");
    }
    
    else{
       header('refresh:0;url=avail.php');
    
    
    }?>