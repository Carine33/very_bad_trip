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

class DestinationController extends Controller
{

	/**
	 * Méthode permettant d'accéder à ma fiche destination
	 */
	public function viewDestination($id)
	{

		$destinationsModel = new DestinationsModel();
		$destination = $destinationsModel->find($id);

		$params = [
			'destination' => $destination,
		];

		$this->show('destination/file_destination', $params);
	}


}