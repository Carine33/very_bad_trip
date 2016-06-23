<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET|POST', '/page-quiz', 'Quiz#repondreQuiz', 'quiz_repondreQuiz'],
	);