<?php 
function arrayN2($counter = 1) {
	$listN2 = NULL;
	for ($i=0; $i < $counter; $i++) { 
		$listN2[$i] = $i * $i;
	}
	return $listN2;
}

$taskDescription = 'Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.';
$inputData = '$arraySize = 10;';

$arraySize = 10;
$result = implode(',', arrayN2($arraySize));
