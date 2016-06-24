<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Default#home', 'default_home'],
		['GET', '/insertion', 'Insert#insertDb', 'insert_db'],
		['GET|POST', '/inscription', 'Signin#signin', 'signin_signin'],
	);