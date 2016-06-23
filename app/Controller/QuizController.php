<?php

namespace Controller;

use \W\Controller\Controller;

class QuizController extends Controller
{

	/**
	 * Page du Quiz
	 */

	

	public function switchQuiz($theme, $tableau)
	{



			switch($theme){

					case 'AS':
						$tableau['AS'] = $tableau['AS'] + 1;
					break;

					case 'Inde':
						$tableau['Inde'] = $tableau['Inde'] + 1;
					break;

					case 'Afrique':
						$tableau['Afrique'] = $tableau['Afrique'] + 1;			
					break;

					case 'AN':
						$tableau['AN'] = $tableau['AN'] + 1;
					break;

					case 'Oceanie':
						$tableau['Oceanie'] = $tableau['Oceanie'] + 1;
					break;

					case 'Europe':
						$tableau['Europe'] = $tableau['Europe'] + 1;
					break;

					default:
						// qqch ici
					break;


			}

			
			return $tableau;
		}
	public function switchQuizDeux($theme, $tableau)
	{



			switch($theme){

					case 'AS':
						$VarAS = $tableau['AS'] + 1;
					break;

					case 'Inde':
						$tableau['Inde'] = $tableau['Inde'] + 1;
					break;

					case 'Afrique':
						$tableau['Afrique'] = $tableau['Afrique'] + 1;			
					break;

					case 'AN':
						$tableau['AN'] = $tableau['AN'] + 1;
					break;

					case 'Oceanie':
						$tableau['Oceanie'] = $tableau['Oceanie'] + 1;
					break;

					case 'Europe':
						$tableau['Europe'] = $tableau['Europe'] + 1;
					break;

					default:
						// qqch ici
					break;


			}

			
			return $tableau;
		}


	
	
	public function repondreQuiz()
	{



		$tableautemp = array();
		
	
		
	
		if(!empty($_GET)){

			$tableauDeux = array(
			'AS' => 0,
			'Inde' => 0,
			'Afrique' => 0,
			'AN' => 0,
			'Oceanie' => 0,
			'Europe' => 0
			);

		

			if(isset($_GET['gastronomie'])){
			$tableauDeux = self::switchQuizDeux($_GET['gastronomie'],$tableauDeux);
			//$_GET['gastronomie'] = 0;
			}
			if(isset($_GET['monument'])){
			$tableauDeux = self::switchQuizDeux($_GET['monument'],$tableauDeux);
			//$_GET['monument'] = 0;
			}
			if(isset($_GET['musique'])){
			$tableauDeux = self::switchQuizDeux($_GET['musique'],$tableauDeux);
			//$_GET['musique'] = 0;
			}
			if(isset($_GET['film'])){
			$tableauDeux = self::switchQuizDeux($_GET['film'],$tableauDeux);
			//$_GET['film'] = 0;
			}
			if(isset($_GET['evenement'])){
			$tableauDeux = self::switchQuizDeux($_GET['evenement'],$tableauDeux);
			//$_GET['evenement'] = 0;
			}
			if(isset($_GET['plante'])){
			$tableauDeux = self::switchQuizDeux($_GET['plante'],$tableauDeux);
			//$_GET['plante'] = 0;
			}



		}
		

		if(!empty($_POST)){


		$tableau = array(
			'AS' => 0,
			'Inde' => 0,
			'Afrique' => 0,
			'AN' => 0,
			'Oceanie' => 0,
			'Europe' => 0
			);
		


			$tableau = self::switchQuiz($_POST['gastronomie'],$tableau);
			$tableau = self::switchQuiz($_POST['monument'],$tableau);
			$tableau = self::switchQuiz($_POST['musique'],$tableau);
			$tableau = self::switchQuiz($_POST['film'],$tableau);
			$tableau = self::switchQuiz($_POST['evenement'],$tableau);
			$tableau = self::switchQuiz($_POST['plante'],$tableau);


			$this->show('quiz/page_quiz', ['monTableau' => $tableau] );


		}// fin if(!empty($_POST))

		$this->show('quiz/page_quiz');



	}
}