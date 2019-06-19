<?php
$username=filter_input(input_post,'userid');
$password =filter_input(input_post,'password');
if(!empty($username)){
	if(!empty($password)){
		$host="localhost";
		$user="root";
		$pass="";
		$dbname="login"
		
		
		$conn = new mysqli($host,$user,$pass,$dbname); 
		if(mysqli_connect_error()){
			die('connect Error ('.mysqli_connect_errno().')'
			.msqli_connect_error());
		}
		else{
			$sql = "insert into login (username,password) values('$username','$password')";
		}
		$conn->close()
	}
	else{
		echo "passswod should not be empty"
		die();
	}
else{
		echo "useename should not be empty"
		die();
}

?>