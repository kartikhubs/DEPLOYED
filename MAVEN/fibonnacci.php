<?php 
   $N=10;
   $first=0;
   $second=1;
   echo $first.' ';
   for($i=0;$i<=$N;$i++){
   	   $c=$first+$second;
   	   echo $c.' ';
   	   $first=$second;
   	   $second=$c;
   }
?>