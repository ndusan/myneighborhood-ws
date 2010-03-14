<?php
class LoginController extends Controller{
	
	function index(){}
	
	function submit($params){
		
		parent::redirect('', 'error');
	}
	
	function forgot(){}
	
	function submit_forgot(){
		parent::redirect('forgot', 'error');
	}
	
	function register(){}
	
	function submit_register(){
		parent::redirect('register', 'error');
	}
}