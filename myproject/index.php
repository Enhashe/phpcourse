
<?php 
	require_once 'lib/index.php';
	require 'lib/functions.php';
	$pageCode = 'index';
	$pageParameters = [];
	$urlChunks = [];
	//$path = $_GET['path'];
	if (!empty($_GET['path'])) {
		$urlChunks = explode('/', $_GET['path']);
		if (!empty($urlChunks[0])) {
			$pageCode = $urlChunks[0];
		}
		if (!empty($urlChunks[1])) {
			$pageParameters = explode('-', $urlChunks[1]);
		}
	}

	$pathToView = __DIR__ . '/view/pages/' . $pageCode . '.php';
	if (!file_exists($pathToView)) {
		$pageCode = '404';
		$pathToView = __DIR__ . '/view/pages/' . $pageCode . '.php';
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
	/*if (!empty($_GET['path'])) {
		
		require 'lib/functions.php';
		
		$isMainPage = true;
		$path = $_GET['path'];
		$sectionChunks = explode('-', $path);
		$taskStructure = array(
				'loops' => array(
					'title' => 'Loops',
					'tasks' => array('1','2','3','4','5','6')
				),
				'arrays_1' => array(
					'title' => 'Arrays_1',
					'tasks' => array('1','2','3','4','5','6','7')
				),
				'arrays_2' => array(
					'title' => 'Arrays_2',
					'tasks' => array('1','2','3','4','5'),
				),
				'functions' => array(
					'title' => 'Functions',
					'tasks' => array('1','2','3','4','5')
				)
			);

		$section = $sectionChunks[0];
		$task = $sectionChunks[1];
		$sectionData = $taskStructure[$section];
		$titleSection = $sectionData['title'];
		$titleTask = $sectionData['tasks'][$task - 1];
		$pageTitle = array($titleSection, $titleTask);

		require __DIR__ . '/' . $section . '/' . $task . '.php';
		
	} else {
		$isMainPage = false;
	}*/
?>
<?php require 'view/header.php'; ?>
<div class="content">
	<?php require 'view/menu.php'; ?>
		<div class="workarea">
			<?php require $pathToView; ?>
		</div>
	</div>
<?php require 'view/footer.php'; ?>



