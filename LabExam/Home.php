<?php 
	session_start();
	if(isset($_COOKIE['status'])){
?>

<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Bob!</h1>
		<br/>
		<br/>

		<a href="">Profile</a>
		<br/>
		<a href="">Change Passwords</a>
		<br/>
		<a href="">View Users</a> 
		<br/>
		<a href="">Logout</a>
</body>
</html>


<?php 
	}else{
		echo "invalid request";
	}  
?>