<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel; 
use \W\Security\AuthentificationModel as AuthModel;

class SigninController extends Controller
{

	/**
	* Constante des mime-types autorisés 
	*/

	const MIME_TYPE_ALLOWED = ['image/jpg', 'image/jpeg', 'image/png', 'image/gif'];


	/**
	 * Page d'inscription
	 */
	public function signin()
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

/*			if(strlen($post['username']) < 5){
				$errors[] = 'Votre nom d\'utilisateur doit comporter au moins 5 caractères';
			}*/

			//if(strlen($post['username']) < 3 || strlen($post['username']) > 25){
		    if(!preg_match("#^[A-Z]+[a-zA-Z0-9À-ú'\s]{3,25}#", $post['username'])) {   
		        $errors[] = 'Votre pseudo doit comporter entre 3 et 25 caractères et commencer par une majuscule';
		    }

		    if(empty($fileForDB)){
		    	$errors[] = 'Vous devez mettre un upload';
		    }


			if(strlen($post['password']) < 8){
				$errors[] = 'Votre mot de passe doit comporter au moins 8 caractères';
			}

			if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
				$errors[] = 'Votre adresse email est invalide';
			}

			if(empty($post['country'])){
				$errors[] = 'Vous devez indiquer votre pays';
			}

			if(empty($post['city'])){
				$errors[] = 'Vous devez indiquer votre ville';
			}

			if(empty($post['role'])){
				$errors[] = 'Vous indiquez votre statut';
			}

			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$usersModel = new UsersModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base
				$data = [
					// La clé du tableau correspond au nom de la colonne SQL
					'username' 	=> $post['username'],
					'avatar'	=> $fileForDB,
					'password'	=> $authModel->hashPassword($post['password']),
					'email'		=> $post['email'],
					'role'		=> $post['role'],
					'country' 	=> $post['country'],
					'city'		=> $post['city']
				];
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($usersModel->insert($data)){
					// Ici l'insertion en base est effectuée
					$success = true;
				}

				//je redirige vers la page "infos_users.php"


				/*header ('Location: home.php');
				die;*/

				$this->redirectToRoute('default_home');
			}
			else {
				// On peut faire un truc ici... 
			}
		}

		// On envoit les erreurs en paramètres à l'aide d'un tableau (array)
		$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize];
		$this->show('signin/signin', $params);
	}



			public function updateSigninAdmin(){

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
/*			if(strlen($post['username']) < 5){
				$errors[] = 'Votre nom d\'utilisateur doit comporter au moins 5 caractères';
			}*/

			//if(strlen($post['username']) < 3 || strlen($post['username']) > 25){
		    if(!preg_match("#^[A-Z]+[a-zA-Z0-9À-ú'\s]{3,25}#", $post['username'])) {   
		        $errors[] = 'Votre pseudo doit comporter entre 3 et 25 caractères et commencer par une majuscule';
		    }

		    if(empty($fileForDB)){
		    	$errors[] = 'Vous devez mettre un upload';
		    }


			if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
				$errors[] = 'Votre adresse email est invalide';
			}

			if(empty($post['country'])){
				$errors[] = 'Vous devez indiquer votre pays';
			}

			if(empty($post['city'])){
				$errors[] = 'Vous devez indiquer votre ville';
			}

			if(empty($post['role'])){
				$errors[] = 'Vous indiquez votre statut';
			}

			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$usersModel = new UsersModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base

				if (!empty($_FILES['avatar']['tmp_name'])){


											$data = [
											// La clé du tableau correspond au nom de la colonne SQL
												'username' 	=> $post['username'],
												'avatar'	=> $fileForDB,
												//'password'	=> $authModel->hashPassword($post['password']),
												'email'		=> $post['email'],
												'role'		=> $post['role'],
												'country' 	=> $post['country'],
												'city'		=> $post['city']
											];


											
											}//$finalFileName
											else {

											$data = [
													// La clé du tableau correspond au nom de la colonne SQL
													'username' 	=> $post['username'],
													'avatar'	=> $post['pictureDeux'],
													//'password'	=> $authModel->hashPassword($post['password']),
													'email'		=> $post['email'],
													'role'		=> $post['role'],
													'country' 	=> $post['country'],
													'city'		=> $post['city']
												];
												
											}

				
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				/*if($usersModel->update( $data, $post['id'], $stripTags = true)){*/
				if($usersModel->update( $data, $post['id'], $stripTags = true)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$this->show('signin/page_vide');
				}

				//je redirige vers la page "infos_users.php"


				/*header ('Location: home.php');
				die;*/

				//$this->redirectToRoute('users_selectUsers');
			}
			else {
				$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'users' => $post];
				$this->show('signin/page_modif_admin', $params);
			}
		}


			}

			public function updateSigninUser(){

			

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
/*			if(strlen($post['username']) < 5){
				$errors[] = 'Votre nom d\'utilisateur doit comporter au moins 5 caractères';
			}*/

			//if(strlen($post['username']) < 3 || strlen($post['username']) > 25){
		    if(!preg_match("#^[A-Z]+[a-zA-Z0-9À-ú'\s]{3,25}#", $post['username'])) {   
		        $errors[] = 'Votre pseudo doit comporter entre 3 et 25 caractères et commencer par une majuscule';
		    }

		    if(empty($fileForDB)){
		    	$errors[] = 'Vous devez mettre un upload';
		    }


			if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
				$errors[] = 'Votre adresse email est invalide';
			}

			if(empty($post['country'])){
				$errors[] = 'Vous devez indiquer votre pays';
			}

			if(empty($post['city'])){
				$errors[] = 'Vous devez indiquer votre ville';
			}

			

			// Ici, il n'y a pas d'erreurs, on peut donc enregistrer en base de données
			if(count($errors) === 0){

				// On instancie la classe UserModel qui étends la classe Model 
				$usersModel = new UsersModel();
				$authModel = new AuthModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base
				if (!empty($_FILES['avatar']['tmp_name'])){


											$data = [
											// La clé du tableau correspond au nom de la colonne SQL
												'username' 	=> $post['username'],
												'avatar'	=> $fileForDB,
												
												'email'		=> $post['email'],
												
												'country' 	=> $post['country'],
												'city'		=> $post['city']
											];


											
											}//$finalFileName
											else {

											$data = [
													// La clé du tableau correspond au nom de la colonne SQL
													'username' 	=> $post['username'],
													'avatar'	=> $post['pictureDeux'],
													
													'email'		=> $post['email'],
													
													'country' 	=> $post['country'],
													'city'		=> $post['city']
												];
												
											}
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				/*if($usersModel->update( $data, $post['id'], $stripTags = true)){*/
				if($usersModel->update( $data, $post['id'], $stripTags = true)){
					// Ici l'insertion en base est effectuée
					$success = true;
					$this->show('signin/page_vide');
				}

				//je redirige vers la page "infos_users.php"


				/*header ('Location: home.php');
				die;*/

				//$this->redirectToRoute('users_selectUsers');
			}
			else {
				$params = ['errors' => $errors, 'success' => $success, 'maxSize' => $maxSize, 'users' => $post];
				$this->show('signin/page_modif_user', $params);
			}
		}


			}

			public function selectSignin($id){


				if(empty($_POST)){
					$usersModel = new UsersModel();
					$users = $usersModel->find($id);

					$this->show('signin/page_modif_admin', ['users' => $users]);
				}
			


			}
			public function selectSigninUser($id){


				if(empty($_POST)){
					$usersModel = new UsersModel();
					$users = $usersModel->find($id);

					$this->show('signin/page_modif_user', ['users' => $users]);
				}
			


			}

}