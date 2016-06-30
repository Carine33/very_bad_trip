<?php

namespace Controller;

use \W\Controller\Controller;
use Model\EventModel;
use Model\FloraModel;
use Model\GastronomyModel;
use Model\MonumentModel;
use Model\MovieModel;
use Model\MusicModel;
use Model\CommentsModel;

class InsertController extends Controller
{
	public function insertDb()
	{
		$events = [
			['nom_pays' => 'France', 'nom_event' => 'Festival de Canne', 'img_event' => "", 'description' => ""],
			['nom_pays' => 'Etats Unis', 'nom_event' => 'Independance Day', 'img_event' => "", 'description' => ""],
			['nom_pays' => 'Brésil', 'nom_event' => 'Carnaval de Rio', 'img_event' => "", 'description' => ""]
		];

		$eventModel = new EventModel();
		foreach ($events as $event) {
			$data = [
				'title_nation' => $event['nom_pays'],
				'name_event' => $event['nom_event'],
				'picture_event' => $event['img_event'],
				'description' => $event['description']
			];

			if($eventModel->insert($data)){
				$eventSuccess = true;
			}
		}

		$floras = [
			['nom_pays' => 'France', 'nom_flore' => 'Orchis punaise', 'img_flore' => "", 'description' => ""],
			['nom_pays' => 'Etats Unis', 'nom_flore' => 'flower usa', 'img_flore' => "", 'description' => ""],
			['nom_pays' => 'Brésil', 'nom_flore' => 'flower brazil', 'img_flore' => "", 'description' => ""]
		];

		$floraModel = new FloraModel();
		foreach ($floras as $flora) {
			$data = [
				'title_nation' => $flora['nom_pays'],
				'name_flora' => $flora['nom_flore'],
				'picture_flora' => $flora['img_flore'],
				'description' => $flora['description']
			];

			if($floraModel->insert($data)){
				$floraSuccess = true;
			}
		}

		$gastros = [
			['nom_pays' => 'France', 'nom_plat' => 'tartiflette', 'img_plat' => "", 'description' => ""],
			['nom_pays' => 'Etats Unis', 'nom_plat' => 'pancake', 'img_plat' => "", 'description' => ""],
			['nom_pays' => 'Brésil', 'nom_plat' => 'capirinia', 'img_plat' => "", 'description' => ""]
		];

		$gastroModel = new GastronomyModel();
		foreach ($gastros as $gastro) {
			$data = [
				'title_nation' => $gastro['nom_pays'],
				'name_dish' => $gastro['nom_plat'],
				'picture_dish' => $gastro['img_plat'],
				'description' => $gastro['description']
			];

			if($gastroModel->insert($data)){
				$gastroSuccess = true;
			}
		}

		$monuments = [
			['nom_pays' => 'France', 'nom_monum' => 'Montmartre', 'img_monum' => "", 'description' => ""],
			['nom_pays' => 'Etats Unis', 'nom_monum' => 'golden gate', 'img_monum' => "", 'description' => ""],
			['nom_pays' => 'Brésil', 'nom_monum' => 'Jésus', 'img_monum' => "", 'description' => ""]
		];

		$monumentModel = new MonumentModel();
		foreach ($monuments as $monument) {
			$data = [
				'title_nation' => $monument['nom_pays'],
				'name_monument' => $monument['nom_monum'],
				'picture_monument' => $monument['img_monum'],
				'description' => $monument['description']
			];

			if($monumentModel->insert($data)){
				$monumentSuccess = true;
			}
		}

		$movies = [
			['nom_pays' => 'France', 'nom_film' => 'polisse', 'img_film' => "", 'description' => ""],
			['nom_pays' => 'Etats Unis', 'nom_film' => 'matrix', 'img_film' => "", 'description' => ""],
			['nom_pays' => 'Brésil', 'nom_film' => 'la cité de dieux', 'img_film' => "", 'description' => ""]
		];

		$movieModel = new MovieModel();
		foreach ($movies as $movie) {
			$data = [
				'title_nation' => $movie['nom_pays'],
				'title_movie' => $movie['nom_film'],
				'poster' => $movie['img_film'],
				'description' => $movie['description']
			];

			if($movieModel->insert($data)){
				$movieSuccess = true;
			}
		}

		$musics = [
			['nom_pays' => 'France', 'nom_musique' => 'variété', 'img_musique' => "", 'description' => ""],
			['nom_pays' => 'Etats Unis', 'nom_musique' => 'country', 'img_musique' => "", 'description' => ""],
			['nom_pays' => 'Brésil', 'nom_musique' => 'samba', 'img_musique' => "", 'description' => ""]
		];

		$musicModel = new MusicModel();
		foreach ($musics as $music) {
			$data = [
				'title_nation' => $music['nom_pays'],
				'name_music' => $music['nom_musique'],
				'picture_music' => $music['img_musique'],
				'description' => $music['description']
			];

			if($musicModel->insert($data)){
				$musicSuccess = true;
			}
		}
	$params = [ 'eventSuccess' => $eventSuccess, 
				'floraSuccess' => $floraSuccess,
				'gastroSuccess' => $gastroSuccess,
				'monumentSuccess' => $monumentSuccess,
				'movieSuccess' => $movieSuccess,
				'musicSuccess' => $musicSuccess
	];
	$this->show('insert/insert_db', $params);
	}
	
}