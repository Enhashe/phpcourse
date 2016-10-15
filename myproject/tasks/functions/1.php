<?php 
function speedCalc($distance, $time) {
	$speed = array();
	$speed[] = $distance / $time;
	$speed[] = ($distance / $time) * 3.6;
	return $speed;
}

$taskDescription = 'Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c.<br>Исходные данные: Пройденный путь - S; Время движения - t.';
$inputData = '$distance = 400;<br>$time = 20;';

$distance = 400;
$time = 20;

$speed = speedCalc($distance, $time);
$result = <<<EOD
$speed[0] m/sec<br>
$speed[1] km/h
EOD;

?>