<?php
function getTime(){
	$unixTime = time();
	$timeVault = [
		'h' => $unixTime / 3600 % 24,
        'm' => $unixTime / 60 % 60,
        's' => $unixTime % 60
	];
	foreach($timeVault as $key => $value)
        if($value > 0)$ret[] = $value;
    $timeNow = implode('-', $timeVault);
    return $timeNow;
}

$taskDescription = 'Выведите текущее время в формате timestamp';
$inputData = '$unixTime = time()';

$result = getTime();
?>