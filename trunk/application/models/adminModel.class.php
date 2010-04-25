<?php

class AdminModel extends Model{

	/**
	 * Get all products for this user + system products
	 * @param int $userId
	 * @return array
	 */
	function getProducts($userId){
		$query = sprintf("SELECT * FROM `products` WHERE `user_id`='%s' AND `status`=1",
						mysql_real_escape_string($userId)
						);
		$res_pr = mysql_query($query);
		$array = array();
		while($row = mysql_fetch_assoc($res_pr)){
			//Category
			$query = sprintf("SELECT * FROM `categories` WHERE `id`='%s'",
						mysql_real_escape_string($row['category_id'])
						);
			$res = mysql_query($query);
			$row_c = mysql_fetch_assoc($res);
			$row['category'] = $row_c['name'];
			//Added by
			if($row['user_id'] == 0){
				//System
				$row['addedby'] = 'System';
			}else{
				$query = sprintf("SELECT * FROM `users` WHERE `id`='%s'",
							mysql_real_escape_string($row['user_id'])
							);
				$res = mysql_query($query);
				$row_a = mysql_fetch_assoc($res);
				$row['addedby'] = $row_a['firstname']." ".$row_a['lastname'];
			}
		$array[] = $row;
		}
		return $array;
	}
	
	/**
	 * Get categories
	 * @param int $catId
	 * @return array
	 */
	function getCategories($catId=null){
		
		//Select add
		if($catId == null){
			$query = sprintf("SELECT * FROM `categories`");
			$res = mysql_query($query);
			return parent::result_to_array($res);
		}else{
			$query = sprintf("SELECT * FROM `categories` WHERE `id`='%s'",
							mysql_real_escape_string($catId)
							);
			$res = mysql_query($query);
			return mysql_fetch_assoc($res);
		}
	}
	
	/**
	 * Insert new product in system
	 * @param array $params
	 * @return boolean
	 */
	function setProduct($params){
		
		//Update or insert
		if(isset($params['id']) && !empty($params['id'])){
			if(!empty($params['product']) && $params['category']!=0 && !empty($params['price'])){
				if(empty($params['note'])) $params['note'] = '';
				$query = sprintf("UPDATE `products` SET `name`='%s', `category_id`='%s', `price`='%s', `note`='%s' WHERE `user_id`='%s' AND `id`='%s'",
								mysql_real_escape_string($params['product']),
								mysql_real_escape_string($params['category']),
								mysql_real_escape_string($params['price']),
								mysql_real_escape_string($params['note']),
								mysql_real_escape_string($_SESSION['ws-user']['id']),
								mysql_real_escape_string($params['id'])
								);
				mysql_query($query);
				
				//Update image if uploaded
				if($params['file']['tmp_name'] == 0){
					$query = sprintf("UPDATE `products` SET `image`='%s' WHERE `user_id`='%s' AND `id`='%s'",
									mysql_real_escape_string($params['file']['name']),
									mysql_real_escape_string($_SESSION['ws-user']['id']),
									mysql_real_escape_string($params['id'])
									);
					mysql_query($query);
				}
				return $params['id'];
			}else return false;	
		}else{
			if(!empty($params['product']) && $params['category']!=0 && !empty($params['price'])){
				if(empty($params['note'])) $params['note'] = '';
				$query = sprintf("INSERT INTO `products` SET `name`='%s', `category_id`='%s', `price`='%s', `note`='%s', `image`='%s', `user_id`='%s'",
								mysql_real_escape_string($params['product']),
								mysql_real_escape_string($params['category']),
								mysql_real_escape_string($params['price']),
								mysql_real_escape_string($params['note']),
								mysql_real_escape_string($params['file']['name']),
								mysql_real_escape_string($_SESSION['ws-user']['id'])
								);
				mysql_query($query);
				return mysql_insert_id();
			}else return false;
		}
	}
	
	/**
	 * Get selected product for user on system
	 * @param array $params
	 * @return array or boolean
	 */
	function getProduct($params){
		if(!empty($params['id'])){
			$query = sprintf("SELECT * FROM `products` WHERE `id`='%s' AND `user_id`='%s'",
							mysql_real_escape_string($params['id']),
							mysql_real_escape_string($_SESSION['ws-user']['id'])
							);
			$res = mysql_query($query);
			if(mysql_num_rows($res)<=0) return false;
			return mysql_fetch_assoc($res);
		}else return false;
	}
	
	/**
	 * Disable selected product
	 * @param $params
	 * @return boolean
	 */
	function deleteProduct($params){
		if(!empty($params['id'])){
			$query = sprintf("UPDATE `products` SET `status`='0' WHERE `id`='%s' AND `user_id`='%s'",
							mysql_real_escape_string($params['id']),
							mysql_real_escape_string($_SESSION['ws-user']['id'])
							);
			$res = mysql_query($query);
			return true;
		}else return false;
	}
	
/**
	 * Insert new suggestion in system
	 * @param array $params
	 * @return boolean
	 */
	function setSuggestion($params){
	
		if(!empty($params['text'])){
			$query = sprintf("INSERT INTO `suggestions` SET `text`='%s', `user_id`='%s'",
							mysql_real_escape_string($params['text']),
							mysql_real_escape_string($_SESSION['ws-user']['id'])
							);
			mysql_query($query);
			return true;
		}else return false;
	}
	
	/**
	 * Get orders
	 * @param int $userId
	 * @return array
	 */
	public function getOrders($userId){
		
		$query = sprintf("SELECT `products`.*, `orders`.`quantity` FROM `products` INNER JOIN `orders` ON `products`.`id`=`orders`.`product_id` WHERE `orders`.`user_id`='%s'",
						mysql_real_escape_string($userId)
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res)<=0) return false;
		$array = array();
		
		while($row = mysql_fetch_assoc($res)) $array[] = $row;
		
		return $array;
	}
	
	/**
	 * Submit settings
	 * @param array $params
	 * @param int $userId
	 * @return boolean
	 */
	public function submitSettings($params, $userId){
		
		$query = sprintf("UPDATE `users` SET `firstname`='%s', `lastname`='%s', `address`='%s', `code`='%s', `city`='%s' WHERE `id`='%s'",
						mysql_real_escape_string($params['firstname']),
						mysql_real_escape_string($params['lastname']),
						mysql_real_escape_string($params['address']),
						mysql_real_escape_string($params['code']),
						mysql_real_escape_string($params['city']),
						mysql_real_escape_string($userId)
						);
		mysql_query($query);
		
		//Change password if new entered
		if(!empty($params['password'])){
			$query = sprintf("UPDATE `users` SET `password`=PASSWORD('%s') WHERE `id`='%s'",
							mysql_real_escape_string($params['password']),
							mysql_real_escape_string($userId)
							);
			mysql_query($query);
		}
		return true;
	}
}