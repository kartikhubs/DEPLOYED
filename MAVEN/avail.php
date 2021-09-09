<?php 
   
    $conn=mysqli_connect('localhost','root','','vivo');
    $conn1=mysqli_connect('localhost','root','','kbc');
    
    if(isset($_POST['submit'])){
    $entry=$_POST['entry'];
    $session=$_POST['sess'];
    $college=$_POST['college'];
    $stock1=$_POST['stock1'];
    $stock2=$_POST['sub2'];
    $date=$_POST['order_date'];
    $issue=$_POST['issue'];

    $sql="INSERT into y5(ENo,SESSION,COLLEGE,STOCK1,STOCK2,ISSUED) values ('$entry','$session','$college','$stock1','$stock2','$issue')";}
    
   
    $select1="SELECT * from y5 order by ENo desc";

    $select="SELECT *  from sony order by SNo desc";
   
    
   
    
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    	<title>CHECK AVAILABILITY</title>
    </head>
    <style>
    	body{
		font-family:Arial,Helvitica,sans-serif;
		background-image:linear-gradient(to right,green,white);
	}
	.content{
		width:650px;
		max-width:650px;
        opacity:0.8;
        text-align:center;
        position:absolute;
        top:100px;
        left:450px;
	}
	button[type=button]{
		background-color:yellow;
		border-radius:12px;
		color:black;
		border-width:0px;
	}
	input[type=submit]{
		border:0px;
		background-color:red;
		color:white;
		border-radius: 2px;

	}
	input[type=submit]:hover{
		background-color:cyan;
		color:black;
	}
</style>
<body>
	<div class="content">
	<table align="center" border="1px" style="width:600px;border-color:red;">
		<tr>
			<th colspan="7"><h3>STOCK AVAILABILITY</h3></th>
		</tr>
		<t>
			<th>ENTRY NO</th>
			<th>ORDER DATE</th>
			<th>SUB-CATEGORY(1)</th>
			<th>SUB-CATEGORY(2)</th>
			<th>QUANTITY</th>
			<th>QUANTITY ISSUED</th>
			<th>QUANTITY LEFT</th>
			
		</t>
		<?php
		   
            $result=mysqli_query($conn1,$select);
		    $result2=mysqli_query($conn,$select1);
		    while($row=mysqli_fetch_assoc($result2) and $row1=mysqli_fetch_assoc($result)){
		    ?>	
		       <tr>
		       	<td><?php echo $row['ENo']; ?></td>
		       	<td><?php echo $row['ORDERDATE']; ?></td>
		       	<td><?php echo $row1['STOCK1']; ?></td>
		       	<td><?php echo $row1['STOCK2']; ?></td>
		       	<td><?php echo $row1['QUANTITY']; ?></td>
		       	<td><?php echo $row['ISSUED']; ?></td>
		       	<td><?php echo $row1['QUANTITY']-$row['ISSUED']; ?></td>
                
		       	
		       </tr>
		    
		<?php 

		
		
		   }?>
		 </table> </div>
		 
		</body>
		</html>