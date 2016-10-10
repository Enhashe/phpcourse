<?php 
function arrayOf01($counter = 1) {
	$listOf01[] = 0;
	for ($i = 1; $i < $counter; $i++) { 
		$listOf01[] = ($i % 2 != 0) ? 1 : 0;
	}
	return $listOf01;
}
$result = arrayOf01(30); 
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
				<?php echo implode("\t" , $result) ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
