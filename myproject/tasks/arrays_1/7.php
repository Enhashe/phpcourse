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

$inputArray = array(1,2,3,4,1,6,7);
$result = possibilityCheck($inputArray); 

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
				<?php echo $result  ? 'true' : 'false'; ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
