<?php
/**
 * Routing system
 */
$routes = array(
				//Login page
				array(	'url' 			=> '/^$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'default'
				),
				array(	'url' 			=> '/^submit\/$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'default'
				),
				//Forgot password
				array(	'url' 			=> '/^forgot\/$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'forgot', 
					  	'layout' 		=> 'default'
				),
				array(	'url' 			=> '/^forgot\/submit\/$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'submit_forgot', 
					  	'layout' 		=> 'default'
				),
				//Register
				array(	'url' 			=> '/^register\/$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'register', 
					  	'layout' 		=> 'default'
				),
				array(	'url' 			=> '/^register\/submit\/$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'submit_register', 
					  	'layout' 		=> 'default'
				),
		  );