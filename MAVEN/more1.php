<?php 
   $con1=mysqli_connect('localhost','root','','expert2');
   $select=mysqli_query($con1,"SELECT * from pcm1");
?>

<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>More Expert details in PCM career</title>
</head>
<style>
	body{
		font-family:Arial,Helvitica,sans-serif;
		background-image:url('expertback.png');
		color:white;
	}
	 nav{
    width:auto;
    background-color:yellow;
    color:black;
    padding:7px 7px;
    box-shadow:0px 5px 7px 5px grey;
    text-align:left;
    opacity:0.8;
  }
  a{
    margin:7px;
    text-decoration:none;
    position:relative;
    transition: font-size 0.3s;
  }
  a:hover{
    text-decoration:none;
    color:red;
    transition-timing-function: ease-in;
    transition-property: font-size;
    font-size:25px;


  }

	.content{
		width:650px;
		max-width:650px;
        opacity:0.8;
        text-align:center;
        
        top:190px;
        
        float:left;
	}
	table{
		border-collapse:separate;
		border-spacing:30px;
		
	}
	td{
		height:60px;
		box-shadow:0px 0px 3px 2px white;
		transition:height 0.2s;


	}
	td:hover{
		background-color:blue;
		color:white;
		box-shadow:0px 0px 5px 2px red;
		cursor:grabbing;
		height:100px;
		transition-timing-function:ease-in;


	}
	th{
		background-image:linear-gradient(to right,cyan,white);
		color:black;
	}
	button{
		background-color:red;
		color:white;
		width:150px;
		height:40px;
		border:0px;
		outline:none;
		border-radius:7px;
	}
	button:hover{
		background-color:blue;
		color:white;
		cursor:grabbing;
	}
	</style>
<body>
	<nav>
      <a href="consult1st.html" style="margin-left:250px;"><strong><i>MAVEN</i></strong></a>
      <a href="about us.html" style="margin-left:250px;">About Us</a>
      <a href="contact.html" style="margin-left:250px;">Contact Us</a>

      <a href="logout.php" style="float:right;margin-right:17px;top:-5px;font-weight:bold;">LOG-OUT</a>
    </nav><br>
    <img src="maven2.png" width="90px" height="90px">
    <p style="font-family:Lucida Console,Monospace;font-size:15px;color:white;">INCUBATING BRAINS</p>
    <button onclick="window.location.href='StudThank.html'" style="float:right;right:10px;">FINISH</button>
    <p style="left:520px;position:absolute;top:60px;font-size:25px;font-weight:bold;">Email them and get connected through MAVEN</p>
    
	<div class="content">
		<table align="center" border="0px" style="width:1000px;">
			
			
			<?php 
			  while($row=mysqli_fetch_assoc($select)){
			  	?>
			  	<tr>
			  	<td><?php echo $row['FullName'];?></td>
			  	<td><?php echo $row['Email'];?></td>
			  	<td><?php echo $row['Skills'];?></td>
			  	<td><?php echo $row['Exp'];?></td>
			  	<td><?php echo $row['Profession'];?></td>
			  	<td><?php echo $row['Status'];?></td>

			  </tr>
			<?php 
		}?>
	</table></div>


</body>
</html>