<?php

namespace Controller;

use \W\Controller\Controller;
use Model\ContactsModel; // Permet "d'importer" la classe ContactsModel que l'on pourra instancier via new ContactsModel();

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut + section contact
	 */
	public function home()
	{
		$post = [];
		$errors = [];
		$success = false;


		if(!empty($_POST)){
			foreach ($_POST as $key => $value) {
				$post[$key] = trim(strip_tags($value)); 
			}

			if(strlen($post['firstname']) < 2){
				$errors[] = 'Votre prénom doit comporter au moins 2 caractères';
			}

			if(strlen($post['lastname']) < 2){
				$errors[] = 'Votre nom doit comporter au moins 2 caractères';
			}

			if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
				$errors[] = 'Votre adresse email est invalide';
			}

			if(count($errors) === 0){
				
				// On instancie la classe UserModel qui étends la classe Model
				$contactsModel = new ContactsModel();

				// On utilise la méthode insert() qui permet d'insérer des données en base
				$data = [
					// La clé du tableau correspond au nom de la colonne SQL
					'firstname' => $post['firstname'],
					'lastname' 	=> $post['lastname'],
					'email'		=> $post['email'],
					'message'	=> $post['message'],
				];
				// On passe le tableau $data à la méthode insert() pour enregistrer nos données en base.
				if($contactsModel->insert($data)){
					// Ici l'insertion en base est effectuée
					$success = true;
				}
			}

		}

		// On envoit les erreurs en paramètres à l'aide d'un tableau (array)
		$params = ['errors' => $errors, 'success' => $success];
		$this->show('default/home', $params);
	}

}