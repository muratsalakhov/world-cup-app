<?php
require('database.php');
require('parts/check_user.php');
$url = $_SERVER['REQUEST_URI'];
$id = $_GET['id'];
$query = "SELECT * FROM teams WHERE team_id='$id' LIMIT 1";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$team = mysqli_fetch_assoc($result);
if(empty($team)){
	header("Location: err404.php");
}
$team_name = $team['team_name'];
$query = "SELECT * FROM players WHERE player_team='$team_name'";
$players = mysqli_query($connection, $query) or die(mysqli_error($connection));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/team-page.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>

<div class="main-section">
	<div class="container">
		<div class="team-name-block">
			<img src="img/flags/<?php echo $team['team_id'].'.png'?>" alt="">
			<h1><?php echo $team['team_name']?></h1>
		</div>
	</div>
	<div class="team-info">
		<div class="container">
			<div class="team-info-block">
				<div class="team-info-item">
					<p><span><?php echo $team['team_games']?></span> <br>матчей</p>
				</div>
				<div class="team-info-item">
					<p><span><?php echo $team['team_goals']?></span><br>голов<br>забито</p>
				</div>
				<div class="team-info-item">
					<p><span><?php echo $team['team_missed']?></span><br>голов<br>пропущено</p>
				</div>
				<div class="team-info-item">
					<p><span><?php echo $team['team_hits']?></span><br>ударов<br>по воротам</p>
				</div>
				<div class="team-info-item">
					<p><span><?php echo $team['team_fouls']?></span><br>фолов</p>
				</div>
				<div class="team-info-item">
					<p><span><?php echo $team['team_yellow']?></span><br>желтых<br>карточек</p>
				</div>
				<div class="team-info-item">
					<p><span><?php echo $team['team_red']?></span><br>красных<br>карточек</p>
				</div>
			</div>
		</div>
	</div>
	<div class="team-players">
		<div class="container team-players-block">
				<div class="player-atributes-item player-atributes">
					<p>Имя</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Фамилия</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Номер</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Возраст</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Игры</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Минуты</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Голы</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Гол.<br>передачи</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Удары</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Передачи</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Отборы</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Желтых<br>карточек</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Красных<br>карточек</p>
				</div>
				<div class="player-atributes-item player-atributes">
					<p>Вратарских<br>сейвов</p>
				</div>
		<?php 
			foreach ($players as $player) {?>
				<div class="player-atributes-item">
					<p><?php echo $player['player_name']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_surname']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_number']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_age']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_games']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_minutes']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_goals']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_assists']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_hits']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_passes']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_takes']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_yellow']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_red']?></p>
				</div>
				<div class="player-atributes-item">
					<p><?php echo $player['player_saves']?></p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<div id="error" class="modalbackground">
	<div class="modalwindow">
		<h3>Ошибка!</h3>
		<p>Произошла ошибка</p>
		<a href=" ">Закрыть</a>
	</div>
</div>
<?php require('parts/footer.php'); ?>
</body>
</html>
