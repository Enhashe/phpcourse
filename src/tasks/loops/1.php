<?php 
function sayHelloWorld($counter = 1) {
	$result = '';
	for ($i = 0; $i < $counter; $i++) {
		$result .= 'HelloWorld!<br>';
	}
	return $result;
}

$taskDescription = 'Выведите  10 раз фразу "Hello"';
$inputData = '$counter = 10';

$counter = 10;
$result = sayHelloWorld($counter);
