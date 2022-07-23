<?php 
	session_start();
	if(isset($_COOKIE['status'])){
		
				
		
?>


<html>
<head>
	<title>User Panel</title>
</head>
<body>

   <html>
<head>
	<title>Home</title>
</head>
<body align="center ">
	<a href="Profile.php"> Profile </a> <br/>
	<a href="media.php"> Media </a><br>
	
	<a href="balance.php">Balance</a><br>
	<a href="market.php">Market Place</a><br>
	
	<a href="userlogout.php"> logout </a>
	<br/>
	<a href="Delete.php ">Delete Profile </a> <br/>

	
</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	}
?>

