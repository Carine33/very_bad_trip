<?php
require_once '../inc/connect.php';
$error = array();
$post  = array();
$affichageFormulaire = false;
$formValid = false;
$displayErr = false;
/*
S'il y a un slash (/) initial, cherchera le dossier à la racine du site web (localhost), sinon, cherchera dans le dossier courant

*/

$folder = 'img/';
$maxSize = 100000000 * 5;


/*"début de condition"*/







if(!empty($_GET['id'])){

			if(!empty($_FILES) && isset($_FILES['picture'])){

								if (!empty($_FILES['picture']['tmp_name'])){
							
								$nomFichier = $_FILES['picture']['name'];
								
								$newFileName = explode('.', $nomFichier);
								$fileExtension = end($newFileName); // Récupère la dernière entrée du tableau (créé avec explode) soit l'extension du fichier

								        // nom du fichier avatar au format : user-id-timestamp.jpg
								$finalFileName = 'restaurant-'.$_GET['id'].'-'.time().'.'.$fileExtension;

								
								$picture = $finalFileName;
								$tmpFichier = $_FILES['picture']['tmp_name'];
								var_dump('tmpFichier : '.$tmpFichier);

												var_dump('si le fichier tmpFichier n\'est pas vide');
												
												/*"A cet endroit, essayez d'utiliser la fonction move_upload_file()
												Pour placer le fichier dans le dossier image... un peu de concatenation :-)"*/

												$newFichier = $folder.$finalFileName;
												if(  $_FILES['picture']['size'] <= $maxSize){


													var_dump('ici : '.$newFichier);


															if(move_uploaded_file( $tmpFichier , $newFichier  )){

															$success = "Fichier envoyé !!";
															/*$picture = $finalFileName;*/
															/*retourne un boolean true si le fichier a bien été déplacé/envoye
															false si il y a une erreur*/

															}

															else {

															$errorUpdate = 'Erreur lors de l\'envoi de fichier';
															}
												}
							
							}
			}

		if(empty($_POST)){
			
			$res = $pdo->prepare('SELECT * FROM resto WHERE id = :id');
			$res->bindValue(':id' ,$_GET['id']  , PDO::PARAM_INT);
				
			if($res->execute()){


			$restaurant = $res->fetch(PDO::FETCH_ASSOC);
			$idRestaurant = $restaurant['id'];
			$title = $restaurant['title'];
			$adress = $restaurant['adress'];
			$zipcode = $restaurant['zipcode'];
			$city = $restaurant['city'];
			$phone = $restaurant['phone'];
			$email_restaurant = $restaurant['email'];
			$picture = $restaurant['link'];
			//unset($_GET['id']);
			}
		}
		if(!empty($_POST)){

			foreach ($_POST as $key => $value) {
			$post[$key] = trim(strip_tags($value));
			}

			
		if(!preg_match ( "#^[a-zA-Z0-9À-ú'\s_-]{5,140}$#" , $post['title'] )){
			$error[] = 'Le titre doit comporter entre 5 et 140 caractères';
		}

		/*if(strlen($post['adress']) < 3 || strlen($post['adress']) > 50){*/
		/*if(!preg_match ( "#^[a-zA-ZÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ_-]{3,50}$#"  , $post['adress'] )){*/
		if(!preg_match ( "#^[a-zA-Z0-9À-ú'\s,]{5,60}$#"  , $post['adress'] )){
			$error[] = 'L \'adresse doit comporter entre 3 et 50 caractères';
		}

		if(!preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $post['email'] )){
			$error[] = 'le contenu ne correspond pas à une adresse email';
		}

		if(!preg_match ( "#^[0-9]{10}$#" , $post['phone'] )){
		/*if(empty($post['phone']) && strlen($post['phone']) == 10  && !filter_var($post['phone'], FILTER_VALIDATE_INT)){*/
			$error[] = 'le numero de téléphone n\'est pas valide';
		}
		if(!preg_match ( "#^[a-zA-ZÀ-ú'\s_-]{3,50}$#" , $post['city'] )){
			$error[] = 'Le ville doit comporter entre 3 et 50 caractères';
		}
		if(!preg_match ( "#^[0-9]{5}$#" , $post['zipcode'] )){
		$error[] = 'Le code postal doit comporter 5 caractères';
		}

			

								if(count($error) == 0){
										

											$resUpdate = $pdo->prepare('UPDATE resto SET title = :title, adress = :adress, zipcode = :zipcode, city = :city, phone= :phone, email = :email, link = :link WHERE id= :idRestaurant' );

											$resUpdate->bindValue(':idRestaurant', $post['idRestaurant'], PDO::PARAM_INT);
											$resUpdate->bindValue(':title', $post['title'], PDO::PARAM_STR);
											$resUpdate->bindValue(':adress', $post['adress'], PDO::PARAM_STR);
											$resUpdate->bindValue(':zipcode', $post['zipcode'], PDO::PARAM_STR);
											$resUpdate->bindValue(':city', $post['city'], PDO::PARAM_STR);
											$resUpdate->bindValue(':phone', $post['phone'], PDO::PARAM_STR);
											$resUpdate->bindValue(':email', $post['email'], PDO::PARAM_STR);
											if (!empty($_FILES['picture']['tmp_name'])){
											$resUpdate->bindValue(':link', $finalFileName, PDO::PARAM_STR);
											}//$finalFileName
											else {
												$resUpdate->bindValue(':link', $post['pictureDeux'], PDO::PARAM_STR);
											}




												// On execute notre requete et si tout est ok, on créer une variable qui contient un message de confirmation
												if($resUpdate->execute()){
													/*$articleIsUpdate = 'Contact modifié avec succès';*/
													
												$formValid = true;
												$idRestaurant = $post['idRestaurant'];
												$title = $post['title'];
												$adress = $post['adress'];
												$zipcode = $post['zipcode'];
												$city = $post['city'];
												$phone = $post['phone'];
												$email_restaurant = $post['email'];

													if (!empty($_FILES['picture']['tmp_name'])){

														$picture = $finalFileName;
													}
													else { 

														$picture  = $post['pictureDeux'];
													}
												}
									
									}
									else {
										$displayErr = true;

										$idRestaurant = $post['idRestaurant'];
										$title = $post['title'];
										$adress = $post['adress'];
										$zipcode = $post['zipcode'];
										$city = $post['city'];
										$phone = $post['phone'];
										$email_restaurant = $post['email'];

											if (!empty($_FILES['picture']['tmp_name'])){

												$picture = $finalFileName;
											}
											else { 

												$picture  = $post['pictureDeux'];
											}

									}


		}







