<?php 

require '../../lib/functions.php';

function exchangeMinMax($inputArray) {
	$counter = sizeof($inputArray);
	$min = 0;
	$max = 0;
	for ($i = 0; $i < $counter; $i++) { 
		if ($inputArray[$i] > $inputArray[$max]) {
			$max = $i;
		} elseif ($inputArray[$i] < $inputArray[$min]) {
			$min = $i;
		}
	}
	$buffer = $inputArray[$min];
	$inputArray[$min] = $inputArray[$max];
	$inputArray[$max] = $buffer;
	return $inputArray;
}

$arraySize = 5;
$minVal = 0;
$maxVal = 100;
$inputArray = genRandomArray($arraySize,$minVal,$maxVal);
$result = exchangeMinMax($inputArray); 
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

					echo "Original random array:\t" . implode(',', $inputArray) . '<br>';
					echo "Modified random array:\t" . implode(',', $result) . '<br>';

				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
