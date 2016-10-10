<?php 
function arrayN2($counter = 1) {
	$listN2 = NULL;
	for ($i=0; $i < $counter; $i++) { 
		$listN2[$i] = $i * $i;
	}
	return $listN2;
}

$result = arrayN2(10); 
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
				<?php echo implode("\t", $result) ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
