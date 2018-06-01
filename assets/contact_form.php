<?php

// Your email address
$to = 'artem@crazy.studio';

$subject = $_POST['subject'];;

// Don't edit below unless you know what you're doing
if($to) {
	$name = $_POST['form_name'];
	$email = $_POST['form_email'];
	
	$fields = array(
		0 => array(
			'text' => 'Имя',
			'val' => $_POST['name']
		),
		1 => array(
			'text' => 'Email',
			'val' => $_POST['email']
		),
		2 => array(
			'text' => 'Сообщение',
			'val' => $_POST['message']
		)
	);
	
	$message = "";
	
	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
	}
	
	$headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
	$headers .= "From: \"" . $name . "\" \r\n";
	$headers .= "Reply-To: " .  $email . "\r\n";
	
	
	mail($to, $subject, $message, $headers);
	
	if ($message){
	echo 'sent';
	}else{
	echo 'failed';
	}
} else {
	echo "Don't access this file directly";	
}
?>