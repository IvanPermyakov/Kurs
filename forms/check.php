<?php 
	//print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];
	$error = '';
	if(trim($email)=='')
		$error='Введите Email';
	else if(trim($message)=='')
		$error = 'Введите сообщение';
	else if(strlen($message)<10)
		$error = 'Сообщение должно быть больше 10 символов';
	
	if($error != ''){
		echo $error;
		exit;
	}
	
	$subject="=?utf-8?B?".base64_encode("Сообщение")."?=";
	$headers ="From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";
	
	mail('1010ivan2001@gmail.com', $subject, $message, $headers);
	
	header('Location: about.php')
	
	
?>
  
