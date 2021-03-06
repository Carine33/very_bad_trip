<?php

namespace Controller;

use \W\Controller\Controller;
//permet d'importer la classe DestinationModel que l'on pourra instancier via new DestinationModel();
use Model\DestinationModel as DestinationsModel;
use Model\EventModel;
use Model\FloraModel;
use Model\GastronomyModel;
use Model\MonumentModel;
use Model\MovieModel;
use Model\MusicModel;
use Model\PaysModel;


use \W\Security\AuthentificationModel as AuthModel;

class DestinationAdminController extends Controller
{
	const MIME_TYPE_ALLOWED = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];
	
public function selectDestinations()
	{


	//$this->allowTo(['admin']);

	$destinationModel = new DestinationsModel();
	$listeDestinations = $destinationModel->findAll();

	


	$this->show('users/page_admin_destinations', ['listeDestinations' => $listeDestinations]);
	}



public function selectEvenement()
	{


	//$this->allowTo(['admin']);

	$evenementModel = new EventModel();
	$listeEvenement = $evenementModel->findAll($orderBy = 'title_nation');

	


	$this->show('destination/page_admin_evenement', ['listeEvenement' => $listeEvenement]);
	}

public function selectFlora()
	{


	//$this->allowTo(['admin']);

	$floraModel = new FloraModel();
	$listeFlora = $floraModel->findAll($orderBy = 'title_nation');

	


	$this->show('destination/page_admin_flora', ['listeFlora' => $listeFlora]);
	}

public function selectGastronomy()
	{


	//$this->allowTo(['admin']);

	$gastronomyModel = new GastronomyModel();
	$listeGastronomy = $gastronomyModel->findAll($orderBy = 'title_nation');

	


	$this->show('destination/page_admin_gastronomy', ['listeGastronomy' => $listeGastronomy]);
	}

public function selectMonument()
	{


	//$this->allowTo(['admin']);

	$monumentModel = new MonumentModel();
	$listeMonument = $monumentModel->findAll($orderBy = 'title_nation');

	


	$this->show('destination/page_admin_monument', ['listeMonument' => $listeMonument]);
	}
public function selectFilm()
	{


	//$this->allowTo(['admin']);

	$movieModel = new MovieModel();
	$listeMovie = $movieModel->findAll($orderBy = 'title_nation');

	


	$this->show('destination/page_admin_movie', ['listeMovie' => $listeMovie]);
	}

	public function selectMusic()
	{


	//$this->allowTo(['admin']);

	$musicModel = new MusicModel();
	$listeMusic = $musicModel->findAll($orderBy = 'title_nation');

	


	$this->show('destination/page_admin_music', ['listeMusic' => $listeMusic]);
	}





