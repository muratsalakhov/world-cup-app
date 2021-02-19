<?php
require('database.php');
require('parts/check_user.php');
$query = "SELECT * FROM teams";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
foreach ($result as $item) {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/teams.css" >
	<link rel="stylesheet" href="css/index.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>
<div class="main-section">
	<div class="container">
		<h1>Добро пожаловать на сайт, <br>посвященный чемпионату мира по футболу 2018</h1>
		<p>Для навигации по сайта воспользуйтесь меню сверху</p>
		<div class="gallery">
			<div class="gallery-item"><img src="img/start/start-1.jpg" alt=""></div>
			<div class="gallery-item"><img src="img/start/start-2.jpg" alt=""></div>
			<div class="gallery-item"><img src="img/start/start-3.jpg" alt=""></div>
			<div class="gallery-item"><img src="img/start/start-4.jpg" alt=""></div>
			<div class="gallery-item"><img src="img/start/start-5.jpg" alt=""></div>
			<div class="gallery-item"><img src="img/start/start-6.jpg" alt=""></div>
		</div>
	</div>
</div>
<footer>
	<div class="container">
		<div class="footer-info">
			<p>Создано в учебных целях. 2019 Салахов М.Р.</p>
		</div>
		<div class="footer-user">
			<p><?php echo $_SESSION['username'] ?></p>
			<a href="logout.php">Выйти</a>
		</div>
	</div>
</footer>
</body>
</html>
