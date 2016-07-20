<?php

namespace Model;


class DestinationModel extends \W\Model\Model
{


	public function getDestinationById($id) {

		if (!is_numeric($id)){
			return false;
		}

		$sql = 'SELECT * FROM ' . $this->table . '
			INNER JOIN event ON  ' . $this->table . '.title_nation = event.title_nation 
			INNER JOIN flora ON ' . $this->table . '.title_nation = flora.title_nation
			INNER JOIN gastronomy ON ' . $this->table . '.title_nation = gastronomy.title_nation
			INNER JOIN monument ON ' . $this->table . '.title_nation = monument.title_nation
			INNER JOIN movie ON ' . $this->table . '.title_nation = movie.title_nation
			
			WHERE ' . $this->primaryKey .'  = :id LIMIT 1';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id);
		$sth->execute();

		return $sth->fetch();


	}
	
	public function getRowDestination($destination){


		$sql = 'SELECT * FROM destination WHERE title_destination = :destination';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':destination', $destination);
		$sth->execute();

		return $sth->fetch();




	}

	public function getListePaysByIdDestination($id){


		


		if (!is_numeric($id)){
			return false;
		}

		$sql = 'SELECT * FROM pays
			INNER JOIN destination ON pays.title_destination = destination.title_destination			
			WHERE destination.id  = :id';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id);
		$sth->execute();

		return $sth->fetchAll();




	}


	public function getListeThemesPaysByTitleNation($pays)
	{

		$tableau = array();

		$sql1 = 'SELECT * FROM theme WHERE  title_nation = :pays AND theme = "event" LIMIT 3';
			
			
			
		$sth1 = $this->dbh->prepare($sql1);
		$sth1->bindValue(':pays', $pays);
		$sth1->execute();

		$event = $sth1->fetchALL();

		$sql2 = 'SELECT * FROM theme WHERE  title_nation = :pays AND theme = "flora" LIMIT 3';
			
			
			
		$sth2 = $this->dbh->prepare($sql2);
		$sth2->bindValue(':pays', $pays);
		$sth2->execute();

		$flora = $sth2->fetchALL();

		$sql3 = 'SELECT * FROM theme WHERE  title_nation = :pays AND theme = "gastronomy" LIMIT 3';
			
			
			
		$sth3 = $this->dbh->prepare($sql3);
		$sth3->bindValue(':pays', $pays);
		$sth3->execute();

		$gastronomy = $sth3->fetchALL();

		$sql4 = 'SELECT * FROM theme WHERE  title_nation = :pays AND theme = "monument" LIMIT 3';
			
			
			
		$sth4 = $this->dbh->prepare($sql4);
		$sth4->bindValue(':pays', $pays);
		$sth4->execute();

		$monument = $sth4->fetchALL();

		$sql5 = 'SELECT * FROM theme WHERE  title_nation = :pays AND theme = "movie" LIMIT 3';
			
			
			
		$sth5 = $this->dbh->prepare($sql5);
		$sth5->bindValue(':pays', $pays);
		$sth5->execute();

		$movie = $sth5->fetchALL();

		$sql6 = 'SELECT * FROM theme WHERE  title_nation = :pays AND theme = "music" LIMIT 3';
			
			
			
		$sth6 = $this->dbh->prepare($sql6);
		$sth6->bindValue(':pays', $pays);
		$sth6->execute();

		$music = $sth6->fetchALL();

		$tableau = [ 

			'pays'		 => $pays,
			'event'      => $event,
			'flora'      => $flora,
			'gastronomy' => $gastronomy,
			'monument'   => $monument,
			'movie'      => $movie,
			'music'      => $music,

		];

		return $tableau;
	}


public function getListeTitleNation()
	{
	 				$mySql = 'SELECT DISTINCT title_nation FROM pays';
                    $mySth1 = $this->dbh->prepare($mySql);
                  	$mySth1->execute();
                    return  $mySth1->fetchALL();
    }
}
?>