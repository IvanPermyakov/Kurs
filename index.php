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
	<div class="d-flex flex-wrap">
	<div class="row">
			<?php $prices = [ 
				"price1" => ["text" => "Анимационный ролик",
					"img" => "7.jpg",
					"text2" => "Концептуально, особенность  анимационного ролика в том что он  должен эффективно передать заданный  смысл за короткий промежуток времени. Технически, он может быть выполнен в комбинации с кинематографической работой. По продолжительности анимационные ролики как правило короче других мультипликационных работ.</h1>",
					],
					
				"price2" => ["text" => "Корпоративный мультфильм",
					"img" => "11.jpg",
					"text2" => "Мультфильмы для корпоративных заказчиков отличаются особенным подходом в реализации фирменного стиля в жанре мультипликации. Косвенно транслируя ценности компании заказчика, можно добиться значительного эффекта. Работу над корпоративным мультфильмом, мы начинаем с изучения целевой аудитории нашего заказчика.",
					],
									
				"price3" => ["text" => "Мультфильмы на заказ",
					"img" => "10.jpg",
					"text2" => "В разработке мультфильма на заказ, большое внимание уделяется поиску творческой идеи и написанию увлекательного сценария. Наша задача, чтобы мультфильм был как поучительный так и смешной. На этапе анимационного производства, мы уделяем внимание деталям, которые подчеркивают мультипликацию профессионального уровня.",
					],
				"price4" => ["text" => "Рекламные мультфильмы",
					"img" => "12.jpg",
					"text2" => "В разработке рекламного мультфильма мы делаем большой упор на осуществление общей маркетинговой и брендинговой стратегии. Особое внимание уделяется анализу ниши и нашего клиента. Наша задача – максимально эффективно предать ценности Вашего торгового предложения.", 
					],
				"price5" => ["text" => "3D анимация",
					"img" => "14.jpg",
					"text2" => "Специалисты нашей студии выполняют профессиональное создание 3D анимации для видеороликов, визуализацию объекта. Это актуально для любых роликов и мини-фильмов. Например, 3D персонажи и продуманный сюжет прекрасно привлекают внимание зрителей ", 
					],	
				"price6" => ["text" => "2D анимация",
					"img" => "13.jpg",
					"text2" => "Наши мастера при создании 2D анимации и видеороликов смогут выполнить любые задачи и цели. Рисование персонажей, объектов и образов происходит в разнообразных направлениях и стилях. Наши специалисты ответственно выполнят все этапы работ – создание сюжета, раскадровка, рисование, редактирование.", 
					],
					];
					foreach ($prices as $price) { ?>
						<div class="card mb-4 shadow-sm">
							<div class="card-header">
								<h4 class="my-0 font-weight-normal"><?=$price['text'];?></h4>
							</div>
							<div class="card-body">
								<img src = "img/<?=$price['img'];?>" class="img-thumbnail mb-3">
								<h5 class="card-title pricing-card-title mb-3"><?=$price['text2'];?></h5>
								<a href ="about.php"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Заказать</button></a>
							</div>
						</div>
										
					<?php } ?>
	</div>

	</div>
</div>

<div class="h2-wrap">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <h2 class="standard-block"></h2>
          </div>
        </div>
      </div>
    </div>
<div class="container-fluid " width = 1320px height = 640px>
      <div class="row articles">
        <div class="col-md-2 article-img">
         <a href ="bibl.php"><img src="img/25.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/24.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/23.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/22.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
         <a href ="bibl.php"> <img src="img/21.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/20.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
      </div>
      <div class="row articles">
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/19.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/18.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/9.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/17.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/15.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
        <div class="col-md-2 article-img">
          <a href ="bibl.php"><img src="img/16.jpg" alt=""></a>
          <div class="article-overlay"></div>
        </div>
      </div>
    </div>
	
	
