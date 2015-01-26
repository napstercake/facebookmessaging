<?php

require('dbparameters.php');

// Establishing Connection with Server
$CONNECTION = mysql_connect($SERVER, $USER, $PASS);

// Selecting Database
$db = mysql_select_db($DBNAME, $CONNECTION);