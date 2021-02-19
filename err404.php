<?php
require('database.php');
$query = "SELECT * FROM teams";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
foreach ($result as $item) {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ошибка</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/teams.css" >
	<link rel="stylesheet" href="css/index.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>
<div class="main-section">
	<div class="container">
		<h1>Упс, что-то пошло не так :(</h1>
		<p>Для навигации по сайта воспользуйтесь меню сверху</p>
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
