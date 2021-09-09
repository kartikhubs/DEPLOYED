<?php
  $con=mysqli_connect('localhost:3306','root','','kbc');
  
  $result=mysqli_query($con,"SELECT * from sony");
?>

 
<!DOCTYPE html>
<html>
<head>
	<title>SHOWING GRID VIEW</title>
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
</style>

<body>
	<div class="content">
	<table align="center" border="1px" style="width:600px;border-color:red;">
		<tr>
			<th colspan="6"><h3>THIRD PAGE VIEW</h3></th>
		</tr>
		<t>
			<th>SERIAL NO</th>
			<th>SESSION</th>
			<th>COLLEGE</th>
			<th>SUB-CATEGORY(1)</th>
			<th>SUB-CATEGORY(2)</th>
			<th>QUANTITY</th>
			
		</t>
		<?php
		    while($row=mysqli_fetch_assoc($result)){
		    ?>	
		       <tr>
		       	<td><?php echo $row['SNo']; ?></td>
		       	<td><?php echo $row['SESSION']; ?></td>
		       	<td><?php echo $row['COLLEGE']; ?></td>
		       	<td><?php echo $row['STOCK1']; ?></td>
		       	<td><?php echo $row['STOCK2']; ?></td>
		       	<td><?php echo $row['QUANTITY']; ?></td>
		       	
		       </tr>
		<?php 
		   }?>
		 </table> </div>
</body>
</html>

