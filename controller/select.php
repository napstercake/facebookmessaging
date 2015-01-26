<?php

require('config/dbconnection.php');

$user_conversation_to=$_GET['id'];

$ses_sql=mysql_query("select * from users where id='$user_conversation_to'", $CONNECTION);

while ($row = mysql_fetch_assoc($ses_sql)) {
    $login_selected = $row["username"];
    $id_selected = $row["id"];
}

?>