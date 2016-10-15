<?php 
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

$taskDescription = 'Поменять местами наибольший и наименьший элементы массива.';
$inputData = '$arraySize = 5;<br>$minVal = 0;<br>$maxVal = 100;';

$arraySize = 5;
$minVal = 0;
$maxVal = 100;
$inputArray = genRandomArray($arraySize,$minVal,$maxVal);
$exchangedArray = exchangeMinMax($inputArray);
$outputOriginalArray = implode(',', $inputArray);
$outputExchangedlArray = implode(',', $exchangedArray);
$result = <<<EOD
Original random array: $outputOriginalArray<br>
Modified random array: $outputExchangedlArray<br>
EOD;
?>
