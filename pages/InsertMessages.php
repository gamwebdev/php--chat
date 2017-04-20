<?php 
	session_start();

	include "classes.php";
	if (isset($_POST['ChatText'])) {
		$chat = new chat();
		$chat->getChatUserId($_Session['UserId']);
		$chat->getChatText($_POST['ChatText']);
		$chat->InsertChatMessage();
	}
 ?>