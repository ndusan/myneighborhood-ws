<?php
/**
 * Default controller
 * @author ndusan
 *
 */
class Controller{

	protected $_template;
	protected $db;
	
	public $renderHTML = 0;
	
	/**
	 * Constructor
	 * @param String $controller
	 * @param String $action
	 * @param String $layout
	 * @return void
	 */
	function __construct($controller, $action, $layout){
		
		//Model file
		$modelFile = strtolower($controller)."Model.class.php";
		$modelName = ucfirst($controller)."Model";
		
		//Create model object
		if(file_exists('library'.DS.'model.class.php')) require_once 'library'.DS.'model.class.php';
		
		if(file_exists(MODEL_PATH.$modelFile)) require_once MODEL_PATH.$modelFile;
		$this->db = new $modelName;
		
		//Create template object
		if(file_exists('library'.DS.'template.class.php')) require_once 'library'.DS.'template.class.php';
		$this->_template = new Template($controller, $action, $layout);
	}
	
	/**
	 * Set variables
	 * @param String $name
	 * @param Array $value
	 * @return void
	 */
	function set($name, $value) {
		$this->_template->set($name, $value);
	}
	
	/**
	 * Default array of css files
	 * @param $array
	 * @return void
	 */
	function defaultCss($array){
		$this->_template->defaultCss($array);
	}
	
	/**
	 * Default array of js files
	 * @param $array
	 * @return void
	 */
	function defaultJs($array){
		$this->_template->defaultJs($array);
	}
	
	/**
	 * Desctructor
	 * @return void
	 */
	function __destruct(){
		$this->_template->render($this->renderHTML);
	}
	
	/**
	 * Set to render HTML in Ajax call
	 * @return void
	 */
	function renderHTML(){
		$this->renderHTML = 1;
	}
	
}