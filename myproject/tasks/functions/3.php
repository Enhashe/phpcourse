<?php 
function multiplicatedArray($inputArray, $mult) {
	if ($mult < 0 ) {
		return 'Error';
	} else {
		foreach ($inputArray as $key => $value) {
			$inputArray[$key] = $value * $mult;
		}
		return $inputArray = implode(',', $inputArray);
	}
}

$taskDescription = 'Разработать функцию, которая вносит процентную коррекцию в массив чисел(целых, дробных или смешанных не имеет значения)<br>
Исходные данные:<br>
1)Массив с числами в виде: array(5, 6.5, 10, 3.355, 400, 9.43, ..., [n]);<br>
2) Процент внесения изменений(0.8 - 80% от целого, 1 - оставить без изменения, 2.5 - увеличить в полтора раза и т.д.)<br>
Предусмотреть, что пользователь случайно может в функцию передать отрицательный процент, тогда функция должна вернуть ошибку.<br>
На выходе нужно получить такой же массив с добавленной процентной ставкой.';
$inputData = '$inputArray = array(2,3.45,1.15,6,8,10.2);<br>$multiplier = -2;';

$inputArray = array(2,3.45,1.15,6,8,10.2);
$multiplier = -2;

$result = multiplicatedArray($inputArray, $multiplier);

?>