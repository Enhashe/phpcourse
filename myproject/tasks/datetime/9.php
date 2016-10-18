<?php
function createWeek(){
	$week = [
		'Воскресенье',
		'Понедельник',
		'Вторник',
		'Среда',
		'Четверг',
		'Пятница',
		'Суббота'
	];
	return $week;
}

function getWeekDay($date){
	$week = createWeek();
	$result = $week[date('w',strtotime($date))];
	return $result;
}

$taskDescription = 'Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения.';
$inputData = '$today = date(\'d.m.Y\', time());<br>
$lastday = \'06.06.2006\';<br>
$birthday = \'30.08.1988\';';

$today = date('d.m.Y', time());
$lastday = '06.06.2006';
$birthday = '30.08.1988';

$result1 = getWeekDay($today);
$result2 = getWeekDay($lastday);
$result3 = getWeekDay($birthday);

$result = <<<EOT
	$today: $result1<br>
	$lastday: $result2<br>
	$birthday: $result3<br>
EOT;
