<?php

require('config/dbconnection.php');


session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['username'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from users where username='$user_check'", $CONNECTION);

while ($row = mysql_fetch_assoc($ses_sql)) {
    $login_session = $row["username"];
    $id_session = $row["id"];
}

//$row = mysql_fetch_assoc($ses_sql);
//$login_session =$row['username'];
//$id_session = $row['id'];

if(!isset($login_session)) {
	mysql_close($CONNECTION); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
}
?>