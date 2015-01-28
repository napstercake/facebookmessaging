<?php

require('config/dbconnection.php');

$user_conversation_to = $_GET['id'];

$query_user_selected = "select * from users where id='$user_conversation_to'";
$result = mysqli_query($db, $query_user_selected);


	while ($row = $result->fetch_assoc()) {

		$login_selected = $row["username"];
    	$id_selected = $row["id"];
		
	}
	


?>