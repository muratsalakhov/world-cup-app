<?php
require('database.php');
require('parts/check_user.php');
$url = $_SERVER['REQUEST_URI'];
$id = $_GET['id'];
$query = "SELECT * FROM matches LIMIT 48";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
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
			foreach ($result as $match) {
			?>
				<div class="match-block">
					<div class="match-date">
						<p>
							<?php
							$date = strtotime($match['match_date']); 
							echo date('d-m-Y',$date); ?>
						</p>
					</div>
					<div class="match-body">
						<div class="country-block">
							<!--<img src="img/flags/<?php
								//$team_name = $match['match_first'];
								//echo $match['match_date'];
								//$query2 = "SELECT * FROM teams WHERE //team_id='$team_name'";
								//$result2 = mysqli_query($connection, $query) or //die(mysqli_error($connection));
								//echo $result2['team_name'].'.png';?>" alt="">-->
							<p><?php echo $match['match_first'];?></p>
						</div>
						<div class="score-block"><p>
							<?php 
								echo $match['match_first_score'] . "-" . $match['match_second_score'];
							?>
						</p></div>
						<div class="country-block">
							<!--<img src="img/flags/<?php
								//$team_name = $match['match_first'];
								//echo $match['match_date'];
								//$query2 = "SELECT * FROM teams WHERE //team_id='$team_name'";
								//$result2 = mysqli_query($connection, $query) or //die(mysqli_error($connection));
								//echo $result2['team_name'].'.png';?>" alt="">-->
							<p><?php echo $match['match_second'];?></p>
						</div>
					</div>
				</div> 
			<?php
			}
			?>
		</div>
	</div>
</div>

<?php require('parts/footer.php'); ?>
</body>
</html>
