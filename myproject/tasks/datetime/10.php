<?php
function getMonthArray(){
	$month = [
		'1' => 'Январь',
		'2' => 'Февраль',
		'3' => 'Март',
		'4' => 'Апрель',
		'5' => 'Май',
		'6' => 'Июнь',
		'7' => 'Июль',
		'8' => 'Август',
		'9' => 'Сентябрь',
		'10' => 'Октябрь',
		'11' => 'Ноябрь',
		'12' => 'Декабрь',
	];
	return $month;
}

function getMonth($date){
	$month = getMonthArray();
	$result = $month[date('n', strtotime($date))];
	return $result;
}

$taskDescription = 'Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date.';
$inputData = '$today = date(\'d.m.Y\', time());';

$today = date('d.m.Y', time());

$result = getMonth($today);
