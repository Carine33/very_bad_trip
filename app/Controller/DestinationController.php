<?php

namespace Controller;

use \W\Controller\Controller;
//permet d'importer la classe DestinationModel que l'on pourra instancier via new DestinationModel();
use \W\Model\DestinationsModel as DestinationsModel;







use \W\Security\AuthentificationModel as AuthModel;

class DestinationController extends Controller
{
	
	

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