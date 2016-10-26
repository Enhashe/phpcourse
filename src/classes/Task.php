<?php
/**
* 
*/
class Task {
	
	public $title;
	public $description;
	public $category;

	public function __construct($category, $title, $description){
		$this->category = $category;
		$this->title = $title;
		$this->description = $description;
	}

	public function run($category, $title){
/*		$count = $inputData['counter'];
		if (empty($count) || !is_int($count)) {
			$count = 1;
		}
		for ($i=0; $i < $count; $i++) {
			$result .= 'Hello World!<br>';
			}
		return $result;*/
		require __DIR__ . '/../tasks/' . $this->category . '/' . $this->title . '.php';
	}
}