<?php
function getArrayDateByFormat(){
	$result = [
		date("Y-m-d H:i:s"),
		date("d.m.Y H:i:s"),
		date("d.m.y H:i:s")
	];
	return $result;
}

$taskDescription = 'Выведите текущую дату-время в форматах \'2025-12-31\', \'31.12.2025\', \'31.12.13\', \'12:59:59\'.';
$inputData = 'time();';

$result = implode('<br>', getArrayDateByFormat());
