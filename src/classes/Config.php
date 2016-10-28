<?php
/**
* 
*/
class Config
{
	protected $config;

	function __construct($pathToConf)
	{
		$this->config = (file_exists($pathToConf)) ? require $pathToConf : [];
	}

	public function get($paramString)
	{
		return (isset($this->config[$paramString])) ? $this->config[$paramString] : NULL;
// 		$needParam = explode('.', $paramString);
// 		$confArray = $this->config;
// 		$confDepth = count($needParam);
// 		$result = (isset($confArray['db'][$paramString])) ? $confArray['db'][$paramString] : NULL ;
// 		$tmp = [];
// 		for ($i=0; $i <= $confDepth; $i++) { 
// 			if (isset($confArray[$needParam[$i]])) {
// 			 	$tmp = $confArray[$needParam[$i]];
// 			} else {
// 			 	$result = $tmp;
// 			 	break;
// 			}
// 		}
// /*		$category = $needParam[0];
// 		$parameter = $needParam[1];
// 		$result = $confArray[$category][$parameter];*/
// 		return $result;
	}
}
