<?php
class LoginModel extends Model{

	/**
	 * Get login permition
	 * @param array $params
	 * @return boolean
	 */
	function getLoginUser($params){
		
		$query = sprintf("SELECT * FROM `users` WHERE `email`='%s' AND `password`=PASSWORD('%s') AND `status`=1",
						mysql_real_escape_string($params['email']),
						mysql_real_escape_string($params['password'])
						);
		$res = mysql_query($query);
		
		if(mysql_num_rows($res)>0){
			//We have hit
			$_SESSION['ws-user'] = mysql_fetch_assoc($res);
			return true;
		}else return false;
	}
	
	/**
	 * Get data for selected email
	 * @param array $params
	 * @return array or boolean
	 */
	function getForgotUser($params){
		$query = sprintf("SELECT * FROM `users` WHERE `email`='%s'",
						mysql_real_escape_string($params['email'])
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res)>0){
			//We have hit
			$newPassword = parent::passwordGenerator();
			$row = mysql_fetch_assoc($res);
			$query = sprintf("UPDATE `users` SET `password`=PASSWORD('%s') WHERE `email`='%s'",
							mysql_real_escape_string($newPassword),
							mysql_real_escape_string($params['email'])
							);
			mysql_query($query);
			$row['password'] = $newPassword;
			return $row;
		}else return false;
	}
	
	/**
	 * Set new user in DB
	 * @param array $params
	 * @return boolean or array
	 */
	function setNewUser($params){
		//Check if email is valid and free
		if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $params['email'])) return false;

		$query = sprintf("SELECT * FROM `users` WHERE `email`='%s'",
						mysql_real_escape_string($params['email'])
						);
		$res = mysql_query($query);
		if(mysql_num_rows($res)<=0){
			//Mail is free
			$query = sprintf("INSERT INTO `users` SET `firstname`='%s', `lastname`='%s', `email`='%s', `password`=PASSWORD('%s')",
							mysql_real_escape_string($params['firstname']),
							mysql_real_escape_string($params['lastname']),
							mysql_real_escape_string($params['email']),
							mysql_real_escape_string($params['password'])
							);
			mysql_query($query);
			$user_id = mysql_insert_id();
			$params['id'] = $user_id;
			$_SESSION['ws-user'] = $params;
			return $params;
		}else return false;
	}
	
}