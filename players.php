<?php
require('database.php');
require('parts/check_user.php');
$url = $_SERVER['REQUEST_URI'];
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link rel="stylesheet" href="css/top-pages.css" >
	<link rel="stylesheet" href="css/base.css" >
	<link rel="stylesheet" href="css/players.css" >
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
</head>
<body>
<?php require('parts/header.php'); ?>
<div class="main-section">
	<div class="container">
		<div class="players-block">
			<div class="players-header">
				<h1>Лучшие из лучших</h1>
				<div class="players-buttons-block">
					<form method="post" action="players.php">
						<div class="players-button" onclick="location.href='players.php?id=goals';">Голы</div>
						<div class="players-button" onclick="location.href='players.php?id=assists';">Гол. передачи</div>
						<div class="players-button" onclick="location.href='players.php?id=hits';">Удары</div>
						<div class="players-button" onclick="location.href='players.php?id=passes';">Передачи</div>
						<div class="players-button" onclick="location.href='players.php?id=takes';">Отборы</div>
						<div class="players-button" onclick="location.href='players.php?id=yellow';">Желтые карточки</div>
						<div class="players-button" onclick="location.href='players.php?id=red';">Красные карточки</div>
						<div class="players-button" onclick="location.href='players.php?id=saves';">Вратарские сейвы</div>
					</form>
				</div>
			</div>
			<div class="players-list">
				<?php
				if ($id=='goals'){
					require('players-top-pages/goals-top.php');
				} elseif ($id=='assists'){
					require('players-top-pages/assists-top.php');
				}elseif ($id=='hits'){
					require('players-top-pages/hits-top.php');
				}elseif ($id=='passes'){
					require('players-top-pages/passes-top.php');
				}elseif ($id=='takes'){
					require('players-top-pages/takes-top.php');
				}elseif ($id=='yellow'){
					require('players-top-pages/yellow-top.php');
				}elseif ($id=='red'){
					require('players-top-pages/red-top.php');
				}elseif ($id=='saves'){
					require('players-top-pages/saves-top.php');
				} else {
					require('players-top-pages/goals-top.php');
				}
				?>
			</div>
		</div>
	</div>
</div>

<?php require('parts/footer.php'); ?>
</body>
</html>
