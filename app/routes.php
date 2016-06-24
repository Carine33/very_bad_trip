<?php
	
	$w_routes = array(

		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/page-quiz', 'Quiz#repondreQuiz', 'quiz_repondreQuiz'],
		['GET', '/insertion', 'Insert#insertDb', 'insert_db'],
		['GET|POST', '/page-admin', 'Users#selectUsers', 'users_selectUsers'],
		['GET', '/page-supprimer-user/[i:userid]', 'Users#supprimerUser', 'user_supprimerUser'],
		['GET|POST', '/inscription', 'Signin#signin', 'signin_signin'],
		['GET|POST', '/page-admin-user', 'Users#selectUsers', 'users_selectUsers'],
		['GET|POST', '/page-admin-dest', 'Users#selectDestinations', 'users_selectDestinations'],
		['GET', '/page-supprimer-user/[i:userid]', 'Users#supprimerUser', 'user_supprimerUser'],
		['GET', '/page-supprimer-destination/[i:destinationid]', 'Users#supprimerDestination', 'user_supprimerDestination'],
	);