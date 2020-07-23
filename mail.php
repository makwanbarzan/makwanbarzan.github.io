<?php
	$to = "my-email@goes-here.com";
	$subject = "Email from my website";
	$body = "the user typed in: " . $_POST['myEmail'];
	mail($to, $subject, $body);
?>