<?php

class UserModel extends Model{
	
	/**
	 * Get carousel images
	 * @param int $userId
	 * @return array
	 */
	public function getCarousel($userId){
		
		$query = sprintf("SELECT `products`.*, `categories`.`id` AS `category` FROM `products` INNER JOIN `categories` ON `products`.`category_id`=`categories`.`id` WHERE (`products`.`user_id`=0 OR `products`.`user_id`='%s') AND `products`.`image`!='' ORDER BY `products`.`id` DESC LIMIT 0, 10",
						mysql_real_escape_string($userId)
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res)<=0) return false;
		$array = array();
		
		while($row = mysql_fetch_assoc($res)) $array[] = $row;
		
		return $array;
	}
	
	/**
	 * Get all categories for this user
	 * @param int $userId
	 * @return array
	 */
	public function getCategories($userId){
		
		$query = sprintf("SELECT * FROM `categories`");
		$res = mysql_query($query);
		if(mysql_num_rows($res)<=0) return false;
		$array = array();
		
		while($row = mysql_fetch_assoc($res)) $array[] = $row;
		
		return $array;
	}
	
	/**
	 * Get products for this user
	 * @param int $catId
	 * @return array
	 */
	public function getProducts($catId, $userId){
		
		$query = sprintf("SELECT * FROM `products` WHERE `category_id`='%s' AND `user_id`='%s' ORDER BY `id` DESC",
						mysql_real_escape_string($catId),
						mysql_real_escape_string($userId)
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res)<=0) return false;
		$array = array();
		
		while($row = mysql_fetch_assoc($res)) $array[] = $row;
		
		return $array;
	}
	
	/**
	 * Get product for this user
	 * @param int $catId
	 * @return array
	 */
	public function getProduct($proId, $userId){
		
		$query = sprintf("SELECT * FROM `products` WHERE `id`='%s' AND `user_id`='%s' ORDER BY `id` DESC",
						mysql_real_escape_string($proId),
						mysql_real_escape_string($userId)
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res)<=0) return false;
		$array = array();
		
		return mysql_fetch_assoc($res);
		
	}
	
	/**
	 * Get products from basket for this user
	 * @param int $catId
	 * @return array
	 */
	public function getProductsFromBasket($userId){
		
		$query = sprintf("SELECT `products`.*, `orders`.`modif` FROM `products` INNER JOIN `orders` ON `products`.`id`=`orders`.`product_id` WHERE `orders`.`user_id`='%s'",
						mysql_real_escape_string($userId)
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res)<=0) return false;
		$array = array();
		
		while($row = mysql_fetch_assoc($res)) $array[] = $row;
		
		return $array;
	}
	
	public function getProductsFromSession($user){
		$orders = '';
		$sum = 0;
		
		if(isset($user['basket']) && !empty($user['basket'])){
			$orders.= "  AND `id` IN (";
			foreach($user['basket'] as $proId => $num) $orders .= $proId.(++$sum<count($user['basket']) ? ', ': '');
			$orders.= ")";
		}else return false;
		$query = sprintf("SELECT * FROM `products` WHERE `user_id`='%s' %s  ORDER BY `id` DESC",
						mysql_real_escape_string($user['id']),
						mysql_real_escape_string($orders)
						);
						
		$res = mysql_query($query);
		if(mysql_num_rows($res)<=0) return false;
		$array = array();
		
		while($row = mysql_fetch_assoc($res)){
			if(isset($user['basket'][$row['id']])) $row['quantity'] = $user['basket'][$row['id']];
			$array[] = $row;
		} 
		
		return $array;
	}
	
	/**
	 * Submit basket
	 * @param array $params
	 * @param int $userId
	 * @return array
	 */
	public function submitBasket($params, $userId){
		
		foreach($params['quantity'] as $id => $q){
			$query = sprintf("INSERT INTO `orders` SET `product_id`='%s', `user_id`='%s', `quantity`='%s'",
							mysql_real_escape_string($id),
							mysql_real_escape_string($userId),
							mysql_real_escape_string($q)
							);
			mysql_query($query);
		}
		return false;
		
	}
}