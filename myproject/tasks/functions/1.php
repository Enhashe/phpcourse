<?php 
function speedCalc($distance, $time) {
	$speed = array();
	$speed[] = $distance / $time;
	$speed[] = ($distance / $time) * 3.6;
	return $speed;
}

$distance = 400;
$time = 20;
$result = speedCalc($distance, $time);

?>

<?php require '../../view/header.php'; ?>
<div class="content">
	<?php require '../../view/menu.php'; ?>
		<div class="workarea">
			<div><h1>Loops</h1></div>
			<div class="task-item">
				Task:<br>
				...
			</div>
			<div class="task-item">
				Input Data:<br>
				...
			</div>
			<div class="task-item">
				Output Data:<br>
				<?php
					echo $result[0] . ' m/sec' . '<br>';
					echo $result[1] . ' km/h' . '<br>';
				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
