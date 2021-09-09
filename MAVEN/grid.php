<?php
  $con=mysqli_connect('localhost:3306','root','','redmi');
  
  $result=mysqli_query($con,"SELECT * from note");
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
			<th colspan="3"><h3>FIRST PAGE VIEW</h3></th>
		</tr>
		<t>
			<td>SESSION</th>
			<td>COLLEGE</th>
			<td>STOCK NAME</th>
		</t>
		<?php
		    while($row=mysqli_fetch_assoc($result)){
		    ?>	
		       <tr>
		       	<td><?php echo $row['SESSION']; ?></td>
		       	<td><?php echo $row['COLLEGE']; ?></td>
		       	<td><?php echo $row['STOCK']; ?></td>
		       </tr>
		<?php 
		   }?>
		 </table> </div>
</body>
</html>

