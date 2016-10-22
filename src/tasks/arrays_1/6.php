<?php 
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

$taskDescription = 'Упорядочить значения массива по возрастанию. Реализовать двумя способами: с помощью стандартной функции и без.';
$inputData = '$arraySize = 10;<br>$minVal = 0;<br>$maxVal = 100;';

$arraySize = 10;
$minVal = 0;
$maxVal = 100;
$inputArray = genRandomArray($arraySize,$minVal,$maxVal);
$standardSort = $inputArray;
asort($standardSort);
$customSortedArray = sortArrayAscend($inputArray);
$outputOrigArray = implode(',' , $inputArray);
$outputStandardSort = implode(',' , $standardSort);
$outputCustomSort = implode(',' , $customSortedArray);
$result = <<<EOD
Original array: $outputOrigArray<br>
Standard Sort: $outputStandardSort<br>
Custom Sort: $outputCustomSort<br>
EOD;
