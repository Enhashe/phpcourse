<?php 
$taskDescription = 'Вывести 3 случайных числа от 0 до 100 без повторений.';
$inputData = '$minVal = 0;<br>$maxVal = 100;<br>$arraySize = 3;';

$arraySize = 3;
$minVal = 0;
$maxVal = 100;

$result = implode(',', genRandomArray($arraySize, $minVal, $maxVal)); 
