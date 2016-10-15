<?php 

function checkArrayItemsUnique($inputArray) {
	$arrayIsUnique = false;
	$arrayIsUnique = (count($inputArray) == count(array_unique($inputArray))) ? 'true' : 'false';
	return $arrayIsUnique;
}

$taskDescription = 'Определите, есть ли в массиве повторяющиеся элементы.';
$inputData = '$inputArray = array(\'one\',\'two\',\'three\',\'two\',\'one\',\'six\',\'seven\',\'three\');';


$inputArray = array('one','two','three','two','one','six','seven','three');
$checkArray = checkArrayItemsUnique($inputArray); 
$result = 'Array items is unique? '  . $checkArray;
?>