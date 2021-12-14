<!doctype html>
<html lang="ru">
<head>
    <title>Multyasha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel = "stylesheet" href="cs/style.css">
	<link rel = "stylesheet" href="css/style.css">
	<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
	<?php require "blocks/header.php" ?>
	<div class="container mt-5">
		<h3>Отправьте заявку</h3>
		<form action ="forms/check.php" method="post">
		
			<select name="form_select" class="form-control mt-2" >
				<option value="3d анимация">3d анимация</option>
				<option value="2d анимация">2d анимация</option>
				<option value="Анимационный ролик">Анимационный ролик</option>
				<option value="Корпоративный мультфильм">Корпоративный мультфильм</option>
				<option value="Мультфильмы на заказ">Мультфильмы на заказ</option>
				<option value="Рекламные мультфильмы">Рекламные мультфильмы</option>
			</select>
			
			<input type = "email" name="email" placeholder="Введите Email" class="form-control mt-2">
			<textarea name="message" class="form-control mt-2" placeholder="Введите примерное описание мультфильма"></textarea>
			<button type="submit" name="send" class="btn btn-success mt-2" >Отправить</button>
		</form>
	</div>
	
	<?php require "blocks/footer.php" ?>
</body>
</html>