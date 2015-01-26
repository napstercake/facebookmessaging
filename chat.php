<?php
include('controller/session.php');
include('controller/select.php');
?>
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
</div>


<h1>Invite chat</h1>
<p>
	<span class="inviter"><?php echo $login_selected; ?></span>
</p>
<p>
	<textarea id="conversationPanel">


	
	</textarea>
<br>
	<input class="text" type="text" placeholder="Write your message here!"/>
	<a href="#">Send</a>
</p>

<!-- Scripts -->

<script type="text/javascript" src="js/functions.js"></script>
</BODY>

</HTML>