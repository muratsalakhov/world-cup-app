<?php
require('database.php');
require('parts/check_user.php');
$url = $_SERVER['REQUEST_URI'];
$id = $_GET['id'];
$query = "SELECT * FROM players ORDER BY player_team, player_number";
$players = mysqli_query($connection, $query) or die(mysqli_error($connection));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/team-page.css" >
	<link rel="stylesheet" href="css/change-players.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>

<div class="main-section">
	<div class="container">
		<div class="team-name-block">
			<h1>Все игроки</h1>
			<p>Нажмите на игрока, которого хотите изменить/удалить</p>
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
					<p>Cтрана</p>
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
		<?php 
			foreach ($players as $player) {?>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_name']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_surname']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_team']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_number']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_age']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_games']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_minutes']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_goals']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_assists']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_hits']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_passes']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_takes']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_yellow']?></p>
				</div>
				<div class="player-atributes-item" onclick="location.href='change-player.php?id=<?php echo $player['player_id']?>';">
					<p><?php echo $player['player_red']?></p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php require('parts/footer.php'); ?>
</body>
</html>
