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
				array(	'url' 			=> '/^admin\/settings\/submit\/?$/', 
						'controller' 	=> 'admin', 
					  	'action' 		=> 'submitSettings', 
					  	'layout' 		=> 'ajax'
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
				//Webshop
				array(	'url' 			=> '/^user\/?$/', 
						'controller' 	=> 'user', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'user'
				),
				//Webshop - basket
				array(	'url' 			=> '/^user\/basket\/?$/', 
						'controller' 	=> 'user', 
					  	'action' 		=> 'basket', 
					  	'layout' 		=> 'user'
				),
				//Webshop - product
				array(	'url' 			=> '/^user\/category\/(?P<cat_id>\d*)\/?$/', 
						'controller' 	=> 'user', 
					  	'action' 		=> 'product', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^user\/category\/(?P<cat_id>\d*)\/(?P<pro_id>\d*)\/?$/', 
						'controller' 	=> 'user', 
					  	'action' 		=> 'product', 
					  	'layout' 		=> 'user'
				),
				array(	'url' 			=> '/^user\/basket\/ajax-set-basket\/?$/', 
						'controller' 	=> 'user', 
					  	'action' 		=> 'setBasket', 
					  	'layout' 		=> 'ajax'
				),
				array(	'url' 			=> '/^user\/basket\/(?P<id>\d*)\/remove\/?$/', 
						'controller' 	=> 'user', 
					  	'action' 		=> 'removeFromBasket', 
					  	'layout' 		=> 'ajax'
				),
				array(	'url' 			=> '/^user\/basket\/submit\/?$/', 
						'controller' 	=> 'user', 
					  	'action' 		=> 'submitBasket', 
					  	'layout' 		=> 'ajax'
				),
		  );