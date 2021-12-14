<!doctype html>
<html lang="ru">
<head>
    <title>Multyasha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel = "stylesheet" href="cs/style.css">
	<link rel = "stylesheet" href="css/style.css">
</head>
<body>
<?php require "blocks/header.php" ?>
		
	<div class="container mt-5">
		<h3>Авторизация</h3>
		<form action ="forms/inp.php" method="post">
			<input type = "email" class="form-control mt-2" name="email" id="email" placeholder="Введите Email" >
			<input type = "password" class="form-control mt-2" name="pass" id="pass" placeholder="Введите пароль" >
			<button type="submit" name="send" class="btn btn-success mt-2" >Войти</button>
		</form>
	</div>
	
	
	
	
<?php require "blocks/footer.php" ?>
  
</body>
</html>