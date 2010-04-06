<?php

class AdminController extends Controller{
	
	function index(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'index');
	}
	
	/**
	 * Show products for this usre
	 * @param array $params
	 * @return array
	 */
	function products($params){
		
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'products');
		
		//Get categories
		$categories = $this->db->getCategories();
		parent::set('categories', $categories);
		
		if(isset($params['id']) && !empty($params['id'])){
			//Get product
			$product = $this->db->getProduct($params);
			parent::set('product', $product);
		}
		//Get products
		$products = $this->db->getProducts($_SESSION['ws-user']['id']);
		parent::set('products', $products);
	
	}
	
	/**
	 * Submit product
	 * @param $params
	 * @return void
	 */
	function submitProducts($params){
		if($productId = $this->db->setProduct($params)){
			
			//Upload file 
			if($params['file']['error'] == 0) move_uploaded_file($params['file']['tmp_name'], UPLOAD_PATH.$productId."-".$params['file']['name']);
			parent::redirect('admin'.DS.'products', 'success');
		}else  parent::redirect('admin'.DS.'products', 'error');
	}
	
	/**
	 * Update product
	 * @param $params
	 * @return void
	 */
	function updateProducts($params){
		if($productId = $this->db->setProduct($params)){
			//Upload file
			if($params['file']['error'] == 0) move_uploaded_file($params['file']['tmp_name'], UPLOAD_PATH.$productId."-".$params['file']['name']);
			parent::redirect('admin'.DS.'products', 'success');
		}else  parent::redirect('admin'.DS.'products', 'error');
	}
	
	/**
	 * Get product
	 * @param array $params
	 * @return void
	 */
	function getProduct($params){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'products');
		if($product = $this->db->getProduct($params)) parent::set('product', $product);
		else parent::redirect('admin'.DS.'products', 'error');
	}
	
	/**
	 * Delete product
	 * @param array $params
	 * @return void
	 */
	function deleteProduct($params){
		if($this->db->deleteProduct($params)) parent::redirect('admin'.DS.'products', 'success');
		else  parent::redirect('admin'.DS.'products', 'error');
	}
	
	/**
	 * Orders
	 * @return unknown_type
	 */
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
	
	/**
	 * Submit suggestion
	 * @param $params
	 * @return void
	 */
	function submitSuggestion($params){
		if($this->db->setSuggestion($params)) parent::redirect('admin'.DS.'suggestions', 'success');
		else  parent::redirect('admin'.DS.'suggestions', 'error');
	}
}