//chargement de l'image




?>

<!DOCTYPE html>
<html>
<head>

        
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <!--il y a aussi des balise meta pour le referencement-->

        
			<title>lecture modification coordonnées et image du restaurant</title>

       <!--Ordre des feuille de style
        1 - Bibliothéque de type Normalize, Reset...
        2 - Google Fonts
        3 - styles personnalisés-->
        
       <!-- le dernier style chargé est prioritaire-->
        <link rel="stylesheet" type="text/css" 
              href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.css">
        
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        
            

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700|Oswald:400,700|Roboto+Slab' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="css/style.css">

        <!-- il est possible de metre des style ici pour qu'il soient utiliser avant ou au debut du chargement de la page -->
    

	<style>
	#browse {

		display: none;
	}

</style>
</head>
<body>

<?php 


		if(isset($success)){
				echo '<div class="alert alert-success">';
				echo $success; // Affiche le message de réussite de l'envoi du fichier image
				echo '</div>';
		}
		
		if($formValid){
				echo '<div class="alert alert-success">';
				echo 'le resto est modifié';
				echo '</div>';
		}
		if($displayErr){ // Si on a des erreurs, on les affiche
				echo '<div class="alert alert-error">';
				echo implode('<br>', $error); // Permet de convertir le tableau $error en chaine de caractère
				echo '</div>';
		}
		if(isset($errorUpdate)){
		echo '<div class="alert alert-error">';
		echo $errorUpdate; // Affiche le message d'erreur de l'envoi du fichier image
		echo '</div>';
		}
