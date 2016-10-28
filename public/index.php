
<?php 
	require '../src/lib/index.php';
	require '../src/lib/functions.php';
	require '../src/classes/Config.php';
	$pageCode = 'index';
	$pageParameters = [];
	$urlChunks = [];
	if (!empty($_GET['path'])) {
		$urlChunks = explode('/', $_GET['path']);
		if (!empty($urlChunks[0])) {
			$pageCode = $urlChunks[0];
		}
		if (!empty($urlChunks[1])) {
			$pageParameters = explode('-', $urlChunks[1]);
		}
	}

	$pathToView = __DIR__ . '/../src/view/pages/' . $pageCode . '.php';
	if (!file_exists($pathToView)) {
		$pageCode = '404';
		$pathToView = __DIR__ . '/../src/view/pages/' . $pageCode . '.php';
	}

	switch ($pageCode) {
		case 'tasks':
			$section = (!empty($pageParameters[0])) ? $pageParameters[0] : '';
			$taskNumber = (!empty($pageParameters[1])) ? $pageParameters[1] : '';
			$pageData = getTask($section, $taskNumber);
			break;
		default:
	
			break;
	}
?>
<?php require '../src/view/header.php'; ?>
<div class="content">
	<?php require '../src/view/menu.php'; ?>
	<div class="workarea">
		<?php require $pathToView; ?>
	</div>
</div>
<?php require '../src/view/footer.php'; ?>
