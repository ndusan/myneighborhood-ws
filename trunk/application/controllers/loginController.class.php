<?php
class LoginController extends Controller{
	
	function index(){
		
		//Example how to call DB method
		$this->db->example();
		
		//Example how to set variable/array
		$this->set('var', 'this is a sample');
		
		//parent::renderHTML();
		
		//Example for custom made js
		$this->defaultJs(array('first', 'second'));
	}
}