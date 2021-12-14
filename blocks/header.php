<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal"><a href="index.php"><img src="img/logo.png"> </a></h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="index.php">Главная</a>
    <a class="p-2 text-dark" href="about.php">Заказать</a>
    <a class="p-2 text-dark" href="bibl.php">Библиотека</a>
	<a class="p-2 text-dark" href="contact.php">Контакты</a>
  </nav>
  
  <?php
	if($_COOKIE['user'] == ''):
   ?>
  <a class="btn btn-outline-primary" href="signin.php">Войти</a>
  <a class="btn btn-outline-primary ml-2" href="signup.php">Регистрация</a> 
  
  
  <?php else: ?>
	

	<a href="forms/exit.php">Выход</a>
   
  
  <?php endif; ?>
</div>