<div class="row ">
<section id="introduction" class="division white">
	<div class="section group  page_wrapper">
		<div class="col span_6_of_12">
			<div id="post-20" class="post_box top">
				<div class="post_content">
<p><span class="heading-move1"><span class="heading-move-cartoon"><span class="c0">Д</span><span class="c1">в</span><span class="c2">и</span><span class="c3">г</span><span class="c4">а</span><span class="c5">й</span><span class="c6">т</span><span class="c7">е</span><span class="c8">с</span><span class="c9">ь</span></span> с нами, и Вы получите:</span><br>
Профессионально созданный мультфильм может существенно эффективнее вызывать нужные эмоции, нежели чем кинематографический аналог. Как результат мультфильм может лучше передать смысл сюжета, лучше запомниться, и лучше призвать зрителя к действию.</p>
<p><span class="question">Не знаете к кому обратиться и у кого лучше разместить заказ? Используйте следующие критерии отбора, и Вам легче будет подобрать правильного подрядчика:</span></p>
<ul>
<li><i class="fa fa-check"></i>Из всего комплекса работ по созданию мультфильма, разработка сценария является самой фундаментальной. Увлекательный сценарий может существенно снизить значимость ляпов в исполнении;</li>
<li><i class="fa fa-check"></i>Мультипликация и юмор являются чуть ли не синонимами. Юмор это добрый и сильный инструмент в общении с людьми. Ваш мультфильм обязательно должен иметь элемент юмора;</li>
<li><i class="fa fa-check"></i>У каждой компании есть свой собственный стиль, стиль общения, визуальный стиль, имиджевый стиль. Соответственно мультипликационная работа должна быть выполнена в рамках Вашего фирменного стиля;</li>
<li><i class="fa fa-check"></i>Профессиональный художник-аниматор отличается от дилетанта вниманием к деталям и последовательностью в исполнении проекта. Работа профессионала выделяется гармонией визуальной, звуковой, смысловой.</li>
</ul>
<p>Студия “Multyasha” – это профессиональные мультипликаторы. Заказывая создание мультфильма под ключ у нас, Вы сделаете своей аудитории настоящий подарок.</p>
				</div>
			</div>
		</div>
		<div class="col span_6_of_12">
			<div class="query_box">
				<div class="post_content">
<p><span class="heading-move2">Наш творческий подход к мультипликации</span><br>
В работе, мы выделяем 3 основополагающих качества на которых создаётся мультфильм-шедевр.</p>
<p><b>Работа над сценарием</b> – это упорный процесс поиска. Наша задача получить сценарий, который будет увлекательным и поучительным, или иными словами — призывающим к действию. Сценаристы “Движения” – это творческие люди владеющие техникой создания захватывающих сцен.</p>
<p><b>Персонажи</b> мультипликационной картины являются ключевыми проводниками заданной идеи. Работа над созданием персонажей – это тоже творческий процесс поиска. Результатом поиска должен получиться герой, которого полюбит аудитория и будет разделять его внутренние ценности.</p>
<p><b>Чувство красоты</b> и гармонии неотъемлемые качества талантливого художника-аниматора. Зритель должен наслаждаться визуальной красотой и гармонией мультфильма. Умение сделать художественную часть качественно, с проработанными деталями, приходит только с многолетним опытом, которого у нас свыше 20 лет.</p>
<p>Наша команда оказывает комплексные услуги по созданию мультфильмов на заказ. Мы сделаем полноценный мультипликационный ролик для любых бизнес-задач или классический мультик для детей.</p>
<p>Звоните на номер <a href="tel:+79629616769">+7-919-475-05-85</a> и мы ответим на все ваши вопросы. Сразу отправить задание можно на адрес <a href="mailto:infyasha.ru">info@multyasha.ru</a> или заполните заявку.</p>
				</div>
			</div>
		</div>
	</div>

</section>
	</div>









<?php require "blocks/footer.php" ?>
</body>
</html>