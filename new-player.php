<?php
require('database.php');
require('parts/check_user.php');

if (isset($_POST['player_name']) && isset($_POST['player_surname']) && isset($_POST['player_team']) && isset($_POST['player_number']) && isset($_POST['player_age'])) {
	$player_name = $_POST['player_name'];
	$player_surname = $_POST['player_surname'];
	$player_team = $_POST['player_team'];
	$player_number = $_POST['player_number'];
	$player_age = $_POST['player_age'];
	$player_games = $_POST['player_games'];
	$player_minutes = $_POST['player_minutes'];
	$player_goals = $_POST['player_goals'];
	$player_assists = $_POST['player_assists'];
	$player_hits = $_POST['player_hits'];
	$player_passes = $_POST['player_passes'];
	$player_takes = $_POST['player_takes'];
	$player_yellow = $_POST['player_yellow'];
	$player_red = $_POST['player_red'];
	$player_saves = $_POST['player_saves'];

	$query = "INSERT INTO players (player_name, player_surname, player_team, player_number, player_age, player_games, player_minutes, player_goals, player_assists, player_hits, player_passes, player_takes, player_yellow, player_red, player_saves) VALUES ('$player_name', '$player_surname', '$player_team', '$player_number', '$player_age', '$player_games', '$player_minutes', '$player_goals', '$player_assists', '$player_hits', '$player_passes', '$player_takes', '$player_yellow', '$player_red', '$player_saves')";
	$result = mysqli_query($connection, $query);

	if($result){
		header("Location: new-player.php#success");
	} else {
		header("Location: new-player.php#error");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/group-matches.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>
<div class="main-section">
	<div class="container">
		<form class="form-signin" method="POST">
			<h2>Новый игрок</h2>
			<input type="text" name="player_name" class="form-control" placeholder="Имя" required="" autocomplete="off">
			<input type="text" name="player_surname" class="form-control" placeholder="Фамилия" required="" autocomplete="off">
			<input type="text" name="player_team" class="form-control" placeholder="Страна" required="" autocomplete="off">
			<input type="number" name="player_number" class="form-control" placeholder="Номер" required="" autocomplete="off">
			<input type="number" name="player_age" class="form-control" placeholder="Возраст" required="" autocomplete="off">
			<input type="number" name="player_games" class="form-control" placeholder="Игры" required="" autocomplete="off">
			<input type="number" name="player_minutes" class="form-control" placeholder="Минуты на поле" required="" autocomplete="off">
			<input type="number" name="player_goals" class="form-control" placeholder="Голы" required="" autocomplete="off">
			<input type="number" name="player_assists" class="form-control" placeholder="Гол. передачи" required="" autocomplete="off">
			<input type="number" name="player_hits" class="form-control" placeholder="Удары" required="" autocomplete="off">
			<input type="number" name="player_passes" class="form-control" placeholder="Передачи" required="" autocomplete="off">
			<input type="number" name="player_takes" class="form-control" placeholder="Отборы" required="" autocomplete="off">
			<input type="number" name="player_yellow" class="form-control" placeholder="Желтые карточки" required="" autocomplete="off">
			<input type="number" name="player_red" class="form-control" placeholder="Красные карточки" required="" autocomplete="off">
			<input type="number" name="player_saves" class="form-control" placeholder="Сейвы" required="" autocomplete="off">
			<button class="submit-btn reg-btn" type="submit" style="padding: 5px">Добавить</button>
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
		<p>Игрок успешно добавлен</p>
		<a href=" ">Продолжить</a>
	</div>
</div>

<?php require('parts/footer.php'); ?>
</body>
</html>
