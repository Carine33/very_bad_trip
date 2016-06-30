<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Model\UsersModel as UsersModel;//permet d'importer la classe UsersModel que l'on pourra instancier via new UsersModel();
use \W\Model\DestinationsModel as DestinationsModel;







use \W\Security\AuthentificationModel as AuthModel;

class UsersController extends Controller
{
	
	public function selectUsers()
	{


	//$this->allowTo(['admin']);

	$usersModel = new UsersModel();
	$listeUsers = $usersModel->findAll();

	$params = [
			'listeUsers' => $listeUsers,
		];

	


	$this->show('users/page_admin_users', $params);
	}


	
	public function supprimerUser($id)
	{


	//$this->allowTo(['admin']);

	$usersModelsuppr = new UsersModel();

			if($usersModelsuppr->delete($id)){

			$this->show('users/page_supprimer_user');
				
			}
	}


	public function selectDestinations()
	{


	//$this->allowTo(['admin']);

	$destinationModel = new DestinationsModel();
	$listeDestinations = $destinationModel->destFindAll();

	


	$this->show('users/page_admin_destinations', ['listeDestinations' => $listeDestinations]);
	}

	public function supprimerDestination($id)
	{


	//$this->allowTo(['admin']);

	$destinationModelsuppr = new DestinationsModel();

			if($destinationModelsuppr->destDelete($id)){
			$this->show('users/page_supprimer_destination');
				
			}
	}


	
}