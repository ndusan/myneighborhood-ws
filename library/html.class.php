<?php
/**
 * HTML 
 * @author ndusan
 *
 */
class HTML{
	/**
	 * Include JS
	 * @param $fileName
	 * @return string
	 */
	function js($fileName) {
		$data = "<script src='".JS_PATH.$fileName.".js' type='text/javascript'></script>\n";
		return $data;
	}
	
	/**
	 * Custom made css
	 * @param array $array
	 * @return string
	 */
	function customCss($array){
		$string = "";
		if(isset($array) && !empty($array))
    	for($i=0; $i<count($array); $i++)
			$string .= $this->css($array[$i]);
		return $string;
	}
	
	/**
	 * Custom made js
	 * @param array $array
	 * @return string
	 */
	function customJs($array){
		$string = "";
		if(isset($array) && !empty($array))
    	for($i=0; $i<count($array); $i++)
			$string .= $this->js($array[$i]);
		return $string;
	}
	
	/**
	 * Include CSS
	 * @param $fileName
	 * @return string
	 */
	function css($fileName) {
		$data = "<link href='".CSS_PATH.$fileName.".css' rel='stylesheet' type='text/css'/>\n";
		return $data;
	}
}