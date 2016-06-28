<?php
	
	$w_routes = array(

		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/page-quiz', 'Quiz#repondreQuiz', 'quiz_repondreQuiz'],
		['GET', '/insertion', 'Insert#insertDb', 'insert_db'],
		['GET|POST', '/inscription', 'Signin#signin', 'signin_signin'],
		['GET|POST', '/page-admin-user', 'Users#selectUsers', 'users_selectUsers'],
		['GET|POST', '/page-admin-dest', 'Destination#selectDestinations', 'users_selectDestinations'],
		['GET', '/page-supprimer-user/[i:userid]', 'Users#supprimerUser', 'user_supprimerUser'],

		['GET', '/page-supprimer-destination/[i:destinationid]', 'Destination#supprimerDestination', 'destination_supprimerDestination'],
		['GET|POST', '/miseAJourUserParAdmin', 'Signin#updateSigninAdmin', 'signin_updateSigninAdmin'],
		['GET|POST', '/miseAJourUserParUser', 'Signin#updateSigninUser', 'signin_updateSigninUser'],

		['GET|POST', '/selectUser/[i:userid]', 'Signin#selectSignin', 'signin_selectSignin'],
		['GET|POST', '/selectUserParUser/[i:userid]', 'Signin#selectSigninUser', 'signin_selectSigninUser'],
		




		['GET', '/page-supprimer-destination/[i:destinationid]', 'Users#supprimerDestination', 'user_supprimerDestination'],
		['GET|POST', '/login', 'Login#login', 'login_login'],
		['GET|POST', '/logout', 'Login#logout', 'login_logout'],
		['GET|POST', '/admin', 'Admin#indexAdmin', 'admin_adminIndex'],



		['GET|POST', '/lost_password', 'Login#mylostpassword', 'login_mylostpassword'],
		['GET|POST', '/reset-password/[:email]/[:token]', 'Login#mylostpassword', 'login_mypassword'],
		['GET', '/page_de_test/[:email]', 'Login#lostPasswordTest', 'login_lostPasswordTest']


	);