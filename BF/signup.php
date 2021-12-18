<?php
	session_start();
	require_once 'connect.php';

	$number = filter_var(trim($_POST['number']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    if (mb_strlen($name) < 2 || mb_strlen($name) > 20){
        $_SESSION['message'] = 'Поле имя должно содержать от 2 до 20 символов';
        header('Location:registration.php');
        die;
    }elseif (mb_strlen($number) < 11 || mb_strlen($number) > 11){
        $_SESSION['message'] = 'Номер должен содержать 11 символов';
        header('Location:registration.php');
        die;
    }elseif (mb_strlen($pass) < 5 || mb_strlen($pass) > 25){
        $_SESSION['message'] = 'Пароль должен быть более 5 символов';
        header('Location:registration.php');
        die;
    }

	$pass = md5($pass);

	mysqli_query($connect, "INSERT INTO `users` (`id`, `number`, `pass`, `name`) VALUES (NULL, '$number', '$pass', '$name')");

	$_SESSION['message'] = 'Вы успешно зарегистрированы';

	header('Location:registration.php');


?>