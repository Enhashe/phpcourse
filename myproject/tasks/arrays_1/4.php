<?php 

function checkArrayItemsUnique($inputArray) {
	$arrayIsUnique = false;
	$arrayIsUnique = (count($inputArray) == count(array_unique($inputArray))) ? 'true' : 'false';
	return $arrayIsUnique;
}

$inputArray = array('one','two','three','two','one','six','seven','three');
$result = checkArrayItemsUnique($inputArray); 

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
					echo "Array items is unique? " . $result;
				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
