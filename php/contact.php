<?php 

	if (isset($_POST['name'])) {$name = $_POST['name'];}
	if (isset($_POST['email'])) {$mail = $_POST['email'];}
	if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
	if (isset($_POST['message'])) {$message = $_POST['message'];}

	$name = stripslashes($name);
	$name = htmlspecialchars($name);

	$mail = stripslashes($mail);
	$mail = htmlspecialchars($mail);

	$phone = stripslashes($phone);
	$phone = htmlspecialchars($phone);

	$message = stripslashes($message);
	$message = htmlspecialchars($message);

	$mail_to = 'met.izdel55@mail.ru'; // ВАШ mail

	$subject = 'Новое сообщение';
	
	$headers = 'From: met-izdel.by <met-izdel.by>' . "\r\n";
	
	$text .= "Имя: ".$name."\nПочта: ".$mail."\nТелефон: ".$phone."\nСообщение: ".$message;
	
	if (mail($mail_to, $subject, $text, $headers)) {
		echo "Ваше сообщение принято. Спасибо!";
	}

?>