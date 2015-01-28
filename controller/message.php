<?php

require("../config/dbconnection.php");

$user_one = $_GET['user_session'];
$user_two = $_GET['user_two'];


if ($user_one != $user_two) {
	
	$q = mysqli_query("SELECT id FROM conversation WHERE (user_one='$user_one' and user_two='$user_two') or (user_one='$user_two' and user_two='$user_one') ") or die(mysql_error());
	$time=time();
	$ip=$_SERVER['REMOTE_ADDR'];

	// If there is no previous conversation
	// If is starting conversation
	if(mysql_num_rows($q)==0) { 
		
		$query = mysqli_query("INSERT INTO conversation (user_one,user_two,ip,time) VALUES ('$user_one','$user_two','$ip','$time')") or die(mysql_error());
		$q = mysqli_query("SELECT id FROM conversation WHERE user_one='$user_one' ORDER BY id DESC limit 1");
		$v = mysql_fetch_array($q,MYSQLI_ASSOC);
		return $v['id'];

	} else {
		$v = mysqli_fetch_array($q,MYSQLI_ASSOC);
		return $v['id'];
	}
}