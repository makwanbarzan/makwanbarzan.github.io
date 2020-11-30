<?php
	if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailForm = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "contact@makwanbk.com";
        $headers = "Form: ".$mailForm;

        mail($mailTo, $subject);
        header("Location: index.html?mailsend");
    }
?>