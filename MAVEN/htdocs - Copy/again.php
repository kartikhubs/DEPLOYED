<?php  
  $servername='DESKTOP-U5SOHU6\SQLEXPRESS';
  $conn=array("Database"=>"lenovo");
  $k=sqlsrv_connect($servername,$conn);
  if($k){
    echo "KARTIK";}
  else{
    echo "NEWLAY";}
?>