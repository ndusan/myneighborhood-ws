<?php

class AdminController extends Controller{
	
	function index(){
		
		
		parent::set('page', 'index');
	}
	
	function products(){
		
		parent::set('page', 'products');
	}
	
	function orders(){
		
		parent::set('page', 'orders');	
	}
	
	function settings(){
		
		parent::set('page', 'settings');
	}
	
	function suggestions(){
		
		parent::set('page', 'suggestions');
	}
}