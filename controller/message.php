<?php

require('../config/dbconnection.php');

	$reply=mysqli_real_escape_string($db,$_POST['reply']);
	$cid=mysqli_real_escape_string($db,$_POST['cid']);
	$uid=mysqli_real_escape_string($db,$_POST['idsession']);
	$time=time();
	$ip=$_SERVER['REMOTE_ADDR'];

	$q= mysqli_query($db,"INSERT INTO conversation_reply (user_id_fk,reply,ip,time,c_id_fk) VALUES ('$uid','$reply','$ip','$time','$cid')") 
	or die(mysqli_error());