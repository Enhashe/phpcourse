<?php 
function genRandomArray($counter = 1,$min = 0, $max = 1) {
	$randArray[] = rand($min,$max);
	for ($i = 1; $i < $counter; $i++) { 
		$randArray[$i] = rand($min,$max);
		for ($j = 0; $j <= ($i - 1); $j++) { 
			if ($randArray[$j] === $randArray[$i]) {
				$i--;
			}
		}
	}
	return $randArray;
}

$arraySize = 3;
$maxVal = 0;
$minVal = 100;
$result = genRandomArray($arraySize, $minVal, $maxVal); 

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
				<?php var_dump($result); ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
