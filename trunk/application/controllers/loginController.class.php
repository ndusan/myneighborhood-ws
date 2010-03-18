<?php
class LoginController extends Controller{
	
	/**
	 * Login page
	 * @return unknown_type
	 */
	function index(){}
	
	/**
	 * Submit login page
	 * @param $params
	 * @return void
	 */
	function submit($params){
		if($this->db->getLoginUser($params)) parent::redirect('admin', '');
		else parent::redirect('', 'error');
	}
	
	/**
	 * Forgot passowrd
	 * @return unknown_type
	 */
	function forgot(){}
	
	/**
	 * Submit forgot password
	 * @return void
	 */
	function submit_forgot(){
		if($data = $this->db->getForgotUser($params)){
			//Send email with data
			parent::sendEmail($data);
			parent::redirect('forgot', 'success');
		}else parent::redirect('forgot', 'error');
	}
	
	/**
	 * Registration form
	 * @return unknown_type
	 */
	function register(){}
	
	/**
	 * Set new user
	 * @param $params
	 * @return void
	 */
	function submit_register($params){
		if($data = $this->db->setNewUser($params)){
			//Send email with data
			parent::sendEmail($data);
			parent::redirect('admin', 'success');
		}else parent::redirect('register', 'error');
	}
}