<?php
function getDay($date){
	$result = date('d',strtotime($date));
	return $result;
}

$taskDescription = 'Найдите номер текущего дня от начала месяца.';
$inputData = '$today = date(\'d.m.Y\', time());';

$today = date('d.m.Y', time());

$result = getDay($today);
