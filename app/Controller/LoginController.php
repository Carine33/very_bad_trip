<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel as UsersModel; // Permet "d'importer" la classe UsersModel que l'on pourra instancier via new UsersModel();
use \W\Security\AuthentificationModel as AuthModel;

class LoginController extends Controller
{
	public function login(){

		$errors = [];
		$post = [];
		if(!empty($_POST)){
			// On nettoie les données.. c'est l'équivalent de notre foreach
			$post = array_map('strip_tags', $_POST);
			$post = array_map('trim', $post);

			if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
				$errors[] = 'Vous devez saisir une adresse email valide';
			}
			if(empty($post['password'])){
				$errors[] = 'Vous devez saisir un mot de passe';
			}

			if(count($errors) === 0){
				// On instancie les classes UserModel et AuthModel
				$usersModel = new UsersModel();
				$authModel = new AuthModel();

				// La méthode isValideLoginInfo() retourne un id d'utilisateur si celui-ci existe et que le couple identifiant/mdp existe.
				// $idUser contient l'id de mon utilisateur
				$idUser = $authModel->isValidLoginInfo($post['email'], $post['password']);
				if($idUser){
					// On appelle la méthode find() qui permet de retourner les résultats en fonction d'un ID. $user contient mon utilisateur.
					$user = $usersModel->find($idUser);

					// La méthode logUserIn() permet de connecter un utilisateur
					if($authModel->logUserIn($user)){
						if($user['role'] == 'admin'){
							$this->redirectToRoute('default_home');
						
						}
					}
					#$myUser = $authModel->getLoggedUser(); // Permet de récupérer les infos de sessions
					#$myUser = $this->getUser(); // Permet de récupérer les infos de sessions
				}
				else {
					$errors[] = 'Le couple identifiant/mot de passe est invalide';
				}
			}
		}

		$params = ['errors' => $errors];
		$this->show('login/login', $params);
	}	
}