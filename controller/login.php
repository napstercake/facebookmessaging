<?php

require('../config/dbconnection.php');

session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

	if (empty($_POST['user']) || empty($_POST['pwd'])) {
		echo "Correo o contrasena incorrectos.";

	} else {

		$username=$_POST['user'];
		$password=$_POST['pwd'];

		$username = stripslashes($username);
		$password = stripslashes($password);

		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from users where password='$password' AND username='$username'", $CONNECTION);
		$rows = mysql_num_rows($query);

		if ($rows == 1) {
			
			$_SESSION['username']=$username;
			header("location: ../main.php");

		} else {
			echo  "Correo o contrasena incorrectos.";
		}
		 
		mysql_close($CONNECTION); // Closing Connection
	}
}
?>