public function selectPays()
	{


	//$this->allowTo(['admin']);

	$paysModel = new PaysModel();
	$listePays = $paysModel->findAll($orderBy = 'title_nation');

	


	$this->show('destination/page_admin_pays', ['listePays' => $listePays]);
	}




	public function supprimerDestination($id)
	{


		//$this->allowTo(['admin']);

		$destinationModelsuppr = new DestinationsModel();

		if($destinationModelsuppr->delete($id)){
			$this->show('users/page_supprimer_destination');
					
		}
	}

	public function insererDestination()
	{

				/*  ! ajouter upload pour l'avatar ! */
		$maxSize = 5 * 1000000 ; // 5Mo
		$filenameImage1 = ''; // Juste au cas ou ..
		$filenameImage2 = ''; // Juste au cas ou ..
		$filenameImage3 = ''; // Juste au cas ou ..
		$post = [];
		$errors = [];
		$success = false;

		if(!empty($_FILES) && isset($_FILES['img_1avatar']) && $_FILES['img_1avatar']['error'] == UPLOAD_ERR_OK){

			if($_FILES['img_1avatar']['size'] > $maxSize){


				$errors[] = 'Le fichier sélectionné est supérieur à '.$maxSize.' octets';
			}

			// Il faut utiliser l'antislash initial pour importer la classe, ou utiliser en haut de la classe : "use \finfo;"
			$finfo1 = new \finfo(); 
			// Permet d'obtenir le type mime du fichier
			$mimeType1 = $finfo1->file($_FILES['img_1avatar']['tmp_name'], FILEINFO_MIME_TYPE);

			// self::MIME_TYPE_ALLOWED => Permet de récupérer ma constante
			if(!in_array($mimeType1, self::MIME_TYPE_ALLOWED)){
				$errors[] = 'Le fichier n\'est pas valide';
			}

			if(count($errors) === 0){

				$tmpFile1 = $_FILES['img_1avatar']['tmp_name']; // Le fichier temporaire
				$tmpName1 = $_FILES['img_1avatar']['name']; // Le nom du fichier


				$app1 = getApp();
				$basePath1 = $_SERVER['DOCUMENT_ROOT'].$app1->getBasePath();
				$uploadDir1 = $app1->getConfig('folder_upload'); // Me retournera la valeur correspondante du fichier de config

				// Destination de mon fichier : C:/xampp/htdocs/nom_du_projet/public/assets/upload
				$destination1 = $basePath1.'/assets/'.$uploadDir1;

				// Permet de vérifier que le dossier d'upload existe, sinon on le crée
				if(!is_dir($destination1)){
					if(!mkdir($destination1, 0755)){ // mkdir() permet de créer le dossier
						// C'est une erreur PHP... en théorie, on devrait jamais y arriver
						trigger_error('Le dossier d\'upload n\'a pu être créé', E_USER_WARNING);
					}

				}

				// Permet de définir l'extension en fonction du mime type. Cela sera utile pour renommer le fichier.
				switch($mimeType1){
					case 'image/jpg':
					case 'image/jpeg':
						$extension1 = '.jpg';
					break;

					case 'image/png':
						$extension1 = '.png';
					break;

					case 'image/gif':
						$extension1 = '.gif';
					break;				
				}

				// Le nom de mon fichier final et son extension
				$filenameImage1 = 'news-a'.time().$extension1;

				// On upload le fichier
				if(!move_uploaded_file($tmpFile1, $destination1.$filenameImage1)){
					$fileForDBimg_1 = ''; // Juste au cas ou ...
					$errors[] = 'Dommage, l\'image n\'a pu être envoyée :(';
				}
				else {
					// Ce que je stockerais en base de données
					$fileForDBimg_1 = $uploadDir1.$filenameImage1;
				}

			}

		}

		if(!empty($_FILES) && isset($_FILES['img_2avatar']) && $_FILES['img_2avatar']['error'] == UPLOAD_ERR_OK){

			if($_FILES['img_2avatar']['size'] > $maxSize){


				$errors[] = 'Le fichier sélectionné est supérieur à '.$maxSize.' octets';
			}

			// Il faut utiliser l'antislash initial pour importer la classe, ou utiliser en haut de la classe : "use \finfo;"
			$finfo2 = new \finfo(); 
			// Permet d'obtenir le type mime du fichier
			$mimeType2 = $finfo2->file($_FILES['img_2avatar']['tmp_name'], FILEINFO_MIME_TYPE);

			// self::MIME_TYPE_ALLOWED => Permet de récupérer ma constante
			if(!in_array($mimeType2, self::MIME_TYPE_ALLOWED)){
				$errors[] = 'Le fichier n\'est pas valide';
			}

			if(count($errors) === 0){

				$tmpFile2 = $_FILES['img_2avatar']['tmp_name']; // Le fichier temporaire
				$tmpName2 = $_FILES['img_2avatar']['name']; // Le nom du fichier


				$app2 = getApp();
				$basePath2 = $_SERVER['DOCUMENT_ROOT'].$app2->getBasePath();
				$uploadDir2 = $app2->getConfig('folder_upload'); // Me retournera la valeur correspondante du fichier de config

				// Destination de mon fichier : C:/xampp/htdocs/nom_du_projet/public/assets/upload
				$destination2 = $basePath2.'/assets/'.$uploadDir2;

				// Permet de vérifier que le dossier d'upload existe, sinon on le crée
				if(!is_dir($destination2)){
					if(!mkdir($destination2, 0755)){ // mkdir() permet de créer le dossier
						// C'est une erreur PHP... en théorie, on devrait jamais y arriver
						trigger_error('Le dossier d\'upload n\'a pu être créé', E_USER_WARNING);
					}

				}

				// Permet de définir l'extension en fonction du mime type. Cela sera utile pour renommer le fichier.
				switch($mimeType2){
					case 'image/jpg':
					case 'image/jpeg':
						$extension2 = '.jpg';
					break;

					case 'image/png':
						$extension2 = '.png';
					break;

					case 'image/gif':
						$extension2 = '.gif';
					break;				
				}

				// Le nom de mon fichier final et son extension
				$filenameImage2 = 'news-b'.time().$extension2;

				// On upload le fichier
				if(!move_uploaded_file($tmpFile2, $destination2.$filenameImage2)){
					$fileForDBimg_2 = ''; // Juste au cas ou ...
					$errors[] = 'Dommage, l\'image n\'a pu être envoyée :(';
				}
				else {
					// Ce que je stockerais en base de données
					$fileForDBimg_2 = $uploadDir2.$filenameImage2;
				}

			}

		}

		if(!empty($_FILES) && isset($_FILES['img_3avatar']) && $_FILES['img_3avatar']['error'] == UPLOAD_ERR_OK){

			if($_FILES['img_3avatar']['size'] > $maxSize){


				$errors[] = 'Le fichier sélectionné est supérieur à '.$maxSize.' octets';
			}

			// Il faut utiliser l'antislash initial pour importer la classe, ou utiliser en haut de la classe : "use \finfo;"
			$finfo = new \finfo(); 
			// Permet d'obtenir le type mime du fichier
			$mimeType = $finfo->file($_FILES['img_3avatar']['tmp_name'], FILEINFO_MIME_TYPE);

			// self::MIME_TYPE_ALLOWED => Permet de récupérer ma constante
			if(!in_array($mimeType, self::MIME_TYPE_ALLOWED)){
				$errors[] = 'Le fichier n\'est pas valide';
			}

			if(count($errors) === 0){

				$tmpFile = $_FILES['img_3avatar']['tmp_name']; // Le fichier temporaire
				$tmpName = $_FILES['img_3avatar']['name']; // Le nom du fichier


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
				$filenameImage3 = 'news-c'.time().$extension;

				// On upload le fichier
				if(!move_uploaded_file($tmpFile, $destination.$filenameImage3)){
					$fileForDBimg_3 = ''; // Juste au cas ou ...
					$errors[] = 'Dommage, l\'image n\'a pu être envoyée :(';
				}
				else {
					// Ce que je stockerais en base de données
					$fileForDBimg_3 = $uploadDir.$filenameImage3;
				}

			}

		}

		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$post[$key] = trim(strip_tags($value));
			}



			if(empty($post['title_destination'])){
				$errors[] = 'Vous devez indiquer la destination';
			}

		

			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
			
				$destination = new DestinationsModel();

				//var_dump("ici fileForDBimg_3 : ".$fileForDBimg_3);

				$dataInsert = [
					'title_destination' => $post['title_destination'], 
					'img_1' 			=> $fileForDBimg_1, 
					'img_2' 			=> $fileForDBimg_2, 
					'img_3' 			=> $fileForDBimg_3, 
				];
				if($destination->insert($dataInsert)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize];
					$this->show('destination/formulaire_destination', $params);
				}

				

			}
			else {
				// On peut faire un truc ici... 
			}
		}

		// On envoit les erreurs en paramètres à l'aide d'un tableau (array)
		$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize];
		$this->show('destination/formulaire_destination', $params);


	}	


	public function insererEvenement()
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
			if(empty($post['name_event'])){
				$errors[] = 'Vous devez indiquer le nom de l\'événement';
			}
			if(empty($post['description'])){
				$errors[] = 'Vous devez faire une description de l\'événement';
			}





			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$eventModel = new EventModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base


				$dataEvent = [

							'title_destination'  => $post['title_destination'],
							'title_nation'       => $post['title_nation'],
							'name_event'         => $post['name_event'],
							'picture_event'	     => $fileForDB,
							'description'        => $post['description'],

						];

					
				
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($eventModel->insert($dataEvent)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'picture' => $fileForDB, ];    
					$this->show('destination/formulaire_evenement', $params);
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
		$this->show('destination/formulaire_evenement', $params);

	
	}
