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
	
	public function getDestinationByNameDestination($destination){


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
}
?>