<?php
	session_start();
	require_once 'connect.php';

	$number = $_POST['number'];
	$pass = md5($_POST['pass']);

	$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `number` = '$number' AND `pass` = '$pass'");
	if (mysqli_num_rows($check_user) > 0) {
		$_SESSION['message'] = 'Вы успешно вошли';
		header('Location:registration.php');

	} else {
		$_SESSION['message'] = 'Неверный логин или пароль';
		
		header('Location:registration.php');
	}
?>