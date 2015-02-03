<?php

require('config/dbconnection.php');

$user_one = $_GET['user_session'];
$user_two = $_GET['user_two'];

$conversation_id;

if ($user_one != $user_two) {

	/* Check user to responder */

	$query_user_selected = "select * from users where id='$user_two'";
	$result = mysqli_query($db, $query_user_selected);

	while ($row = $result->fetch_assoc()) {

		$user_selected = $row["username"];
    	$id_selected = $row["id"];
		
	}

	/* Insert conversation */
	/* If there is a new conversation */

	$q = mysqli_query($db," SELECT id FROM conversation WHERE (user_one='$user_one' and user_two='$user_two') or (user_one='$user_two' and user_two='$user_one') ") or die(mysql_error());
	$time=time();
	$ip=$_SERVER['REMOTE_ADDR'];

	$num_rows = $q->num_rows;

	// If there is no previous conversation
	// If is starting conversation
	if($num_rows==0) { 
		
		$query = mysqli_query($db,"INSERT INTO conversation (user_one,user_two,ip,time) VALUES ('$user_one','$user_two','$ip','$time')") or die(mysql_error());
		$q = mysqli_query($db,"SELECT id FROM conversation WHERE user_one='$user_one' ORDER BY id DESC limit 1");
		$v = mysqli_fetch_array($q,MYSQLI_ASSOC);
		//return $v['id'];
		$conversation_id = $v['id'];

	} else {
		$v = mysqli_fetch_array($q,MYSQLI_ASSOC);
		// return $v['id'];
		$conversation_id = $v['id'];
	}

	
}

//////////////////////////////////////////



	


?>