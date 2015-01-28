<?php
require('config/dbconnection.php');
session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['username'];

// SQL Query To Fetch Complete Information Of User
$sel_user = "select * from users where username='$user_check'";

$query = mysqli_query($db,$sel_user);

while ($row = $query->fetch_assoc()) {
    $login_session = $row["username"];
    $id_session = $row["id"];
}

//$row = mysql_fetch_assoc($ses_sql);
//$login_session =$row['username'];
//$id_session = $row['id'];

if(!isset($login_session)) {
	header('Location: index.php'); // Redirecting To Home Page
}
?>