public function insererFlora()
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
			if(empty($post['name_flora'])){
				$errors[] = 'Vous devez indiquer le nom de la fleur';
			}
			if(empty($post['description'])){
				$errors[] = 'Vous devez faire une description de l\'événement';
			}





			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$floraModel = new FloraModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base


				$dataEvent = [

							'title_destination' => $post['title_destination'],
							'title_nation' => $post['title_nation'],
							'name_flora' => $post['name_flora'],
							'picture_flora' => $fileForDB,
							'description' => $post['description'],

						];

					
				
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($floraModel->insert($dataEvent)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'picture' => $fileForDB, ];    
					$this->show('destination/formulaire_flora', $params);
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
		$this->show('destination/formulaire_flora', $params);

	
	}

	public function insererGastronomy()
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
			if(empty($post['name_gastronomy'])){
				$errors[] = 'Vous devez indiquer le nom de la fleur';
			}
			if(empty($post['description'])){
				$errors[] = 'Vous devez faire une description de l\'événement';
			}





			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$gastronomyModel = new GastronomyModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base


				$dataEvent = [

							'title_destination' => $post['title_destination'],
							'title_nation' => $post['title_nation'],
							'name_dish' => $post['name_gastronomy'],
							'picture_dish' => $fileForDB,
							'description' => $post['description'],

						];

									
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($gastronomyModel->insert($dataEvent)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'picture' => $fileForDB, ];    
					$this->show('destination/formulaire_gastronomy', $params);
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
		$this->show('destination/formulaire_gastronomy', $params);

	
	}
	public function insererMonument()
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
			if(empty($post['name_monument'])){
				$errors[] = 'Vous devez indiquer le nom de la fleur';
			}
			if(empty($post['description'])){
				$errors[] = 'Vous devez faire une description de l\'événement';
			}





			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$monumentModel = new MonumentModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base


				$dataEvent = [

							'title_destination' => $post['title_destination'],
							'title_nation' => $post['title_nation'],
							'name_monument' => $post['name_monument'],
							'picture_monument' => $fileForDB,
							'description' => $post['description'],

						];

									
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($monumentModel->insert($dataEvent)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'picture' => $fileForDB, ];    
					$this->show('destination/formulaire_monument', $params);
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
		$this->show('destination/formulaire_monument', $params);

	
	}

	public function insererMovie()
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
			if(empty($post['name_movie'])){
				$errors[] = 'Vous devez indiquer le nom de la fleur';
			}
			if(empty($post['description'])){
				$errors[] = 'Vous devez faire une description de l\'événement';
			}





			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$movieModel = new MovieModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base


				$dataEvent = [

							'title_destination' => $post['title_destination'],
							'title_nation' => $post['title_nation'],
							'title_movie' => $post['name_movie'],
							'poster' => $fileForDB,
							'description' => $post['description'],

						];

								
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($movieModel->insert($dataEvent)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'picture' => $fileForDB, ];    
					$this->show('destination/formulaire_movie', $params);
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
		$this->show('destination/formulaire_movie', $params);

	
	}




	public function insererMusic()
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

			if(empty($post['name_music'])){
				$errors[] = 'Vous devez indiquer le type de musique';
			}

			if(empty($post['description'])){
				$errors[] = 'Vous devez indiquer une description de la musique';
			}


			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$musicModel = new MusicModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base
				$data = [
					// La clé du tableau correspond au nom de la colonne SQL
					'title_destination' 	=> $post['title_destination'],
					'title_nation' 	        => $post['title_nation'],
					'name_music'            => $post['name_music'],
					'picture_music'	        => $fileForDB,
					'description'	        => $post['description'],
					
				];
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($musicModel->insert($data)){
					// Ici l'insertion en base est effectuée
					$success = true;
				}

				//je redirige vers la page "infos_users.php"


				/*header ('Location: home.php');
				die;*/
				$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize];

				$this->show('destination/formulaire_music', $params);
			}
			else {
				// On peut faire un truc ici... 
			}
		}

		// On envoit les erreurs en paramètres à l'aide d'un tableau (array)
		$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize];
		$this->show('destination/formulaire_music', $params);
	}

	public function insererPays()
	{

		

		
		/*  ! ajouter upload pour l'avatar ! */
		$maxSize = 5 * 1000000 ; // 5Mo
		$filename = ''; // Juste au cas ou ..
		$post = [];
		$errors = [];
		$success = false;

		

		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$post[$key] = trim(strip_tags($value));
			}


		    

		    



			if(empty($post['title_nation'])){
				$errors[] = 'Vous devez indiquer le pays';
			}

			

			if(empty($post['description'])){
				$errors[] = 'Vous devez indiquer une description de la musique';
			}


			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$paysModel = new PaysModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base
				$data = [
					// La clé du tableau correspond au nom de la colonne SQL
					'title_destination' 	=> $post['title_destination'],
					'title_nation' 	        => $post['title_nation'],
					'description'	        => $post['description'],
					
				];
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($paysModel->insert($data)){
					// Ici l'insertion en base est effectuée
					$success = true;
				}

				//je redirige vers la page "infos_users.php"


				/*header ('Location: home.php');
				die;*/
				$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize];

				$this->show('destination/formulaire_pays', $params);
			}
			else {
				// On peut faire un truc ici... 
			}
		}

		// On envoit les erreurs en paramètres à l'aide d'un tableau (array)
		$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize];
		$this->show('destination/formulaire_pays', $params);
	}

	public function supprimerEvenement($id)
	{

		$eventModel = new EventModel();
		$resultat = $eventModel->delete($id);

		$params = ['resultat' => $resultat];
		$this->show('destination/page_supprimer_evenement', $params);
	}

	public function supprimerFlora($id)
	{

		$floraModel = new FloraModel();
		$resultat = $floraModel->delete($id);

		$params = ['resultat' => $resultat];
		$this->show('destination/page_supprimer_flora', $params);
	}
	public function supprimerGastronomy($id)
	{

		$gastronomyModel = new GastronomyModel();
		$resultat = $gastronomyModel->delete($id);

		$params = ['resultat' => $resultat];
		$this->show('destination/page_supprimer_gastronomy', $params);
	}

	public function supprimerMonument($id)
	{

		$monumentModel = new MonumentModel();
		$resultat = $monumentModel->delete($id);

		$params = ['resultat' => $resultat];
		$this->show('destination/page_supprimer_monument', $params);
	}

	public function supprimerMovie($id)
	{

		$movieModel = new MovieModel();
		$resultat = $movieModel->delete($id);

		$params = ['resultat' => $resultat];
		$this->show('destination/page_supprimer_movie', $params);
	}
	public function supprimerMusic($id)
	{

		$musicModel = new MusicModel();
		$resultat = $musicModel->delete($id);

		$params = ['resultat' => $resultat];
		$this->show('destination/page_supprimer_music', $params);
	}
}