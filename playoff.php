<?php
require('database.php');
require('parts/check_user.php');
$url = $_SERVER['REQUEST_URI'];
$id = $_GET['id'];
$query = "SELECT * FROM matches WHERE match_id>48";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/playoff.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>
<div class="main-section">
	<div class="container">
		<div class="playoff-header">
			<h1>Плей-офф</h1>
			<div class="playoff-header-buttons-block">
				<form method="post" action="playoff-header.php">
					<div class="playoff-header-button" onclick="location.href='playoff.php';">Сетка плей-офф</div>
					<div class="playoff-header-button" onclick="location.href='playoff-matches.php';">Матчи плей-офф</div>
				</form>
			</div>
		</div>
		<div class="playoff-section">	
				<div class="playoff-line">
					<?php 
						for ($i=1;$i<9;$i++){
							$match = mysqli_fetch_assoc($result);
					?>
							<div class="match-block">
							<div class="match-date">
								<p>1/8 финала</p>
							</div>
							<div class="match-body">
								<div class="country-block">
									<p><?php echo $match['match_first'];?></p>
								</div>
								<div class="score-block"><p>
									<?php 
										echo $match['match_first_score'] . "-" . $match['match_second_score'];
									?>
								</p></div>
								<div class="country-block">
									<p><?php echo $match['match_second'];?></p>
								</div>
							</div>
							</div>
					<?php	}
					?> 
				</div>
				<div class="playoff-line">
					<?php 
						for ($i=1;$i<5;$i++){
							$match = mysqli_fetch_assoc($result);
					?>
							<div class="match-block">
							<div class="match-date">
								<p>1/4 финала</p>
							</div>
							<div class="match-body">
								<div class="country-block">
									<p><?php echo $match['match_first'];?></p>
								</div>
								<div class="score-block"><p>
									<?php 
										echo $match['match_first_score'] . "-" . $match['match_second_score'];
									?>
								</p></div>
								<div class="country-block">
									<p><?php echo $match['match_second'];?></p>
								</div>
							</div>
							</div>
					<?php	}
					?> 
				</div>
				<div class="playoff-line">
					<?php 
						for ($i=1;$i<3;$i++){
							$match = mysqli_fetch_assoc($result);
					?>
							<div class="match-block">
							<div class="match-date">
								<p>Полуфинал</p>
							</div>
							<div class="match-body">
								<div class="country-block">
									<p><?php echo $match['match_first'];?></p>
								</div>
								<div class="score-block"><p>
									<?php 
										echo $match['match_first_score'] . "-" . $match['match_second_score'];
									?>
								</p></div>
								<div class="country-block">
									<p><?php echo $match['match_second'];?></p>
								</div>
							</div>
							</div>
					<?php	}
					?> 
				</div>
				<div class="playoff-line">
					<div class="final-matches">
						<?php 
							$match = mysqli_fetch_assoc($result);
					?>
							<div class="match-block">
							<div class="match-date">
								<p>Финал</p>
							</div>
							<div class="match-body">
								<div class="country-block">
									<p><?php echo $match['match_first'];?></p>
								</div>
								<div class="score-block"><p>
									<?php 
										echo $match['match_first_score'] . "-" . $match['match_second_score'];
									?>
								</p></div>
								<div class="country-block">
									<p><?php echo $match['match_second'];?></p>
								</div>
							</div>
							</div>
					<?php
							$match = mysqli_fetch_assoc($result);
					?>
							<div class="match-block">
							<div class="match-date">
								<p>3-е место</p>
							</div>
							<div class="match-body">
								<div class="country-block">
									<p><?php echo $match['match_first'];?></p>
								</div>
								<div class="score-block"><p>
									<?php 
										echo $match['match_first_score'] . "-" . $match['match_second_score'];
									?>
								</p></div>
								<div class="country-block">
									<p><?php echo $match['match_second'];?></p>
								</div>
							</div>
							</div>
					</div>
				</div>
		</div>
	</div>
</div>

<?php require('parts/footer.php'); ?>
</body>
</html>
