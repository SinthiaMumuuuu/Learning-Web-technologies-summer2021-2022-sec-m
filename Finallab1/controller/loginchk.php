<?php 

require_once "../model/userModel.php";

$username = $_POST['name'];
$password = $_POST['password'];

if($username == null || $password == null){
	echo "null Account Number/Password...";
}else{

	$status = login($username, $password);

		if($status){
			
			setcookie('status', 'true', time()+3600, '/');
			header('location: ../view/userP.php');
		}else{
			echo "invalid user";
		}
	
	
}

?>