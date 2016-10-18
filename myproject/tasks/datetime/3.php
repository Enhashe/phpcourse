<?php
function getPreNewYear(){
	$year = time() / 31556926 % 365.24 + 1970;
	$result = mktime(0, 0, 0, 12, 31, $year);
	return $result;
}

$taskDescription = 'Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен';
$inputData = 'Новогоднее настроение';

$result = getPreNewYear();
