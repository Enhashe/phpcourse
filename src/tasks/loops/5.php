<?php 
function naturalNumbers($first,$last) {
	$result = '';
	for ($i = $first; $i <= $last ; $i++) { 
		if ($i % 7 == 1 && 2 && 5) {
			$result .= "$i\t";
		}
	}
	return $result;
}

$taskDescription = 'Даны натуральные числа от 35 до 87. Вывести на консоль те из них, которые при делении на 7 дают остаток 1, 2 или 5.';
$inputData = '$first = 35;<br>$last = 87;';

$first = 35;
$last = 87;
$result = naturalNumbers($first,$last); 
