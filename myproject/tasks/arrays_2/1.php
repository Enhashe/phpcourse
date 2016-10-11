<!-- <?php 
/*function arrayDuplicateRemove($count = 1) {

}*/

?> -->

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

				$list1 = array(1,2,4,4,2,5);
				echo 'Base array: ' . implode($list1) . '<br>';
				$list1 = array_unique($list1);
				echo 'Modified array: ' . implode($list1);

				?>
			</div>
			<div class="task-item">
				Code:<br>
				...
			</div>
		</div>
	</div>
<?php require '../../view/footer.php'; ?>
