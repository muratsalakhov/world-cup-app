<?php
require('database.php');
require('parts/check_user.php');
$query = "SELECT * FROM teams";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/teams.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>
<div class="main-section">
	<div class="container">
		<div class="teams-block">
			<div class="teams-list">
				<?php 
					foreach ($result as $team) { ?>
					<div class="team-item" onclick="location.href='team-page.php?id=<?php echo $team['team_id']?>';">
						<img src="img/flags/<?php echo $team['team_id'].'.png'?>" alt="">
						<a href="team-page.php?id=<?php echo $team['team_id']?>"><?php echo $team['team_name'] ?></a>
					</div>
				<?php	
					}
				?>
			</div>
		</div>
	</div>
</div>
<?php require('parts/footer.php'); ?>
</body>
</html>
