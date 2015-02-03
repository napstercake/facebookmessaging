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


<h1>Chat</h1>
<p>
	<span class="inviter"><?php echo $user_selected; ?></span>
</p>
<p>
	<textarea id="conversationPanel"></textarea>
<br>
	<form action="post">

		<input id="txtMessage" name="reply" class="text" type="text" placeholder="Write your message here!"/>
		<input id="btnSend" type="submit" value="submit" name="submit">

		<!-- <a href="#" id="btnSend">Send</a> -->

		<input id="txtUserSession" name="idsession" type="hidden" value="<?php echo $id_session; ?>">
		<input id="txtUserTwo" type="hidden" value="<?php echo $id_selected ?>">
		<input id="txtConversationId" name="cid" type="hidden" value="<?php echo $conversation_id ?>">
		
	</form>
	
</p>

<!-- Scripts -->

<script type="text/javascript" src="js/functions.js"></script>
</BODY>

</HTML>