?>



<form class="form-horizontal" method="POST" enctype="multipart/form-data">
<input type="hidden" name="idRestaurant" value="<?php echo $idRestaurant ?>">
<input type="hidden" name="veryFinalFileName" value="<?php echo $finalFileName ?>">



   




<div class="form-group">
  <label for="title" class="col-sm-2 control-label">Titre : </label>
  <div class="col-sm-3">
  <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
  </div>
</div>
<div class="form-group">
  <label for="adresse" class="col-sm-2 control-label">Adresse : </label>
  <div class="col-sm-3">
  <input type="text" name="adress" class="form-control" value="<?php echo $adress ?>">
  </div>
</div>
<div class="form-group">
  <label for="zipCode" class="col-sm-2 control-label">Code postal : </label>
  <div class="col-sm-3">
  <input type="text" name="zipcode" class="form-control" value="<?php echo $zipcode ?>">
  </div>
</div>
<div class="form-group">
  <label for="city" class="col-sm-2 control-label">Ville : </label>
  <div class="col-sm-3">
  <input type="text" name="city" class="form-control" value="<?php echo $city ?>">
  </div>
</div>
<div class="form-group">
  <label for="phone" class="col-sm-2 control-label">Telephone : </label>
  <div class="col-sm-3">
  <input type="text" name="phone" class="form-control" value="<?php echo $phone ?>">
  </div>
</div>
<div class="form-group">
  <label for="email" class="col-sm-2 control-label">Email : </label>
  <div class="col-sm-3">
  <input type="email" name="email" class="form-control" value="<?php echo $email_restaurant ?>">
  </div>
</div>


<div class="form-group">
  <label for="image" class="col-sm-2 control-label">Image : </label>
  <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">

	<input id="browse" type="file" name="picture" value="<?php echo $picture ?>"> 


  <div class="col-sm-3">
  <input type="text" id="nomFichier" readonly="true" name="pictureDeux" value="<?php echo $picture ?>">
  <button type="button" class="btn btn-primary" id="fakeBrowser" >choisir </button>
  </div>
</div>


<div class="form-group">
<label for="image" class="col-sm-2 control-label"></label>
	<div class="col-sm-2">
		<input type="submit" id="btnSubmit" class="btn btn-primary">
	</div>
</div>

</form>
<p id="demo"></p>


<!-- <input type="file" accept="image/*" onchange="previewImage(event)" name="picture">
<p id="output"></p> -->


<script>

</script>



 <script>
	var fileInput = document.getElementById("browse");
	var textInput = document.getElementById("nomFichier");
	var fauxBouton =  document.getElementById("fakeBrowser");
	/*var vraiBouton = document.getElementById("btnSubmit");
	var tmp = document.getElementById("tmp");*/
	
	fauxBouton.addEventListener("click", clicBrowser);
	fileInput.addEventListener("change", modifNomFichier);
	/*vraiBouton.addEventListener("click", clicBtn);
*/


	function clicBrowser(){

		fileInput.click();
	}

	function modifNomFichier(){

		/*document.getElementById('demo').innerHTML = '<img src="' + fileInput.value +'" />';*/
		document.getElementById('demo').innerHTML = fileInput.value;
		textInput.value = fileInput.value;
	}

	/*function clicBtn(){

		vraiBouton.click();
		vraiBouton.click();


	}*/

	 var previewImage = function(event) {
	 	var fakeImage = URL.createObjectURL(event.target.files[0]); 

	 	var fileName = document.getElementById('nomFichier');
	 	fileName.value = fakeImage;

	 	// Remplit la prévisualisation
	    var output = document.getElementById('demo');
   		output.innerHTML = '<img src="' + fakeImage +'" alt="">';
 	};

</script>
</body>
</html>
<?php
}
else {

?>
<!DOCTYPE html>
<html>
<head>
	<title>lecture</title>
</head>
<body>
<p>il n'y a pas d'identifiant</p> 
</body>
</html>
<?php
}
?>