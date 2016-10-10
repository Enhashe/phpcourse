<?php 

require '../../lib/functions.php';

function sortArrayAscend($inputArray) {
	$counter = sizeof($inputArray);
	for ($j = 0; $j < $counter; $j++)	{
		$min = $j;
		for ($i = $j; $i < $counter; $i++) { 
			if ($inputArray[$i] < $inputArray[$min]) {
				$min = $i;
			}
		}
		$buffer = $inputArray[$j];
		$inputArray[$j] = $inputArray[$min];
		$inputArray[$min] = $buffer;
	}
	return $inputArray;
}

$arraySize = 10;
$minVal = 0;
$maxVal = 100;
$inputArray = genRandomArray($arraySize,$minVal,$maxVal);
$standardSort = $inputArray;
asort($standardSort);
$result = sortArrayAscend($inputArray);

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
					echo 'Original array: ' . implode(',' , $inputArray) . '<br>';
					echo 'Standard Sort: ' . implode(',' , $standardSort) . '<br>';
					echo 'Custom Sort: ' . implode(',' , $result) . '<br>';
				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
