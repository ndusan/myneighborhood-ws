<?php

class AdminController extends Controller{
	
	function index(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'index');
	}
	
	function products(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'products');
		
		//Get categories
		$categories = $this->db->getCategories();
		parent::set('categories', $categories);
		
		//Get products
		$products = $this->db->getProducts($_SESSION['ws-user']['id']);
		parent::set('products', $products);
	}
	
	function submitProducts($params){
		if($this->db->setProduct($params)) parent::redirect('products', 'success');
		else  parent::redirect('products', 'error');
	}
	
	function orders(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'orders');	
	}
	
	function settings(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'settings');
	}
	
	function suggestions(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'suggestions');
	}
}