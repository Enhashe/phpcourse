<?php 

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

$taskDescription = 'Найдите сумму и произведение элементов массива.Реализовать двумя способами: с помощью стандартных функций и без.';
$inputData = '$elementCount = 5;<br>$minElement = 1;<br>$maxElement = 10;';

$elementCount = 5;
$minElement = 1;
$maxElement = 10;
$inputArray = genRandomArray($elementCount,$minElement,$maxElement);
$inputArrayString = implode(',', $inputArray);
$standardSum = array_sum($inputArray);
$standardMult = array_product($inputArray);
$sumResult = sumOfArray($inputArray);
$multResult = multOfArray($inputArray);

$result = <<<EOD
	Incoming random array: $inputArrayString<br>
	Built'in sum of array items: $standardSum<br>
	Custom sum of array items: $sumResult<br>
	Built'in multiplication of array items : $standardMult<br>
	Custom multiplication of array items: $multResult<br>
EOD;

?>