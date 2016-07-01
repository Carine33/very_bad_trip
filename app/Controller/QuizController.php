<?php

namespace Controller;

use \W\Controller\Controller;
use Model\DestinationModel;

class QuizController extends Controller
{

	/**
	 * Page du Quiz
	 */
	

	public function declaration(){


		$post['gastronomie']= "";
		$post['monument']= "";
		$post['musique']="";
		$post['film']="";
		$post['evenement']="";
		$post['plante']="";

		$tableauDeux = array(
			'AS' => 0,
			'Asie' => 0,
			'Afrique' => 0,
			'AN' => 0,
			'Oceanie' => 0,
			'Europe' => 0
			);
		
	}

	public function switchQuiz($theme, $tableau)
	{



			switch($theme){

					case 'AS':
						$tableau['AS'] = $tableau['AS'] + 1;
					break;

					case 'Asie':
						$tableau['Asie'] = $tableau['Asie'] + 1;
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

					case 'Asie':
						$tableau['Asie'] = $tableau['Asie'] + 1;
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
		$i = 0;

			//self::declaration();
		

		/*$tableautemp = array();
		
	
		


			
	
		if(!empty($_GET)){



			

			

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

			$this->show('quiz/page_quiz', ['monTableau' => $tableauDeux] );

		}*/
		

		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$post[$key] = trim(strip_tags($value)); 
			}

		$tableau = array(
			'AS' => 0,
			'Asie' => 0,
			'Afrique' => 0,
			'AN' => 0,
			'Oceanie' => 0,
			'Europe' => 0
			);
		

			if(!empty($post['gastronomie'])){
			$tableau = self::switchQuiz($post['gastronomie'],$tableau);
			}
			if(!empty($post['monument'])){
			$tableau = self::switchQuiz($post['monument'],$tableau);
			}
			if(!empty($post['musique'])){
			$tableau = self::switchQuiz($post['musique'],$tableau);
			}
			if(!empty($post['film'])){
			$tableau = self::switchQuiz($post['film'],$tableau);
			}
			if(!empty($post['evenement'])){
			$tableau = self::switchQuiz($post['evenement'],$tableau);
			}
			if(!empty($post['plante'])){
			$tableau = self::switchQuiz($post['plante'],$tableau);
		    }




            foreach ($tableau as $key => $value) {
            # code...
            //echo $key."/".$value."<br>";
	            if($value == max($tableau) ){
	            	
	                  	$monObjetDestination = new DestinationModel();
	                  	$resultatQuiz[$i] = $monObjetDestination->getDestinationByNameDestination($key);
	                  	$i++;
	            }
            }
                            
                

        


			$this->show('quiz/page_resultat', ['resultatQuiz' => $resultatQuiz] );
			die();

		}// fin if(!empty($_POST))

		$this->show('quiz/page_quiz');



	}
}