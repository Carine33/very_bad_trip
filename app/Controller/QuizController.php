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
			'Amérique du Sud' => 0,
			'Asie' => 0,
			'Afrique' => 0,
			'Amérique du Nord' => 0,
			'Oceanie' => 0,
			'Europe' => 0
			);
		
	}

	public function switchQuiz($theme, $tableau)
	{



			switch($theme){

					case 'Amérique du Sud':
						$tableau['Amérique du Sud'] = $tableau['Amérique du Sud'] + 1;
					break;

					case 'Asie':
						$tableau['Asie'] = $tableau['Asie'] + 1;
					break;

					case 'Afrique':
						$tableau['Afrique'] = $tableau['Afrique'] + 1;			
					break;

					case 'Amérique du Nord':
						$tableau['Amérique du Nord'] = $tableau['Amérique du Nord'] + 1;
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

			$resultatQuiz = array();
			$post = array();

	if(!empty($this->getUser())){
		
		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$post[$key] = trim(strip_tags($value)); 
			}

		$tableau = array(
			'Amérique du Sud' => 0,
			'Asie' => 0,
			'Afrique' => 0,
			'Amérique du Nord' => 0,
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


		   
          $varMax = 0;
         

            foreach ($tableau as $key => $value) {
            	if($value > $varMax){
            			$varMax = $value;
            	}
            }

            foreach ($tableau as $key => $value) {
           		if($value == $varMax){
	            	
           			$monObjetDestination = new DestinationModel();
	            	$resultatQuiz[] = $monObjetDestination->getRowDestination($key);
	                	
	            }
            }  	
        	
             	if(count($resultatQuiz) == 1){


             		
             		
             			foreach ($resultatQuiz as $key => $dest) {
             			  $this->redirectToRoute('destination_viewdestination',['id' => $dest['id']]);
                        }
	             }
	             else{
					$this->show('quiz/page_resultat', ['resultatQuiz' => $resultatQuiz] );
				}
			


		}// fin if(!empty($_POST))

		$this->show('quiz/page_quiz');



	}
	
	else{
				$this->redirectToRoute('login_login');
		
	}
}
}