<?php
	
	$w_routes = array(

		['GET|POST', '/', 'Default#home', 'default_home'],


		['GET|POST', '/page-quiz', 'Quiz#repondreQuiz', 'quiz_repondreQuiz'],

		['GET|POST', '/page-resultat', '', 'quiz_resultat'],




		['GET', '/insertion', 'Insert#insertDb', 'insert_db'],
		['GET|POST', '/inscription', 'Signin#signin', 'signin_signin'],

		['GET|POST', '/page-admin-user', 'Users#selectUsers', 'users_selectUsers'],
		['GET|POST', '/page-admin-dest', 'DestinationAdmin#selectDestinations', 'destinationAdmin_selectDestinations'],

		['GET|POST', '/page-admin-event', 'DestinationAdmin#selectEvenement', 'destinationAdmin_selectEvenement'],

		['GET|POST', '/page-admin-flora', 'DestinationAdmin#selectFlora', 'destinationAdmin_selectFlora'],


		['GET|POST', '/page-admin-gastronomy', 'DestinationAdmin#selectGastronomy', 'destinationAdmin_selectGastronomy'],



		['GET|POST', '/page-admin-monument', 'DestinationAdmin#selectMonument', 'destinationAdmin_selectMonument'],

		['GET|POST', '/page-admin-film', 'DestinationAdmin#selectFilm', 'destinationAdmin_selectFilm'],

		['GET|POST', '/page-admin-music', 'DestinationAdmin#selectMusic', 'destinationAdmin_selectMusic'],


		['GET|POST', '/page-admin-pays', 'DestinationAdmin#selectPays', 'destinationAdmin_selectPays'],
















		['GET', '/page-supprimer-user/[i:userid]', 'Users#supprimerUser', 'user_supprimerUser'],

		['GET', '/page-supprimer-destination/[i:destinationid]', 'Destination#supprimerDestination', 'destination_supprimerDestination'],
		['GET|POST', '/miseAJourUserParAdmin', 'Signin#updateSigninAdmin', 'signin_updateSigninAdmin'],
		['GET|POST', '/miseAJourUserParUser', 'Signin#updateSigninUser', 'signin_updateSigninUser'],

		['GET|POST', '/selectUser/[i:userid]', 'Signin#selectSignin', 'signin_selectSignin'],
		['GET|POST', '/selectUserParUser/[i:userid]', 'Signin#selectSigninUser', 'signin_selectSigninUser'],
		
		['GET', '/page-supprimer-destination/[i:destinationid]', 'Users#supprimerDestination', 'user_supprimerDestination'],

		['GET', '/page-supprimer-event/[i:eventid]', 'DestinationAdmin#supprimerEvenement', 'destinationAdmin_supprimerEvenement'],


		['GET', '/page-supprimer-flora/[i:floraid]', 'DestinationAdmin#supprimerFlora', 'destinationAdmin_supprimerFlora'],


		['GET', '/page-supprimer-gastronomy/[i:gastronomyid]', 'DestinationAdmin#supprimerGastronomy', 'destinationAdmin_supprimerGastronomy'],


		['GET', '/page-supprimer-monument/[i:monumentid]', 'DestinationAdmin#supprimerMonument', 'destinationAdmin_supprimerMonument'],







		['GET', '/page-supprimer-movie/[i:movieid]', 'DestinationAdmin#supprimerMovie', 'destinationAdmin_supprimerMovie'],


		['GET', '/page-supprimer-music/[i:musicid]', 'DestinationAdmin#supprimerMusic', 'destinationAdmin_supprimerMusic'],







		['GET|POST', '/login', 'Login#login', 'login_login'],
		['GET|POST', '/logout', 'Login#logout', 'login_logout'],
		['GET|POST', '/admin', 'Admin#indexAdmin', 'admin_adminIndex'],



		['GET|POST', '/lost_password', 'Login#mylostpassword', 'login_mylostpassword'],
		['GET|POST', '/reset-password/[*:email]/[:token]', 'Login#mylostpasswordDeux', 'login_mypassword'],
		


		['GET|POST', '/creer-destination', 'DestinationAdmin#insererDestination', 'DestinationAdmin_insererDestination'],

		['GET|POST', '/destination/[i:id]', 'Destination#viewDestination', 'destination_viewdestination'],

		['GET|POST', '/pays/[:pays]', 'Destination#viewPays', 'destination_viewPays'],


		





		['GET|POST', '/creer-evenement', 'DestinationAdmin#insererEvenement', 'DestinationAdmin_insererEvenement'],
		['GET|POST', '/creer-flora', 'DestinationAdmin#insererFlora', 'DestinationAdmin_insererFlora'],
		['GET|POST', '/creer-gastronomy', 'DestinationAdmin#insererGastronomy', 'DestinationAdmin_insererGastronomy'],


		['GET|POST', '/creer-monument', 'DestinationAdmin#insererMonument', 'DestinationAdmin_insererMonument'],
		['GET|POST', '/creer-movie', 'DestinationAdmin#insererMovie', 'DestinationAdmin_insererMovie'],
		['GET|POST', '/creer-music', 'DestinationAdmin#insererMusic', 'DestinationAdmin_insererMusic'],

		
		['GET|POST', '/creer-pays', 'DestinationAdmin#insererPays', 'DestinationAdmin_insererPays'],




	);