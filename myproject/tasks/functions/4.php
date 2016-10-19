<?php 
function fileToArray($file, $delimiter = '|', $keys) {
	$arrayFromFile = file($file);
	foreach ($arrayFromFile as $key => $value) {
		$arrayFromFile[$key] = explode($delimiter, $value);
		foreach ($arrayFromFile[$key] as $key2 => $value2) {
			$arrayFromFile[$key][$keys[$key2]] = $value2;
			unset($arrayFromFile[$key][$key2]);
		}
	}
	return $arrayFromFile;
}

function bookState($inputArray, $state) {
	$outArray = array();
	foreach ($inputArray as $key => $value) {
		foreach ($inputArray[$key] as $key2 => $value2) {
			if ($key2 == 'status' && ($inputArray[$key][$key2] == $state)) {
				$outArray[] = $inputArray[$key];
			}
		}
	}
	return $outArray;
}

function printBookList($inputArray) {
	$outArray = array();
	$listCounter = 1;
	$result = '';
	foreach ($inputArray as $key => $value) {
		$result .= "$listCounter.";
		foreach ($inputArray[$key] as $key2 => $value2) {
			if ($key2 == 'author' || ($key2 == 'title')) {
				$result .= " $value2.";
			}
		}
		$listCounter++;
		$result .= "<br>";
	}
	return $result;
}

function var_dump_ret($mixed = null) {
  ob_start();
  var_dump($mixed);
  $content = ob_get_contents();
  ob_end_clean();
  return $content;
}

$taskDescription = <<<EOD
Имеется файл с содержимым (книга|автор|издательство|состояние) например:<br>
PHP 5 объектно-ориентированное программирование|Шишов Алексей|БХВ|1<br>
MySQL: неподъемная книга разработчика|Шишов Алексей|БХВ|0<br>
Справочник всего Г в России|Пупкин Вася|Пупкин и к0|1<br>
Книга для домохозяек|Хозяйка Лидия|Домхоз|1<br>
Телевидение в каждой коморке|Телестанция СССР|КВС+|0<br>
Нужно написать 3 функции.<br>
1) Функция, считывающая из файла построчно данные и разбила их на многомерный массив вида:<br>
array(<br>
 array(title => [книга], author => [автор], print => [издательство], status => [состояние]),<br>
 array(title => [книга], author => [автор], print => [издательство], status => [состояние]),<br>
 array(title => [книга], author => [автор], print => [издательство], status => [состояние]),<br>
);<br>
Выходные данные: массив книг.<br>
2) Функция, обрабатывающая массив книг и возвращающая книги с запрошенным состоянием. Поле состояния отвечает за публикацию, опубликована книга или нет.<br>
3) Функция, выводящая список книг в удобочитаемой форме.
EOD;
$inputData = <<<'EOD'
$file = "../../files/input/functions_task_5_input.txt";<br>
$delimiter = '|';<br>
$keys = array("title","author","print","status");<br>
$status = 0;
EOD;

$file = "files/input/functions_task_5_input.txt";
$delimiter = '|';
$keys = array("title","author","print","status");
$status = 0;

$arrayOfBooks = fileToArray($file, $delimiter, $keys);
$arrayOfBookStates = 

$outputFunc1 = var_dump_ret($arrayOfBooks);
$outputFunc2 = var_dump_ret(bookState($arrayOfBooks,$status));
$outputFunc3 = printBookList($arrayOfBooks);

$result = <<<EOD
$outputFunc1<br>
$outputFunc2<br>
$outputFunc3
EOD;
