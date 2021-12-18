<?php
	session_start();
?>

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
						<a href="index.php">
							Главная
						</a>
					</li>
					<li>
						<a href="#">
							Программы
						</a>
					</li>
					<li>
						<a href="#">
							Наши партнёры
						</a>
					</li>
					<li>
						<a href="#">
							О нас
						</a>
					</li>
				</ul>
				<button class="menu_open">
					<img src="img/menu.svg">
				</button>
				<button class="btn_entry">Войти</button>
			</div>
		</div>
	</header>

	<section id="regist" class="regist">
		<div class="container">
			<div class="form_reg">
				<h3>Зарегистрироваться</h3>
				<form action="signup.php" method="post">
					<input type="text" class="form_control" name="name" id="name" placeholder="Введите имя">
					<input type="text" class="form_control" name="number" placeholder="Введите номер телефона">
					<input type="password" class="form_control" name="pass" placeholder="Введите пароль">
					<button class="btn_success">Зарегистрироваться</button>
				</form>
			</div>
			<div class="form_ent">
				<h3>Войти</h3>
				<form action="signin.php" method="post">
					<input type="text" class="form_control" name="number" id="number" placeholder="Введите номер телефона">
					<input type="password" class="form_control" name="pass" id="pass" placeholder="Введите пароль">
					<button class="btn_success">Войти</button>
					<p class="msg">
						<?php
							echo $_SESSION['message'];
							unset($_SESSION['message']);
						?>
					</p>
				</form>
			</div>
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
