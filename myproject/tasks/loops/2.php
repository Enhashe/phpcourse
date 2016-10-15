<?php 
function sumOfnumbers($counter = 1) {
	$sum = 0;
	for ($i = 1; $i <= $counter; $i += 3) { 
	$sum = $sum + $i;
	}
	return $sum;
}


$taskDescription = 'Найти сумму  1+4+7+10+...+112. Ответ: 2147';
$inputData = '$maxCounter = 112';

$maxCounter = 112;
$result = sumOfnumbers($maxCounter);

?>