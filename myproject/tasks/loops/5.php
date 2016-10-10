<?php 
function naturalNumbers($first,$last) {
	$result = '';
	for ($i = $first; $i <= $last ; $i++) { 
		if ($i % 7 == 1 && 2 && 5) {
			$result .= "$i\t";
		}
	}
	return $result;
}

$first = 35;
$last = 87;
$result = naturalNumbers($first,$last); 

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
				<?php echo $result; ?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
