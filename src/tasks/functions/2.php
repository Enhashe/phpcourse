<?php 
function factorial($counter = 1) {
	if ($counter < 0) {
		return 0;
	} elseif ($counter == 0) {
		return 1;
	} else {
	return ($counter * factorial($counter - 1));
	}
}

$taskDescription = 'Разработать функцию вычисления факториала заданного числа (n!)<br>Исходные данные, передаваемые в функцию: n - число, факториал которого вычисляется.';
$inputData = '$counter = 4;';

$counter = 4;
$result = factorial($counter);
