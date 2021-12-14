<?php 
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
	$error = '';
	if(trim($email)==''){
		$error='Введите Email';
		exit;
	}
	else if(trim($name)==''){
		$error = 'Введите ваше имя';
		exit;
	}
	else if(trim($pass)==''){
		$error = 'Введите пароль';
		exit;
	}

	
    if(strlen($pass)< 8)
    {
        $error = "Пароль должен быть не менее 8 символов";
    }
    else
    {
        $strong = 0;
        if(!preg_match("/([0-9]+)/", $pass))
        {
            $error = "Пароль должен содержать минимум 1 цифру";  
        }
		if(preg_match("/([а-я]+)/", $pass))
        {
            $error = "Пароль не может содержать кириллицу";  
        }
        if(!preg_match("/([a-z]+)/", $pass))
        {
           $error = "Пароль должен содержать минимум 1 строчный латинский символ";
        }
        if(!preg_match("/([A-Z]+)/", $pass))
        {
            $error = "Пароль должен содержать минимум 1 заглавный латинский символ";
        }
		 if(!preg_match("/([*-+.,;]+)/", $pass))
        {
            $error = "Пароль должен содержать * - + . , ;";
        }
}
	
	
	if($error != ''){
		echo $error;
		exit;
	}
	
	
	
	
	
	
	$mysql = new mysqli('localhost', 'root', '', 'register');
	$mysql->query("INSERT INTO `users` (`email`, `name`, `pass`) VALUES('$email', '$name', '$pass')");

	$mysql->close();
	header('Location: /');
?>
  
