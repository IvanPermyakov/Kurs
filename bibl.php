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
<?php 
$sql = mysqli_connect('localhost', 'root', '', 'register')
or die  (mysqli_connect_error());
mysqli_set_charset($sql, "utf-8");

$query = "SELECT * FROM posts";
$result = mysqli_query($sql, $query);
if (!$result) die ("Сбой при доступе к БД: ". mysqli_error($sql));
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <h1 class="h444-wrap">Библиотека</h1>
          </div>
        </div>
      </div>

<div class="container mt-5">
	<div class="d-flex flex-wrap">
		<div class="row">
			
					<?php foreach ($posts as $post) { ?>
						<div class="col-md-4">
							<h2><?=$post['title'];?></h2>
							<img src = "img/<?=$post['image'];?>" class="img-thumbnail mb-3">
							<p><?=$post['text'];?> </p>
						</div>
										
					<?php } ?>
		</div>
	</div>
</div>






<?php require "blocks/footer.php" ?>
</body>
</html>