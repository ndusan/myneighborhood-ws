<?php

class UserController extends Controller{
	
	/**
	 * Get carousel images (this user + system products)
	 * @return array
	 */
	public function getCarousel(){
		return $this->db->getCarousel($_SESSION['ws-user']['id']);
	}
	
	/**
	 * Get all categories
	 * @return array
	 */
	public function getCategories(){
		return $this->db->getCategories($_SESSION['ws-user']['id']);
	}
	
	public function index(){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'index');
		//Get carousel images
		parent::set('carousel', self::getCarousel());
		//Get categories
		parent::set('categories', self::getCategories());
	}
	
	/**
	 * Go to your basket
	 * @param array $params
	 * @return array
	 */
	public function basket($params){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', 'basket');
		
		//Get carousel images
		parent::set('carousel', self::getCarousel());
		//Get categories
		parent::set('categories', self::getCategories());
		
		//Get products from basket FROM SESSION
		parent::set('products', $this->db->getProductsFromSession($_SESSION['ws-user']));
		
	}
	
	/**
	 * Product list
	 * @param array $params
	 * @return array
	 */
	public function product($params){
		$info = parent::userInfoAndSession();
		parent::set('info', $info);
		parent::set('page', $params['cat_id']);
		
		//Get carousel images
		parent::set('carousel', self::getCarousel());
		//Get categories
		parent::set('categories', self::getCategories());
		//Set category
		parent::set('category', $params['cat_id']);
		
		if(isset($params['pro_id']) && !empty($params['pro_id'])){
			parent::set('product', $this->db->getProduct($params['pro_id'], $_SESSION['ws-user']['id']));
			parent::set('more', 'product');
		}else{
			//Get all product from this category
			parent::set('products', $this->db->getProducts($params['cat_id'], $_SESSION['ws-user']['id']));
			parent::set('more', '');
		}
	}
	
	/**
	 * Set basket
	 * @param array $params
	 * @return array
	 */
	public function setBasket($params){
		
		//Set in session
		$_SESSION['ws-user']['basket'][$params['id']] = $params['num'];
	}
	
	/**
	 * Remove from basket
	 * @param int $params
	 * @return void
	 */
	public function removeFromBasket($params){
		unset($_SESSION['ws-user']['basket'][$params['id']]);
		parent::redirect('user'.DS.'basket', 'success');
	}
	
	/**
	 * Submit basket
	 * @param array $params
	 * @return void
	 */
	public function submitBasket($params){
		//Make order
		$this->db->submitBasket($params, $_SESSION['ws-user']['id']);
		//Unset session
		unset($_SESSION['ws-user']['basket']);
		parent::redirect('user', 'success');
	}
}