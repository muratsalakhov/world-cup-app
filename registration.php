<?php
require('database.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
	$result = mysqli_query($connection, $query);

	if($result){
		header("Location: registration.php#success");
	} else {
		header("Location: registration.php#error");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/registration.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<header>
	<div class="container">
		<div class="header-logo">
			<a href="start.php">Чемпионат мира по футболу 2018</a>
		</div>
		<div class="header-buttons">
			<a href="authentification.php">Вход
			<a href="registration.php">Регистрация</a>
		</div>
	</div>
</header>

<div class="main-section">
	<div class="container">
		<form class="form-signin" method="POST">
			<h2>Регистрация</h2>
			<input type="text" name="username" class="form-control" placeholder="Имя" required="" autocomplete="off">
			<input type="email" name="email" class="form-control" placeholder="Email" required="" autocomplete="off">
			<input type="password" name="password" class="form-control" placeholder="Пароль" required="" autocomplete="off">
			<button class="submit-btn reg-btn" type="submit">Зарегистрироваться</button>
			<a href="authentification.php" class="submit-btn auth-btn" type="submit">Авторизоваться</a>
		</form>
	</div>
</div>

<div id="error" class="modalbackground">
	<div class="modalwindow">
		<h3>Ошибка!</h3>
		<p>Пользователь с таким именем уже существует</p>
		<a href=" ">Закрыть</a>
	</div>
</div>
<div id="success" class="modalbackground">
	<div class="modalwindow">
		<h3>Успешно!</h3>
		<p>Вы успешно зарегистрировались</p>
		<a href="authentification.php">Продолжить</a>
	</div>
</div>

<footer>
	<div class="container">
		<div class="footer-info">
			<p>Создано в учебных целях. 2019 Салахов М.Р.</p>
		</div>
	</div>
</footer>
</body>
</html>
