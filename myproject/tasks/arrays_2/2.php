<?php 

require '../../lib/functions.php';

function arrayShuffle($inputArray) {
	$counter = count($inputArray);
	$outputArray = array_fill(0, $counter, null);
	foreach ($inputArray as $key => $value) {
		do {
			$a = rand(0,($counter - 1));
			if ($outputArray[$a] == null && $a != $key) {
				$outputArray[$a] = $value;
				break;
			}
		} while (true);
	}
	return $outputArray;
}

$elementCount = 10;
$minElement = 0;
$maxElement = 100;
$inputArray = genRandomArray($elementCount,$minElement,$maxElement);
$standardShuffle = $inputArray;
$result = arrayShuffle($inputArray);

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
					echo 'Base array: ' . implode(',', $inputArray) . '<br>';
					shuffle($standardShuffle);
					echo 'Shuffled array: ' . implode(',', $standardShuffle) . '<br>';
					echo 'Random shuffled array: ' . implode(',', $result) . '<br>';
				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
