<?php

class AdminModel extends Model{

	/**
	 * Get all products for this user + system products
	 * @param int $userId
	 * @return array
	 */
	function getProducts($userId){
		$query = sprintf("SELECT * FROM `products` WHERE `user_id`='%s' OR `user_id`='%s'",
						mysql_real_escape_string($userId),
						mysql_real_escape_string(0)
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
	
	function setProduct($params){
		if(!empty($params['name']) && $params['category']!=0 && !empty($params['price'])){
			if(empty($params['note'])) $params['note'] = '';
			$query = sprintf("INSERT INTO `products` SET `name`='%s', `category_id`='%s', `price`='%s', `note`='%s', `user_id`='%s'",
							mysql_real_escape_string($params['name']),
							mysql_real_escape_string($params['category']),
							mysql_real_escape_string($params['price']),
							mysql_real_escape_string($params['note']),
							mysql_real_escape_string($_SESSION['ws-user']['id'])
							);
			mysql_query($query);
			return mysql_insert_id();
		}else return false;
		print_r($params);
		exit;
	}
}