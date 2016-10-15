<?php
function arrayWithZero($inputArray) {
	foreach ($inputArray as $key => $value) {
		$result[] = $value;
		if ($value < 0 ) {
			$result[] = 0;
		}
	}
	return $result;
}

$taskDescription = 'Дан массив размера n. После каждого отрицательного элемента массива вставить элемент с нулевым значением.';
$inputData = '$counter = 10;<br>$minVal = -50;<br>$maxVal = 50;<br>$inputArray = genRandomArray($counter, $minVal, $maxVal);';

$counter = 10;
$minVal = -50;
$maxVal = 50;
$inputArray = genRandomArray($counter, $minVal, $maxVal);

$outputArray = arrayWithZero($inputArray);
$result = implode(',', $outputArray);
?>
