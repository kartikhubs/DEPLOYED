<?php 
setcookie("username","MAYANK");?>
<html>
<body>
	<?php 
	  if(!isset($_COOKIE["username"])){

	  	echo "COOKIE IS NOT SET";
	  }
	  else{
	  	echo "NAME IS ".$_COOKIE["username"];
	  }?>
	</body>
	</html>