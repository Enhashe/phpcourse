<?php 
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

$taskDescription = 'Дан массив из n элементов. а) Переставьте его элементы случайным образом. б) Переставьте его элементы случайным образом так, чтобы каждый элемент оказался на новом месте.';
$inputData = '$elementCount = 10;<br>$minVal = 0;<br>$maxVal = 100;<br>$inputArray = genRandomArray($elementCount,$minVal,$maxVal)';

$elementCount = 10;
$minVal = 0;
$maxVal = 100;
$inputArray = genRandomArray($elementCount,$minVal,$maxVal);

$standardShuffle = $inputArray;
shuffle($standardShuffle);
$baseArray = implode(',', $inputArray);
$shuffledArray = implode(',', $standardShuffle);
$randomShuffledArray = implode(',', arrayShuffle($inputArray));

$result = <<<EOT
Base array: $baseArray<br>
Shuffled array: $shuffledArray<br>
Random shuffled array: $randomShuffledArray
EOT;


?>