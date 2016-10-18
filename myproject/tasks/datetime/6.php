<?php
function getDateByFormat(){
	$result = date("Y-d-m H:i:s");
	return $result;
}

$taskDescription = 'Выведите на экран текущий год, день, месяц, час, минуту, секунду.';
$inputData = 'сегодняшняя дата;';

$result = getDateByFormat();
