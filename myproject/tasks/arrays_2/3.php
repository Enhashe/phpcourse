<?php 
function mergeArrays($inputArray1, $inputArray2) {
	$result 	= array();
	$counter1 	= count($inputArray1);
	$counter2 	= count($inputArray2);
	$i = $j = $k = 0;
	do{
	    while (($inputArray1[$i] < $inputArray2[$j]) && ($i < $counter1)) {
	        $result[$k++] = $inputArray1[$i];
	        $i++;
	    }
	    while (($j < $counter2) && ($inputArray1[$i] > $inputArray2[$j])) {
	        $result[$k++] = $inputArray2[$j];
	        $j++;
	    }
	    while (($i < $counter1) && ($j < $counter2) && ($inputArray1[$i] == $inputArray2[$j])) {
	        $result[$k++] = $inputArray1[$i++];
	        $result[$k++] = $inputArray2[$j++];
	    }
	    if ($i == $counter1) {
	        while ($j < $counter2){
	            $result[$k++] = $inputArray2[$j++];
	        }
	    }
	    if ($j == $counter2) {
	        while ($i < $counter1) {
	            $result[$k++] = $inputArray1[$i++];
	        }
	    }
	} while ($k<$counter1+$counter2);
	return $result;
}

$taskDescription = 'Даны два упорядоченных по возрастанию массива. Образовать из этих двух массивов единый упорядоченный по возрастанию массив.';
$inputData = '$inputArray1 = array(0,2,4,6,8,10);<br>$inputArray2 = array(1,3,5,7,9,9);';

$inputArray1 = array(0,2,4,6,8,10);
$inputArray2 = array(1,3,5,7,9,9);
$mergedArray = mergeArrays($inputArray1, $inputArray2);
$result = implode(',', $mergedArray);
