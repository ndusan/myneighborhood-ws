<?php

class AdminController extends Controller{
	
	public function index(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'index');
	}
	
	/**
	 * Show products for this usre
	 * @param array $params
	 * @return array
	 */
	public function products($params){
		
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
	public function submitProducts($params){
		if($productId = $this->db->setProduct($params)){
			//Upload file 
			if($params['file']['error'] == 0){
				move_uploaded_file($params['file']['tmp_name'], UPLOAD_PATH.$productId."-".$params['file']['name']);
				chmod(UPLOAD_PATH.$productId."-".$params['file']['name'], 644);	
			}
			parent::redirect('admin'.DS.'products', 'success');
		}else  parent::redirect('admin'.DS.'products', 'error');
	}
	
	/**
	 * Update product
	 * @param $params
	 * @return void
	 */
	public function updateProducts($params){
		if($productId = $this->db->setProduct($params)){
			//Upload file
			if($params['file']['error'] == 0){
				move_uploaded_file($params['file']['tmp_name'], UPLOAD_PATH.$productId."-".$params['file']['name']);
				chmod(UPLOAD_PATH.$productId."-".$params['file']['name'], 644);	
			}
			parent::redirect('admin'.DS.'products', 'success');
		}else  parent::redirect('admin'.DS.'products', 'error');
	}
	
	/**
	 * Get product
	 * @param array $params
	 * @return void
	 */
	public function getProduct($params){
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
	public function deleteProduct($params){
		if($this->db->deleteProduct($params)) parent::redirect('admin'.DS.'products', 'success');
		else  parent::redirect('admin'.DS.'products', 'error');
	}
	
	/**
	 * Orders
	 * @return unknown_type
	 */
	public function orders(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'orders');	
		
		parent::set('orders', $this->db->getOrders($_SESSION['ws-user']['id']));
	}
	
	/**
	 * Get settings for this user
	 * @return array
	 */
	public function settings(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'settings');
	}
	
	/**
	 * Submit settings
	 * @param array $params
	 * @return void
	 */
	public function submitSettings($params){
		$info = parent::userInfoAndSession();
		
		$this->db->submitSettings($params, $_SESSION['ws-user']['id']);
		parent::redirect('admin'.DS.'settings', 'success');
		
	}
	
	/**
	 * Page with suggestions
	 * @return void
	 */
	public function suggestions(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'suggestions');
	}
	
	/**
	 * Submit suggestion
	 * @param $params
	 * @return void
	 */
	public function submitSuggestion($params){
		if($this->db->setSuggestion($params)) parent::redirect('admin'.DS.'suggestions', 'success');
		else  parent::redirect('admin'.DS.'suggestions', 'error');
	}
}