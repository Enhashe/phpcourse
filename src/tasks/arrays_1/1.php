<?php 
function arrayOf01($counter = 1) {
	$listOf01[] = 0;
	for ($i = 1; $i < $counter; $i++) { 
		$listOf01[] = ($i % 2 != 0) ? 1 : 0;
	}
	return $listOf01;
}

function taskFunction(array $arraySize){
	//here must be check $inputData for consistency
	$result = implode(',', arrayOf01($arraySize));
}
/*$taskDescription = 'Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.';
$inputData = '$arraySize = 30;';

$arraySize = 30;*/

