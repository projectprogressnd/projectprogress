<?php
if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailto = "office@noyobdunyo.tk";
	$headers = "From: ".$mailFrom;
	$txt = "Your message and information is received successfully".$name.".\n\n".$message;
        
        mail($mailto, $subject, $txt, $headers);
        header("Location: https://projectprogress.uz/contacts.html?mailsend");
}
