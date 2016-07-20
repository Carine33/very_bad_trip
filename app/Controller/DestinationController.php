<?php

namespace Controller;

use \W\Controller\Controller;
//permet d'importer la classe DestinationModel que l'on pourra instancier via new DestinationModel();
use \Model\DestinationModel as DestinationsModel;
use Model\EventModel;
use Model\FloraModel;
use Model\GastronomyModel;
use Model\MonumentModel;
use Model\MovieModel;
use Model\MusicModel;
use Model\CommentsModel;
use Model\ThemeModel;

class DestinationController extends Controller
{

	const MIME_TYPE_ALLOWED = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];

	/**
	 * Méthode permettant d'accéder à ma fiche destination
	 */
	public function viewDestination($id)
	{

		$destinationsModel = new DestinationsModel();
		$destination = $destinationsModel->find($id);



		$listePays = $destinationsModel->getListePaysByIdDestination($id);




		$params = [
			'destination' => $destination,
			'listePays' => $listePays,
		];

		$this->show('destination/file_destination', $params);
	}

	public function viewPays($pays)
	{

		$destinationsModel = new DestinationsModel();
		$listeThemesPays = $destinationsModel->getListeThemesPaysByTitleNation($pays);


		$search = [ 'title_nation' => $listeThemesPays['pays'],];


		

		$commentsModel = new CommentsModel();
		$listeComments = $commentsModel->search($search);


		$post = [];
		$errors = [];
		$success = false;


		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$post[$key] = trim(strip_tags($value)); 
			}

			
			if(strlen($post['content']) < 2){
				$errors[] = 'Votre message doit comporter au moins 2 caractères';
			}

			

			if(count($errors) === 0){
				
				// On instancie la classe UserModel qui étends la classe Model
				$commentModel = new CommentsModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base
				$data = [
					// La clé du tableau correspond au nom de la colonne SQL
					'id_user' => $post['id_user'],
					'title_nation' 	=> $post['title_nation'],
					'nickname'		=> $post['nickname'],
					'content'	=> $post['content'],
				];
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($commentModel->insertComment($data)){
					// Ici l'insertion en base est effectuée
					$success = true;
				}
			}

		}

		// On envoit les erreurs en paramètres à l'aide d'un tableau (array)
		/*$params = ['errors' => $errors, 'success' => $success];
		$this->show('default/home', $params);
*/






		$params = [
			
			'listeThemesPays' => $listeThemesPays,
			'listeComments'	  => $listeComments,
			'errors'		  => $errors,
			'success' 		  => $success,
		];

		$this->show('destination/file_pays', $params);
	}

	public function transfertThemes()
	{


	//$this->allowTo(['admin']);

	$eventModel = new EventModel();
	$listeEvent = $eventModel->findAll();
	

		foreach ($listeEvent as $key => $event) {
					

					$theme = new ThemeModel();
								

					$dataInsert = [
						'title_destination' => $event['title_destination'], 
						'title_nation' 		=> $event['title_nation'], 
						'name' 				=> $event['name_event'], 
						'picture' 			=> $event['picture_event'], 
						'description'		=> $event['description'],
						'theme'				=> 'event',

					];

					$theme->insert($dataInsert);
						
		}

		$floraModel = new floraModel();
		$listeFlora = $floraModel->findAll();
		

		foreach ($listeFlora as $key => $flora) {
			
		
					$theme = new ThemeModel();


					

					$dataInsert = [
						'title_destination' => $flora['title_destination'], 
						'title_nation' 		=> $flora['title_nation'], 
						'name' 				=> $flora['name_flora'], 
						'picture' 			=> $flora['picture_flora'], 
						'description'		=> $flora['description'],
						'theme'				=> 'flora',

					];

					$theme->insert($dataInsert);
						
		}

		$gastronomyModel = new GastronomyModel();
		$listeGastronomy = $gastronomyModel->findAll();
		

		foreach ($listeGastronomy as $key => $gastronomy) {
			
		
					$theme = new ThemeModel();


					

					$dataInsert = [
						'title_destination' => $gastronomy['title_destination'], 
						'title_nation' 		=> $gastronomy['title_nation'], 
						'name' 				=> $gastronomy['name_dish'], 
						'picture' 			=> $gastronomy['picture_dish'], 
						'description'		=> $gastronomy['description'],
						'theme'				=> 'gastronomy',

					];

					$theme->insert($dataInsert);
						
		}

		$monumentModel = new MonumentModel();
		$listeMonument = $monumentModel->findAll();
		

		foreach ($listeMonument as $key => $monument) {
			
		
					$theme = new ThemeModel();


					

					$dataInsert = [
						'title_destination' => $monument['title_destination'], 
						'title_nation' 		=> $monument['title_nation'], 
						'name' 				=> $monument['name_monument'], 
						'picture' 			=> $monument['picture_monument'], 
						'description'		=> $monument['description'],
						'theme'				=> 'monument',

					];

					$theme->insert($dataInsert);
						
		}
	

		$movieModel = new MovieModel();
		$listeMovie = $movieModel->findAll();
		

		foreach ($listeMovie as $key => $movie) {
			
		
					$theme = new ThemeModel();


					

					$dataInsert = [
						'title_destination' => $movie['title_destination'], 
						'title_nation' 		=> $movie['title_nation'], 
						'name' 				=> $movie['title_movie'], 
						'picture' 			=> $movie['poster'], 
						'description'		=> $movie['description'],
						'theme'				=> 'movie',

					];

					$theme->insert($dataInsert);
						
		}

		$musicModel = new MusicModel();
		$listeMusic = $musicModel->findAll();
		

		foreach ($listeMusic as $key => $music) {
			
		
					$theme = new ThemeModel();


					

					$dataInsert = [
						'title_destination' => $music['title_destination'], 
						'title_nation' 		=> $music['title_nation'], 
						'name' 				=> $music['name_music'], 
						'picture' 			=> $music['picture_music'], 
						'description'		=> $music['description'],
						'theme'				=> 'music',

					];

					$theme->insert($dataInsert);
						
		}
	}



	public function selectThemes()
	{


	//$this->allowTo(['admin']);

	$themesModel = new ThemeModel();
	$listeThemes = $themesModel->findAll();

	


	$this->show('theme/page_admin_themes', ['listeThemes' => $listeThemes]);
	}

	public function supprimerTheme($id)
	{

		$themeModel = new ThemeModel();
		$resultat = $themeModel->delete($id);

		$params = ['resultat' => $resultat];
		/*$this->show('contacts/page_admin_contacts', $params);*/
		/*$this->url('default_selectContacts');*/
		
		$this->show('admin/index');
	}





	public function insererTheme()
	{


			/*  ! ajouter upload pour l'avatar ! */
		$maxSize = 5 * 1000000 ; // 5Mo
		$filename = ''; // Juste au cas ou ..
		$post = [];
		$errors = [];
		$success = false;

		if(!empty($_FILES) && isset($_FILES['avatar']) && $_FILES['avatar']['error'] == UPLOAD_ERR_OK){

			if($_FILES['avatar']['size'] > $maxSize){


				$errors[] = 'Le fichier sélectionné est supérieur à '.$maxSize.' octets';
			}

			// Il faut utiliser l'antislash initial pour importer la classe, ou utiliser en haut de la classe : "use \finfo;"
			$finfo = new \finfo(); 
			// Permet d'obtenir le type mime du fichier
			$mimeType = $finfo->file($_FILES['avatar']['tmp_name'], FILEINFO_MIME_TYPE);

			// self::MIME_TYPE_ALLOWED => Permet de récupérer ma constante
			if(!in_array($mimeType, self::MIME_TYPE_ALLOWED)){
				$errors[] = 'Le fichier n\'est pas valide';
			}

			if(count($errors) === 0){

				$tmpFile = $_FILES['avatar']['tmp_name']; // Le fichier temporaire
				$tmpName = $_FILES['avatar']['name']; // Le nom du fichier


				$app = getApp();
				$basePath = $_SERVER['DOCUMENT_ROOT'].$app->getBasePath();
				$uploadDir = $app->getConfig('folder_upload'); // Me retournera la valeur correspondante du fichier de config

				// Destination de mon fichier : C:/xampp/htdocs/nom_du_projet/public/assets/upload
				$destination = $basePath.'/assets/'.$uploadDir;

				// Permet de vérifier que le dossier d'upload existe, sinon on le crée
				if(!is_dir($destination)){
					if(!mkdir($destination, 0755)){ // mkdir() permet de créer le dossier
						// C'est une erreur PHP... en théorie, on devrait jamais y arriver
						trigger_error('Le dossier d\'upload n\'a pu être créé', E_USER_WARNING);
					}

				}

				// Permet de définir l'extension en fonction du mime type. Cela sera utile pour renommer le fichier.
				switch($mimeType){
					case 'image/jpg':
					case 'image/jpeg':
						$extension = '.jpg';
					break;

					case 'image/png':
						$extension = '.png';
					break;

					case 'image/gif':
						$extension = '.gif';
					break;				
				}

				// Le nom de mon fichier final et son extension
				$filename = 'news-'.time().$extension;

				// On upload le fichier
				if(!move_uploaded_file($tmpFile, $destination.$filename)){
					$fileForDB = ''; // Juste au cas ou ...
					$errors[] = 'Dommage, l\'image n\'a pu être envoyée :(';
				}
				else {
					// Ce que je stockerais en base de données
					$fileForDB = $uploadDir.$filename;
				}

			}

		}

		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$post[$key] = trim(strip_tags($value));
			}

			if(empty($fileForDB)){
		    	$errors[] = 'Vous devez mettre un upload';
		    }
		   
			if(empty($post['title_nation'])){
				$errors[] = 'Vous devez indiquer le pays';
			}
			if(empty($post['name'])){
				$errors[] = 'Vous devez indiquer le nom du thème';
			}
			if(empty($post['description'])){
				$errors[] = 'Vous devez faire une description de l\'événement';
			}





			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$themeModel = new ThemeModel();
				//$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base


				$dataEvent = [

							'title_destination'  => $post['title_destination'],
							'title_nation'       => $post['title_nation'],
							'name'         		 => $post['name'],
							'picture'	     	 => $fileForDB,
							'description'        => $post['description'],
							'theme'				 => $post['theme'],

						];

					
				
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($themeModel->insert($dataEvent)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'picture' => $fileForDB, ];    
					$this->show('destination/formulaire_theme', $params);
				}

				//je redirige vers la page "infos_users.php"


				/*header ('Location: home.php');
				die;*/
				/*$this->redirectToRoute('default_home');*/
			}
			else {
				// On peut faire un truc ici... 
			}
		}

		// On envoit les erreurs en paramètres à l'aide d'un tableau (array)
		$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize,];    
		$this->show('destination/formulaire_theme', $params);

	
	}


	public function updateTheme($id){

			$maxSize = 5 * 1000000 ; // 5Mo
			$filename = ''; // Juste au cas ou ..
			$post = [];
			$errors = [];
			$success = false;
			


			if(empty($_POST)){


				$themeModel = new ThemeModel();
				$themeAModifier = $themeModel->find($id);

				var_dump($themeAModifier);

				$params = [
								'theme' => $themeAModifier,
														];

				$this->show('theme/page_modif_theme', $params);





			}



	


		if(!empty($_FILES) && isset($_FILES['avatar']) && $_FILES['avatar']['error'] == UPLOAD_ERR_OK){
			
			if($_FILES['avatar']['size'] > $maxSize){
				$errors[] = 'Le fichier sélectionné est supérieur à '.$maxSize.' octets';
			}
			// Il faut utiliser l'antislash initial pour importer la classe, ou utiliser en haut de la classe : "use \finfo;"
			$finfo = new \finfo(); 
			// Permet d'obtenir le type mime du fichier
			$mimeType = $finfo->file($_FILES['avatar']['tmp_name'], FILEINFO_MIME_TYPE);
			// self::MIME_TYPE_ALLOWED => Permet de récupérer ma constante
			if(!in_array($mimeType, self::MIME_TYPE_ALLOWED)){
				$errors[] = 'Le fichier n\'est pas valide';
			}

			if(count($errors) === 0){
				if (!empty($_FILES['avatar']['tmp_name'])){

					$tmpFile = $_FILES['avatar']['tmp_name']; // Le fichier temporaire
					$tmpName = $_FILES['avatar']['name']; // Le nom du fichier


					$app = getApp();
					$basePath = $_SERVER['DOCUMENT_ROOT'].$app->getBasePath();
					$uploadDir = $app->getConfig('folder_upload'); // Me retournera la valeur correspondante du fichier de config

					// Destination de mon fichier : C:/xampp/htdocs/nom_du_projet/public/assets/upload
					$destination = $basePath.'/assets/'.$uploadDir;

					// Permet de vérifier que le dossier d'upload existe, sinon on le crée
					if(!is_dir($destination)){
						if(!mkdir($destination, 0755)){ // mkdir() permet de créer le dossier
							// C'est une erreur PHP... en théorie, on devrait jamais y arriver
							trigger_error('Le dossier d\'upload n\'a pu être créé', E_USER_WARNING);
						}

					}

							// Permet de définir l'extension en fonction du mime type. Cela sera utile pour renommer le fichier.
							switch($mimeType){
								case 'image/jpg':
								case 'image/jpeg':
									$extension = '.jpg';
								break;

								case 'image/png':
									$extension = '.png';
								break;

								case 'image/gif':
									$extension = '.gif';
								break;				
							}

							// Le nom de mon fichier final et son extension
							$filename = 'news-'.time().$extension;

				// On upload le fichier
					if(!move_uploaded_file($tmpFile, $destination.$filename)){
						$fileForDB = ''; // Juste au cas ou ...
						$errors[] = 'Dommage, l\'image n\'a pu être envoyée :(';
					}
					else {
						// Ce que je stockerais en base de données
						$fileForDB = $uploadDir.$filename;
					}


				}//fin if (!empty($_FILES['avatar']['tmp_name']))

			}

		}





		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$post[$key] = trim(strip_tags($value));
			}
			if (empty($_FILES['avatar']['tmp_name'])){
			$fileForDB = $post['pictureDeux'];
			}

		   	if(empty($fileForDB)){
		    	$errors[] = 'Vous devez mettre un upload';
		    }

			if(empty($post['theme'])){
				$errors[] = 'Vous devez indiquer le théme';
			}

			if(empty($post['title_destination'])){
				$errors[] = 'Vous devez indiquer la destination';
			}

			if(empty($post['title_nation'])){
				$errors[] = 'Vous devez indiquer la destination';
			}

			if(empty($post['name'])){
				$errors[] = 'Vous indiquez le nom du thème';
			}

			if(empty($post['description'])){
				$errors[] = 'Vous devez faire une description du thème';
			}

			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$themeModel = new ThemeModel();
				//$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base

				$data = [
					'title_destination' 	=> $post['title_destination'],
					'title_nation' 			=> $post['title_nation'],
					'name' 					=> $post['name'],
					'picture'				=> '',
					'description'			=> $post['description'],
					'theme' 				=> $post['theme'],
					
				
				];
				if (!empty($_FILES['avatar']['tmp_name'])){
					$data['picture'] = $fileForDB;
					
											
				} //$finalFileName
				else {
					$data['picture'] = $post['pictureDeux'];
				}
				
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				/*if($usersModel->update( $data, $post['id'], $stripTags = true)){*/
				if($themeModel->update( $data, $post['id'], $stripTags = true)){
					// Ici l'insertion en base est effectuée
					//$authModel->refreshUser(); // Raffraichit les données en session de l'user
					//$currentUser = $this->getUser(); // Contient les données de l'utilisateur

					$success = true;
					$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'theme' => $post];
				$this->show('theme/page_modif_theme', $params);
				}

				
			}
			else {
				$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'theme' => $post];
				$this->show('theme/page_modif_theme', $params);
			}
		}


	}

}