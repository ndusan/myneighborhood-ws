<?php
/**
 * Routing system
 */
$routes = array(
				//Login page
				array(	'url' 			=> '/^$/', 
						'controller' 	=> 'login', 
					  	'action' 		=> 'index', 
					  	'layout' 		=> 'ajax'
				)
		  );