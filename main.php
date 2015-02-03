<?php
ob_start();
require('controller/session.php');?>
<!DOCTYPE html>
<HTML>

<HEAD>
	<TITLE>FB MESSAGING</TITLE>

	<script src="js/jquery-1.11.2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/css.css">

</HEAD>

<BODY>

<div class="usersession">
	<?php echo $login_session; ?> <b id="logout"><a href="logout.php"> [x]</a></b>
	<input type="hidden" id="$txtUserSession" value="<?php echo $id_session; ?>">	
</div>


<h1>Chatroom</h1>

<p>
	<ul>
	<?php
		$all_user = "select * from users";
		$result = mysqli_query($db, $all_user);
		
		while ($row = $result->fetch_assoc()) {
	?>
			<li>
				<a href="chat.php?user_two=<?php echo $row['id']; ?>&user_session=<?php echo $id_session; ?>">
					<?php echo $row["username"]; ?> 
					<img src="images/chat.png"/>
				</a>
			</li>
	<?php
		}
	?>
	</ul>	

</p>
<hr/>
<p>
	<a href="myconversations.php"><img src="images/chat.png">All conversations </a>
</p>

<!-- Scripts -->

<script type="text/javascript" src="js/functions.js"></script>
</BODY>

</HTML>