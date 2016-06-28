<?php

namespace W\Model;

/**
 * Classe requise par l'AuthentificationModel, éventuellement à étendre par le UsersModel de l'appli
 */
class LoginModel extends Model
{

	public function emailExist($email_password)
	{


			$sql = 'SELECT email FROM users WHERE email = :email';
			$sth = $this->dbh->prepare($sql);
			$sth->bindValue(':email', $email_password);
			$sth->execute();

			return $sth->fetchColumn();

		
	}

	
	public function insertTokenPassword($email, $token){


			$sql = 'INSERT INTO tokens_password (email, token, date_create, date_exp) VALUES(
						:emailInsert, 
						:tokenInsert, 
						NOW(), 
						(NOW() + INTERVAL 2 DAY)
					)';
				$insert = $this->dbh->prepare($sql);

				$insert->bindValue(':emailInsert', $email);
				$insert->bindValue(':tokenInsert', $token);

				return $insert->execute();


	}

	public function selectTokenPassword($email, $token){


			$sql = 'SELECT * FROM tokens_password WHERE email = :postEmail AND token = :postToken AND date_exp > NOW()';

			$tok = $this->dbh->prepare($sql);
			$tok->bindValue(':postEmail', $email);
			$tok->bindValue(':postToken', $token);
			$tok->execute();

			return $tok->fetch();

	}

	public function updatePassword($new_password, $email){

			$sql = 'UPDATE users SET password = :newPassword WHERE email = :email';
				$update = $this->dbh->prepare($sql);
				$update->bindValue(':newPassword', password_hash($new_password, PASSWORD_DEFAULT)); // On insère le mot de passe hashé
				$update->bindValue(':email', $email);
				return $update->execute();




	}

	public function deleteTokenPassword($tokenExistId){


				$sql = 'DELETE FROM tokens_password WHERE id = :idToken';
				$delete = $this->dbh->prepare($sql);
					$delete->bindValue(':idToken', $tokenExistId); // $tokenExist contient les infos de mon token extraites de la base de données.. et donc son ID
					return $delete->execute();

	}
}
?>