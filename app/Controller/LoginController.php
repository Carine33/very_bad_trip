<?php

namespace Controller;

use \W\Controller\Controller as Controller;
use \W\Model\UsersModel as UsersModel; // Permet "d'importer" la classe UsersModel que l'on pourra instancier via new UsersModel();
use \W\Security\AuthentificationModel as AuthModel;
use \W\Model\LoginModel;

class LoginController extends Controller
{
	public function login(){

		$errors = [];
		$post = [];
		if(!empty($_POST)){
			// On nettoie les données.. c'est l'équivalent de notre foreach
			$post = array_map('strip_tags', $_POST);
			$post = array_map('trim', $post);

			if(!preg_match("#^[A-Z]+[a-zA-Z0-9À-ú'\s]{3,25}#", $post['username'])) {
				$errors[] = 'Votre pseudo doit comporter entre 3 et 25 caractères et commencer par une majuscule';
			}
			if(empty($post['password'])){
				$errors[] = 'Vous devez saisir un mot de passe';
			}

			if(count($errors) === 0){
				// On instancie les classes UserModel et AuthModel
				$usersModel = new UsersModel();
				$authModel = new AuthModel();

				// La méthode isValideLoginInfo() retourne un id d'utilisateur si celui-ci existe et que le couple identifiant/mdp existe.
				// $idUser contient l'id de mon utilisateur
				$idUser = $authModel->isValidLoginInfo($post['username'], $post['password']);
				if($idUser){
					// On appelle la méthode find() qui permet de retourner les résultats en fonction d'un ID. $user contient mon utilisateur.
					$user = $usersModel->find($idUser);

					// La méthode logUserIn() permet de connecter un utilisateur
					if($authModel->logUserIn($user)){
						
						
					}
					#$myUser = $authModel->getLoggedUser(); // Permet de récupérer les infos de sessions
					#$myUser = $this->getUser(); // Permet de récupérer les infos de sessions
				}
				else {
					$errors[] = 'Le couple identifiant/mot de passe est invalide';
				}

				if($user['role'] == 'user'){
					$this->redirectToRoute('default_home');
				}

				if($user['role'] == 'admin'){
					$this->redirectToRoute('admin_adminIndex');
				}
			}
		}

		$params = ['errors' => $errors];
		$this->show('login/login', $params);
	}

