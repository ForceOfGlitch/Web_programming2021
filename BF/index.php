<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BESTFITNESS</title>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<div class="nav">
				<img src="img/logo.png" alt="BESTFITNESS" class="logo">
				<ul class ="menu">
					<li>
						<a href="#">
							Главная
						</a>
					</li>
					<li>
						<a href="#tab_01">
							Программы
						</a>
					</li>
					<li>
						<a href="#map">
							Наши партнёры
						</a>
					</li>
					<li>
						<a href="#about">
							О нас
						</a>
					</li>
				</ul>
				<button class="menu_open">
					<img src="img/menu.svg">
				</button>
				<div class="butt1">
					<a href="registration.php" class="btn_entry">Войти</a>
				</div>
			</div>
		</div>
	</header>

	<section id="about" class="about">
		<div class="container">
			<div class="offer">
				<h1>Бесплатные программы тренировок</h1>
				<p class="text">В поисках эффективной тренировочной программы? Мы готовы вам помочь! Подберите себе тренировочный план для нужной цели - используйте фильтры, отзывы к программам и рейтинги. У каждой программы есть описание, в котором объясняются её особенности. Всё возможно вместе с BESTFITNESS!</p>
				<div class="gallery">
					<div class="gallery_item">
						<img src="img/slid1.png">
					</div>
					<div class="gallery_item">
						<img src="img/slid2.png">
					</div>
					<div class="gallery_item">
						<img src="img/slid3.png">
					</div>
				
				</div>
			</div>
		</div>
	</section>

	<section id="workouts" class="workouts">
		<div class="container row">
			<div class="content">
				<div class="filter">
					<select class="select_1">
						<option value="" hidden disabled selected>Для кого</option>
						<option>Для мужчин</option>
						<option>Для женщин</option>
						<option>Для всех</option>
					</select>
					<select class="select_2">
						<option value="" hidden disabled selected>Цель</option>
						<option>Прокачка мышц</option>
						<option>Похудение</option>
						<option>Укрепление</option>
					</select>
					<select class="select_3">
						<option value="" hidden disabled selected>Место тренировок</option>
						<option>Зал</option>
						<option>Дом</option>
					</select>
					<button class="select_btn">Подобрать</button>
				</div>

				<div class="tabs_body">
					<ul id="tab_01" class="workouts_list">
						<li class="workout_item">
							<a href="#">
								<img src="img/workout1.jpg" class="workout_img">
								<p class="name">Пампинг тренировка</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
						<li class="workout_item">
							<a href="#">
								<img src="img/workout2.jpg" class="workout1">
								<p class="name">Для набора массы для девушек</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
						<li class="workout_item">
							<a href="#">
								<img src="img/workout3.jpg" class="workout1">
								<p class="name">Тренировка с гантелями</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
						<li class="workout_item">
							<a href="#">
								<img src="img/workout4.jpg" class="workout1">
								<p class="name">Тренировка груди</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
						<li class="workout_item">
							<a href="#">
								<img src="img/workout5.jpg" class="workout1">
								<p class="name">Тренировка спины</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
						<li class="workout_item">
							<a href="#">
								<img src="img/workout6.jpg" class="workout1">
								<p class="name">Силовая программа</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
					</ul>

					<ul id="tab_02" class="workouts_list">
						<li class="workout_item">
							<a href="#">
								<img src="img/workout7.jpg" class="workout_img">
								<p class="name">Пампинг тренировка</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
						<li class="workout_item">
							<a href="#">
								<img src="img/workout8.jpg" class="workout_img">
								<p class="name">Пампинг тренировка</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
						<li class="workout_item">
							<a href="#">
								<img src="img/workout9.jpg" class="workout_img">
								<p class="name">Пампинг тренировка</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
						<li class="workout_item">
							<a href="#">
								<img src="img/workout8.jpg" class="workout_img">
								<p class="name">Пампинг тренировка</p>
								<div class="workout_box">
									<p class="bodytype">Телосложение</p>
									<div class="kind1">
										<p>Любое</p>
									</div>
									<p class="difficulty">Сложность</p>
									<div class="kind2">
										<p>Любитель</p>
									</div>
									<p class="goal">Цель</p>
									<div class="kind3">
										<p>Увеличение силы</p>
									</div>
									<p class="time">Время</p>
									<p class="hours">1: 00 час</p>
								</div>
							</a>
						</li>
					</ul>
					<ul id="tab_03" class="workouts_list"></ul>
				</div>

				<div class="tabs">
					<nav class="tabs_items">
						<a href="#tab_01" class="tabs_item">1</a>
						<a href="#tab_02" class="tabs_item">2</a>
						<a href="#tab_03" class="tabs_item">3</a>
					</nav>
				</div>
			</div>

			<div class="sidebar">
				<div class="sidebar_box">
					<div class="interesting">
						<div class="interesting_top"><p>Интересное</p></div>
					</div>
					<div class="sidebar_items">
						<a href="https://aptstore.ru/articles/produkty-s-samym-bolshim-soderzhaniem-belka/">
							<img src="img/sidebar1.jpg" alt="protein">
							<p>Продукты содержащие</br>
							больше всего белка</p>
						</a>
						<a href="https://blog.decathlon.ru/sovety/chto-dajut-ezhednevnye-trenirovki.html">
							<img src="img/sidebar2.jpg" alt="protein">
							<p>Можно ли тренироваться</br>
							каждый день</p>
						</a>
						<a href="https://www.sportfood40.ru/articles/sportivnoe-pitanie/">
							<img src="img/sidebar3.jpg" alt="protein">
							<p>Спортивное питание для</br>
							начинающих</p>
						</a>
						<a href="https://builderbody.ru/za-skolko-vremeni-mozhno-nakachatsya/">
							<img src="img/sidebar4.jpg" alt="protein">
							<p>За сколько времени можно</br>
							накачаться</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="map" class="map">
		<div class="container">
			<h2>Наши партнёры</h2>
			<div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/56/chelyabinsk/search/%D0%9C%D0%B5%D1%82%D1%80%D0%BEFitness/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">МетроFitness в Челябинске</a><a href="https://yandex.ru/maps/56/chelyabinsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Челябинск</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUuvWCU-A" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
		</div>	
	</section>

	<footer id="footer" class="footer">
		<div class="container">
			<div class="footer_items">
				<ul class="colom">
					<li>
						<a href="#">
							Программы тренировок
						</a>
					</li>
					<li>
						<a href="#">
							Упражнения
						</a>
					</li>
					<li>
						<a href="#">
							Статьи
						</a>
					</li>
					<li>
						<a href="#">
							Контакты
						</a>
					</li>
				</ul>
				<div class="links">
					<div class="link_1">
						<a href="#">
						    <img src="img/inst.svg">
						</a>
						<a href="#">
							<img src="img/youtube.svg">
						</a>
				    </div>
				    <div class="link_2">
				    	<a href="#">
						    <img src="img/vk.svg">
					    </a>
						<a href="#">
							<img src="img/telegram.svg">
						</a>
				    </div>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>