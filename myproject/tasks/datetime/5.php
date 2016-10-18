<?php

function getTimings($hour, $min, $sec) {
	$sec = time() - mktime($hour, $min, $sec);
	$timings = [
		'seconds' => $sec,
		'minutes' => $sec / 60,
		'hours' => $sec / 3600,
		'days' => $sec / 86400,
	];
	return $timings;
}

$taskDescription = 'Найдите количество секунд $sec, прошедших с 7:23:48 текущего дня до настоящего момента времени. Найдите количество минут, часов и дней, содержащихся в $sec (не одновременно, а последовательно: сначала минуты, потом часы и т.д.).';
$inputData = '$sec = 48;<br>$min = 23;<br>$hour = 7;';

$sec = 48;
$min = 23;
$hour = 7;

$timings = getTimings($hour, $min, $sec);
var_dump($timings);

$result = 'Прошло: <br>' . $timings['seconds'] . ' секунд<br>' . $timings['minutes'] . ' минут<br>' . $timings['hours'] . ' часов<br>' . $timings['days'] . ' дней';
