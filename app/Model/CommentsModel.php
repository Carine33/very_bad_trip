<?php 
namespace Model;

class CommentsModel extends \W\Model\Model 
{
/*	
	Le framework W déduit automatiquement le nom de la table de données en fonction du nom du modèle. Par exemple :

	- BlogModel => blog
	- BlogUtilisateurs => blog_utilisateurs
*/




	public function insertComment(array $data, $stripTags = true)
	{

		$colNames = array_keys($data);
		$colNamesString = implode(', ', $colNames);

		$sql = 'INSERT INTO ' . $this->table . ' (' . $colNamesString . ',date_add) VALUES (';
		foreach($data as $key => $value){
			$sql .= ":$key, ";
		}
		// Supprime les caractères superflus en fin de requète
		$sql = substr($sql, 0, -2);
		$sql .= ', NOW())';

		$sth = $this->dbh->prepare($sql);
		foreach($data as $key => $value){
			$value = ($stripTags) ? strip_tags($value) : $value;
			$sth->bindValue(':'.$key, $value);
		}

		if (!$sth->execute()){
			return false;
		}
		return $this->find($this->lastInsertId());
	}

	
}