<?php
function getDateDifference($hour, $min, $sec ,$month, $day, $year){
	$result = time() - mktime($hour, $min, $sec ,$month, $day, $year);
	return $result;
}

$taskDescription = 'Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.';
$inputData = '$sec = 59;<br>$min = 12;<br>$hour = 13;<br>$month = 3;<br>$day = 15;<br>$year = 2000;';

$sec = 59;
$min = 12;
$hour = 13;
$month = 3;
$day = 15;
$year = 2000;

$result = getDateDifference($hour, $min, $sec ,$month, $day, $year);
