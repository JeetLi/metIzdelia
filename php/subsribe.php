<?php 

	if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

	$phone = stripslashes($phone);
	$phone = htmlspecialchars($phone);

	$mail_to = 'met.izdel55@email.ru'; // ВАШ mail

	$subject = 'Новый звонок';
	
	$headers = 'From: MET IZDEL BY <met.izdel55@email.ru>' . "\r\n";
	
	$text .= "Телефон: ".$phone;
	
	if (mail($mail_to, $subject, $text, $headers)) {
		echo "Отправлено. Ждите звонка специалиста!";
	}

?>