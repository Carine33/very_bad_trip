<?php

namespace W\Model;

/**
 * Classe requise par l'AuthentificationModel, éventuellement à étendre par le UsersModel de l'appli
 */
class DestinationsModel extends Model
{

	public function destFindAll()
	{

		$sql = 'SELECT * FROM destination';
		
		$sth = $this->dbh->prepare($sql);
		$sth->execute();

		return $sth->fetchAll();
	}

	
	public function destDelete($id)
	{
		if (!is_numeric($id)){
			return false;
		}

		$sql = 'DELETE FROM destination WHERE id = :id LIMIT 1';
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id', $id);
		return $sth->execute();
	}
}
?>