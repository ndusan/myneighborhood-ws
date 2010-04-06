<?php
/**
 * Routing system
 */
$routes = array(
				//Login page
				array(	'url' 			=> '/^\/?$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'default'
				),
				array(	'url' 			=> '/^submit\/$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'submit', 
					  	'layout' 		=> 'empty'
				),
				//Forgot password
				array(	'url' 			=> '/^forgot\/?$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'forgot', 
					  	'layout' 		=> 'default'
				),
				array(	'url' 			=> '/^forgot\/submit\/$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'submit_forgot', 
					  	'layout' 		=> 'empty'
				),
				//Register
				array(	'url' 			=> '/^register\/?$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'register', 
					  	'layout' 		=> 'default'
				),
				array(	'url' 			=> '/^register\/submit\/$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'submit_register', 
					  	'layout' 		=> 'empty'
				),
				//Admin panel
				array(	'url' 			=> '/^admin\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'admin'
				),
				//Admin panel - products
				array(	'url' 			=> '/^admin\/products\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'products', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/products\/submit\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'submitProducts', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/products\/submit\/(?P<id>\d*)\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'updateProducts', 
					  	'layout' 		=> 'empty'
				),
				array(	'url' 			=> '/^admin\/products\/(?P<id>\d*)\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'products', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/products\/(?P<id>\d*)\/delete\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'deleteProduct', 
					  	'layout' 		=> 'empty'
				),
				//Admin panel - orders
				array(	'url' 			=> '/^admin\/orders\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'orders', 
					  	'layout' 		=> 'admin'
				),
				//Admin panel - settings
				array(	'url' 			=> '/^admin\/settings\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'settings', 
					  	'layout' 		=> 'admin'
				),
				//Admin panel - suggestions
				array(	'url' 			=> '/^admin\/suggestions\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'suggestions', 
					  	'layout' 		=> 'admin'
				),
				array(	'url' 			=> '/^admin\/suggestions\/submit\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'submitSuggestion', 
					  	'layout' 		=> 'empty'
				),
		  );