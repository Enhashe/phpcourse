<?php 
function mergeArrays($inputArray1, $inputArray2) {
	$result = array();
	do{
	    while (($inputArray1[$i] < $inputArray2[$j]) && ($i < $n1)) {
	        $result[$k++] = $inputArray1[$i];
	        $i++;
	    }
	    while ($inputArray1[$i] > $inputArray2[$j] && ($j < $n2)) {
	        $result[$k++] = $inputArray2[$j];
	        $j++;
	    }
	    while ($inputArray1[$i] == $inputArray2[$j] && ($i < $n1) && ($j < $n2)) {
	        $result[$k++] = $inputArray1[$i++];
	        $result[$k++] = $inputArray2[$j++];
	    }
	    if ($i == $n1) {
	        while ($j < $n2){
	            $result[$k++] = $inputArray2[$j++];
	        }
	    }
	    if ($j == $n2) {
	        while ($i < $n1) {
	            $result[$k++] = $inputArray1[$i++];
	        }
	    }
	}
	return $result;
}

$result = sayHelloWorld(10); 
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
				<?php echo $result ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
