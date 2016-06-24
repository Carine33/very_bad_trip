<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel as UsersModel;//permet d'importer la classe UsersModel que l'on pourra instancier via new UsersModel();








use \W\Security\AuthentificationModel as AuthModel;

class UsersController extends Controller
{

	public function selectUsers()
	{


	//$this->allowTo(['admin']);

	$usersModel = new UsersModel();
	$listeUsers = $usersModel->findAll();

	


	$this->show('users/page_administration', ['listeUsers' => $listeUsers]);
	}
	
	public function supprimerUser($id)
	{


	//$this->allowTo(['admin']);

	$usersModelsuppr = new UsersModel();
	if($usersModelsuppr->delete($id)){


	$this->show('users/page_supprimer_user');
		
	}

	


	}
}