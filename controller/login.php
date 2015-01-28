<?php
require('../config/dbconnection.php');

session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

	$username = mysqli_real_escape_string($db,$_POST['user']);
	$password = mysqli_real_escape_string($db,$_POST['pwd']);


	if ( $username == "" || $password == "" ) {
		echo "Correo o contrasena incorrectos.";

	} else {

		$sel_user = "select * from users where password='$password' AND username='$username'";
		
		// SQL query to fetch information of registerd users and finds user match.
		$query = mysqli_query($db,$sel_user);
		
		$check_user = mysqli_num_rows($query);

		if ( $check_user > 0 ) {
			
			$_SESSION['username'] = $username;
			header('location: ../main.php');
			
		}
		else {
			echo  "Correo o contrasena incorrectos.";
		}

	}
}
?>