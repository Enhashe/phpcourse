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
	foreach ($inputArray as $key => $value) {
		echo "$listCounter. ";
		foreach ($inputArray[$key] as $key2 => $value2) {
			if ($key2 == 'author' || ($key2 == 'title')) {
				echo $value2 . '. ';
			}
		}
		$listCounter++;
		echo '<br>';
	}
	return true;
}

$file = "../../files/input/functions_task_5_input.txt";
$delimiter = '|';
$keys = array("title","author","print","status");
$status = 0;

$result1 = fileToArray($file, $delimiter, $keys);
$result2 = bookState($result1,$status);


?>

<?php require '../../view/header.php'; ?>
<div class="content">
	<?php require '../../view/menu.php'; ?>
		<div class="workarea">
			<div><h1>Loops</h1></div>
			<div class="task-item">
				Task:<br>
				...
			</div>
			<div class="task-item">
				Input Data:<br>
				...
			</div>
			<div class="task-item">
				Output Data:<br>
				<?php 
					echo '<b>Task4.1</b><br>';
					var_dump($result1);
					echo '<b>Task4.2</b><br>';
					var_dump($result2);
					echo '<b>Task4.3</b><br>';
					printBookList($result1);

				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