	public function logout()
	{
		// On vérifie que le paramètre GET soit ok et que la valeur soit bien Oui
		// Si tout est bon, l'utilisateur a donc confirmer sa déconnexion
		if(!empty($_GET) && isset($_GET['logout']) && $_GET['logout'] == 'Oui'){
			$authModel = new AuthModel();
			$authModel->logUserOut(); // Permet de déconnecter l'utilisateur
			// On redirige l'utilisateur vers la page d'accueil 
			$this->redirectToRoute('default_home');
			
		}

		$this->show('login/logout');
	}

	

	
	public function mylostpassword()
	{

		//die('err 1');

		$error = [];
		$post = [];
		$params = [];
		$app = getApp();

		 
		$showFormEmail = true; // Permet d'afficher le premier formulaire de saisi d'email
		$showFormPassword = false; // Permet d'afficher le second formulaire de mise à jour du mot de passe
		// Si on a un token et une adresse mail dans l'url (en GET) on masque le 1er formulaire et on affiche le second

		$params = [
					/*'linkChangePassword' => $linkChangePassword, */
					'showFormEmail' => $showFormEmail, 
					'showFormPassword' => $showFormPassword
				];
		

		// On traite nos formulaires
		if(!empty($_POST)){
			// On nettoie les données
			foreach($_POST as $key => $value){
				$post[$key] = trim(strip_tags($value));
			}

			// Ici on traite le formulaire de l'adresse email
			if(isset($post['action']) && $post['action'] == 'generateToken'){
				// Ici, l'adresse email est au bon format (note : il n'y a pas le point d'exclamation (!) devant filter_var())
				if(filter_var($post['email_password'], FILTER_VALIDATE_EMAIL)){

					$loginObjet = new LoginModel();
					$emailExist = $loginObjet->emailExist($post['email_password']);


					if(!empty($emailExist)){  // On trouve une correspondance avec l'email

						$token = md5(uniqid()); // On créer le token 

						// (NOW() + INTERVAL 2 DAY) = Maintenant + 2 jours
				
						$insertToken = $loginObjet->insertTokenPassword($post['email_password'], $token);

						if($insertToken){
							// Ici on envoi un mail qui contient le lien avec le token et l'email en GET 
							// Pour l'exercice on affichera seulement ce lien
							/*$linkChangePassword = 'lost_password.php?email='.$post['email_password'].'&token='.$token;*/
							$myEmail = $post['email_password']; 

							$linkChangePassword = $this->generateUrl('login_mypassword',['email' => $myEmail, 'token' => $token]);


							 $mail = new \PHPMailer();//à décommenter

		                		//$mail->SMTPDebug = 3;                               
		                		// Enable verbose debug output

		                		$mail->isSMTP();// Set mailer to use SMTP//à décommenter
		                		/*$mail->Host = 'smtp1.example.com;smtp2.example.com';*/  // Specify main and backup SMTP servers
		                		$mail->Host = $app->getConfig('mail_host');//à décomenter
		                		$mail->SMTPAuth = true;// Enable SMTP authentication//à décomenter
		                		/*$mail->Username = 'user@example.com'; */                // SMTP username
		                		$mail->Username = $app->getConfig('mail_username');;//à décommenter 
		                		/*$mail->Password = 'secret'; */
		                		$mail->Password = $app->getConfig('mail_password');;// SMTP password//à décomenter
		                		$mail->SMTPSecure = 'tls';// Enable TLS encryption, `ssl` also accepted//à décomenter
		                		$mail->Port =  465;// TCP port to connect to//à décommenter

		                		$mail->setFrom('nom.prenom@exemple.com', 'prénom');//à décommenter
		                		$mail->addAddress($post['email_password']); //à décommenter    
		                		// Add a recipient
		                		/*$mail->addAddress('ellen@example.com');*/               // Name is optional deuxieme adresse 
		                		$mail->addReplyTo('info@example.com', 'Information');//à décommenter
		                		/*$mail->addCC('cc@example.com');
		                		$mail->addBCC('bcc@example.com');*/

		                		/*$mail->addAttachment('/var/tmp/file.tar.gz');  */       // Add attachments
		                		/*$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name
		                		$mail->isHTML(true);// Set email format to HTML//à décommenter

		                		$mail->Subject = 'modification de password';//à décommenter
		                		$mail->Body    = '<p>Vous pouvez réinitialiser votre mot de passe en cliquant sur le lien suivant :
		                		<br>
		                		<a href="localhost'.$linkChangePassword.'">Modifier mon mot de passe</a>
		                		</p>
		                		<br>
		                		<code>'.$linkChangePassword.'</code>';

		                		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';//à décommenter

		                		/*$mail->Body = nl2br($post['content']);
		                		$mail->AltBody = $post['content'];*/


		                		if(!$mail->send()) {
		                			echo 'Le message n\'a pu être envoyé.';
		                			echo 'Mailer Error: ' . $mail->ErrorInfo;
		                		} else {
		                		echo 'Le message a été envoyé.';
		                		}//à décommenter
						}
					}
				}
				else {
					$error[] = 'Votre adresse email est incorrecte';
				}


				// On affiche le tout
				$params = [
					'linkChangePassword' => $linkChangePassword, 
					'showFormEmail' => $showFormEmail, 
					'showFormPassword' => $showFormPassword
				];

			}
			
		}
		

		$this->show('login/lostpassword', $params);
	}	

public function mylostpasswordDeux($email, $token)
	{

		//die('err 1');

		$error = [];
		$post = [];
		$params = [];

	

		 
		$showFormEmail = true; // Permet d'afficher le premier formulaire de saisi d'email
		$showFormPassword = false; // Permet d'afficher le second formulaire de mise à jour du mot de passe
		// Si on a un token et une adresse mail dans l'url (en GET) on masque le 1er formulaire et on affiche le second

		$params = [
					/*'linkChangePassword' => $linkChangePassword, */
					'showFormEmail' => $showFormEmail, 
					'showFormPassword' => $showFormPassword
				];
		if(isset($token) && !empty($token) && isset($email) && !empty($email)){
			$showFormEmail = false; 
			$showFormPassword = true;
			//var_dump($_GET[]);
			/*$params = ['linkChangePassword' => $linkChangePassword, 'showFormEmail' => $showFormEmail, 'showFormPassword' => $showFormPassword];
						
			$this->show('login/lostpassword', $params);*/
			//die('err 2');
			$params = [

					/*'linkChangePassword' => $linkChangePassword,*/
					'showFormEmail' => $showFormEmail,
					'showFormPassword' => $showFormPassword

					];
						
			/*$this->show('login/lostpassword', $params);*/
		}

		// On traite nos formulaires
		if(!empty($_POST)){
			// On nettoie les données
			foreach($_POST as $key => $value){
				$post[$key] = trim(strip_tags($value));
			}

			// Ici on traite le formulaire de l'adresse email
			if(isset($post['action']) && $post['action'] == 'generateToken'){
				// Ici, l'adresse email est au bon format (note : il n'y a pas le point d'exclamation (!) devant filter_var())
				if(filter_var($post['email_password'], FILTER_VALIDATE_EMAIL)){

					$loginObjet = new LoginModel();
					$emailExist = $loginObjet->emailExist($post['email_password']);


					if(!empty($emailExist)){  // On trouve une correspondance avec l'email

						$token = md5(uniqid()); // On créer le token 

						// (NOW() + INTERVAL 2 DAY) = Maintenant + 2 jours
				
						$insertToken = $loginObjet->insertTokenPassword($post['email_password'], $token);

						if($insertToken){
							// Ici on envoi un mail qui contient le lien avec le token et l'email en GET 
							// Pour l'exercice on affichera seulement ce lien
							/*$linkChangePassword = 'lost_password.php?email='.$post['email_password'].'&token='.$token;*/
							$myEmail = $post['email_password']; 

							$linkChangePassword = $this->generateUrl('login_mypassword',['email' => $myEmail, 'token' => $token]);


						}
					}
				}
				else {
					$error[] = 'Votre adresse email est incorrecte';
				}


				// On affiche le tout
				$params = [
					'linkChangePassword' => $linkChangePassword, 
					'showFormEmail' => $showFormEmail, 
					'showFormPassword' => $showFormPassword
				];

			}
			// Ici on traite le formulaire de mise à jour du mot de passe
			elseif(isset($post['action']) && $post['action'] == 'updatePassword'){
			
				// Le mot de passe doit faire entre 8 et 20 caractères
				if(strlen($post['new_password']) < 8 || strlen($post['new_password']) > 20){
					$error[] = 'Le mot de passe doit comporter entre 8 et 20 caractères';
				}
				// Le mot de passe et sa confirmation doivent correspondre
				if($post['new_password'] != $post['new_password_conf']){
					$error[] = 'Les mots de passe doivent correspondre!';
				}
				if(count($error) == 0){ // Il n'y a pas d'erreurs dans le formulaire, on peut vérifier le token & l'adresse email ... et même la date d'expiration
					$loginObjetDeux = new LoginModel();
					/*$tokenExist  = $loginObjetDeux->selectTokenPassword($post['email'],$post['token']);*/
					$tokenExist  = $loginObjetDeux->selectTokenPassword($email,$token);

					if(empty($tokenExist)){
						$error[] = 'Le token et l\'adresse email ne correspondent pas.'; // Ou le token est expiré, mais on va pas trop donner d'infos quand même :-)
					}
					else {

						// Ici, on peut ENFIN changer ce putain de mot de passe :-)
						$changeMdp = $loginObjetDeux->updatePassword($post['new_password'], $email);
						/*$changeMdp = $loginObjetDeux->updatePassword($post['new_password'], $post['email']);*/


						if($changeMdp){
							$successUpdate = true;

							// On supprime le token puisque le mdp est modifié
							$deleteTokenPassword = $loginObjetDeux->deleteTokenPassword($tokenExist['id']);

							// @todo : voir \W\Controller\Controller.php pour une méthode plus propre


							$monController = new Controller();

							$monController->redirectToRoute('login_login');
						}
					}

				} //fin count($error) == 0

				$params = [
					'error' => $error, 
					'showFormEmail' => $showFormEmail, 
					'showFormPassword' => $showFormPassword
				];
			}
		}
		

		$this->show('login/lostpassword', $params);
	}	


}