<?php 

function possibilityCheck($inputArray) {
	$counter = count($inputArray);
	$flag = true;
	for ($i = 0; $i < $counter; $i++) { 
		for ($j = 0; $j < ($counter - 1); $j++) { 
			if ($i == $j) {
				continue;
			}
			if ($inputArray[$j] > $inputArray[($j + 1)]){
				$flag = false;
				break;
			}
		}
		if ($flag == true) {
			break;
		} elseif ($flag == false && $i != ($counter - 1)) {
			$flag = true;
		}
	}

	return $flag;
}

$taskDescription = 'Определите, можно ли вычеркнуть из данного массива одно число так, чтобы оставшиеся числа оказались упорядоченными по возрастанию.';
$inputData = '$inputArray = array(1,2,3,4,1,6,7);';

$inputArray = array(1,2,3,4,1,6,7);
$check = possibilityCheck($inputArray);
$result = $check  ? 'true' : 'false';
