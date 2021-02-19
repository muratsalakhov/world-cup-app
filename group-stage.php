<?php
require('database.php');
require('parts/check_user.php');
$url = $_SERVER['REQUEST_URI'];
$id = $_GET['id'];
$query = "SELECT * FROM teams ORDER BY team_group, team_group_points DESC, team_goals DESC, team_missed";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$group = 'A';
$team = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/group-stage.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>
<div class="main-section">
	<div class="container">
		<div class="group-header">
			<h1>Групповая стадия</h1>
			<div class="group-header-buttons-block">
				<form method="post" action="group-header.php">
					<div class="group-header-button" onclick="location.href='group-stage.php';">Группы</div>
					<div class="group-header-button" onclick="location.href='group-matches.php';">Матчи группового<br>этапа</div>
				</form>
			</div>
		</div>
		<div class="group-section">
			<?php 
			for ($i=1;$i<9;$i++){
				echo '<div class="group-container">';
				echo '<div class="group-row">';
				$group = $team['team_group'];
				echo '<h2>Группа '.$group.'</h2>';
				echo "</div>";
				echo '<div class="group-block">';
				echo '<div class="group-row">';
				echo '<p></p>';
				echo '<p>Страна</p>';
				echo '<p>Игр</p>';
				echo '<p>Поб.</p>';
				echo '<p>Нич.</p>';
				echo '<p>Пор.</p>';
				echo '<p>ЗГ</p>';
				echo '<p>ПГ</p>';
				echo '<p>+/-</p>';
				echo '<p>Очк.</p>';
				echo '</div>';
				for ($j=1;$j<5;$j++){
					echo '<div class="group-row">';
					echo '<img src="../img/flags/' . $team['team_id'].'.png" alt="">';
					echo '<p>' . $team['team_name'] . '</p>'; 
					echo '<p>' . 3 . '</p>'; 
					echo '<p>' . $team['team_group_wins'] . '</p>'; 
					echo '<p>' . $team['team_group_draws'] . '</p>'; 
					$loses = 3 - $team['team_group_wins'] - $team['team_group_draws']; 
					echo '<p>' . $loses . '</p>'; 
					echo '<p>' . $team['team_goals'] . '</p>'; 
					echo '<p>' . $team['team_missed'] . '</p>'; 
					$difference = $team['team_goals'] - $team['team_missed'];
					echo '<p>' . $difference . '</p>'; 
					echo '<p>' . $team['team_group_points'] . '</p>';
					echo '</div>';
					$team = mysqli_fetch_assoc($result);
				}
				echo '</div>';
				echo "</div>";
			}
			?>
		</div>
	</div>
</div>

<?php require('parts/footer.php'); ?>
</body>
</html>
