<?php

class AdminController extends Controller{
	
	function index(){
		parent::checkSession();
		parent::set('page', 'index');
	}
	
	function products(){
		parent::checkSession();
		parent::set('page', 'products');
	}
	
	function orders(){
		parent::checkSession();
		parent::set('page', 'orders');	
	}
	
	function settings(){
		parent::checkSession();
		parent::set('page', 'settings');
	}
	
	function suggestions(){
		parent::checkSession();
		parent::set('page', 'suggestions');
	}
}