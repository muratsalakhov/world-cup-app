<?php
require('database.php');
$count = 1;
$query = "SELECT * FROM players WHERE player_hits>0 ORDER BY player_hits DESC, player_games, player_minutes LIMIT 50";
$players = mysqli_query($connection, $query) or die(mysqli_error($connection));

function gold() {
	echo ' style="background-color: gold"';
}

function silver() {
	echo ' style="background-color: silver"';
}

function bronze() {
	echo ' style="background-color: #cd7f32"';
}
?>

<div class="hits-section">
	<div class="top-heading">
		<h2>Нанесли больше всего ударов</h2>
	</div>
	<div class="container players-block">
		<div class="player-atributes-row hits-row">
			<div class="player-atributes">
				<p>№</p>
			</div>
			<div class="player-atributes">
				<p>Имя</p>
			</div>
			<div class="player-atributes">
				<p>Страна</p>
			</div>
			<div class="player-atributes">
				<p>Игры</p>
			</div>
			<div class="player-atributes">
				<p>Минуты</p>
			</div>
			<div class="player-atributes">
				<p>Удары</p>
			</div>
		</div>
	<?php 
		foreach ($players as $player) {?>
			<div class="player-row hits-row">
				<div class="player-item" <?php if($count==1) { gold(); }
				if($count==2) { silver(); }
				if($count==3) { bronze(); }?>>
					<p><?php echo $count;?></p>
				</div>
				<div class="player-item" <?php if($count==1) { gold(); }
				if($count==2) { silver(); }
				if($count==3) { bronze(); }?>>
					<p><?php echo $player['player_name'] . ' ' . $player['player_surname']?></p>
				</div>
				<div class="player-item" <?php if($count==1) { gold(); }
				if($count==2) { silver(); }
				if($count==3) { bronze(); }?>>
					<p><?php echo $player['player_team']?></p>
				</div>
				<div class="player-item" <?php if($count==1) { gold(); }
				if($count==2) { silver(); }
				if($count==3) { bronze(); }?>>
					<p><?php echo $player['player_games']?></p>
				</div>
				<div class="player-item" <?php if($count==1) { gold(); }
				if($count==2) { silver(); }
				if($count==3) { bronze(); }?>>
					<p><?php echo $player['player_minutes']?></p>
				</div>
				<div class="player-item" <?php if($count==1) { gold(); }
				if($count==2) { silver(); }
				if($count==3) { bronze(); }?>>
					<p><?php echo $player['player_hits'];
					$count++;?></p>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
