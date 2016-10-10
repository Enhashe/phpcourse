<?php 

require '../../lib/functions.php';

function sumOfArray($inputArray) {
	$sum = 0;
	foreach ($inputArray as $key => $value) {
		$sum = $sum + $value;
	}
	return $sum;
}

function multOfArray($inputArray) {
	$mult = 1;
	foreach ($inputArray as $key => $value) {
		$mult = $mult * $value;
	}
	return $mult;
}

$elementCount = 5;
$minElement = 1;
$maxElement = 10;
$inputArray = genRandomArray($elementCount,$minElement,$maxElement);
$sumResult = sumOfArray($inputArray);
$multResult = multOfArray($inputArray); 

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
					echo 'Incoming random array: ' . implode(',', $inputArray) . '<br>';
					echo 'Built\'in sum of array items: ' . array_sum($inputArray) . '<br>';
					echo 'Custom sum of array items: ' . $sumResult . '<br>';
					echo 'Built\'in multiplication of array items : ' . array_product($inputArray) . '<br>';
					echo 'Custom multiplication of array items: ' . $multResult . '<br>';
				 ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
