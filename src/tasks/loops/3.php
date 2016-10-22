<?php 
function numbersDividing5Contains3($divNumber, $contNumber, $counter = 1) {
	$result = '';
	for ($i = 0; $i <= $counter; $i++) {
		if ($i % $divNumber != 0) {
			for ($j = 0; $j < strlen($i); $j++) {
				$i = "$i";
				if ($i{$j} == $contNumber) {
					$result = $result . "$i\t";
				}
				$i = (int)$i;
			}
		}
	}
	return $result;
}

$taskDescription = 'Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.';
$inputData = '$divisionNumber = 5;<br>$containsNumber = 3;<br>
$numberCount = 10000;';

$divisionNumber = 5;
$containsNumber = 3;
$numberCount = 10000;

$result = numbersDividing5Contains3($divisionNumber, $containsNumber, $numberCount); 
