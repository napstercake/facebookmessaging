<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('controller/session.php');
require('config/dbconnection.php');

$user_one = $id_session;
//echo "string: ".$user_one;

	$sqlStatement = "SELECT u.id AS uid, c.id AS cid, u.username, u.email
		FROM conversation c, users u
		WHERE 
			CASE 
				WHEN c.user_one = '$user_one'
		 		THEN c.user_two = u.id
		 		WHEN c.user_two = '$user_one'
		 		THEN c.user_one= u.id
		 	END 
	 	AND (
	 		c.user_one ='$user_one'
	 		OR c.user_two ='$user_one'
	 	)
	 	Order by c.id DESC Limit 20";

	$query = mysqli_query($db, $sqlStatement) or die(mysql_error());

	$num_rows = $query->num_rows;
	echo "NUM ROWS: ".$num_rows."<br>";

	while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
	
		$c_id =$row['cid'];
		$user_id =$row['uid'];
		$username =$row['username'];
		$email =$row['email'];
		
		$cquery= mysqli_query($db, "SELECT R.id, R.time, R.reply 
								FROM conversation_reply R 
								WHERE R.c_id_fk='$c_id' 
								ORDER BY R.id DESC LIMIT 1") 
								or die(mysql_error());

		$crow=mysqli_fetch_array($cquery,MYSQLI_ASSOC);
		
		$cr_id=$crow['id'];
		$reply=$crow['reply'];
		$time=$crow['time'];

		echo "ID: ".$cr_id."<br>";
		echo "REPLY: ".$reply."<br>";
		echo "TIME: ".$time."<br>";
		echo "==============<br><br><br>";



		//HTML Output. 

	}


/*

SQL Query
=========

SELECT U.id, C.id, U.username, U.email 
FROM users U, conversation C, conversation_reply R

WHERE 
CASE

WHEN C.user_one = '1'
THEN C.user_two = U.id
WHEN C.user_two = '1'
THEN C.user_one= U.id
END

AND 
C.id = R.c_id_fk
AND
(C.user_one ='1' OR C.user_two ='1') ORDER BY C.id DESC


*/


/*
Displaying username and conversations results.
*/
