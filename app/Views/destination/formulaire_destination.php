<?php $this->layout('layout_destination', ['title' => 'Ajouter destination']) ?>

<?php $this->start('main_content') ?>

<?php 
// $w_user est accessible dans tout les fichiers de vue (Views/)
// elle retourne les infos de l'utilisateur connecté ou null sinon
/*if(!empty($w_user)){
	var_dump($w_user);
	echo '<br><br>';
	echo '<a href="'.$this->url('login_logout').'">Déconnexion</a>';
	echo '<br><br>';
    modif*/

?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        	<?php if(!empty($errors)): // On affiche les erreurs si le tableau n'est pas vide ?>
        		<div class="alert alert-danger">
            	<?=implode('<br>', $errors); ?>
            	</div>
        	<?php endif; ?>

            <?php if(isset($success) && $success === true): ?>
                    <div class="alert alert-success">
                        <p>Votre ajout a bien été enregistré.</p>
                    </div>
            <?php endif; ?>
            
        	<form method="post" id="form_destination" enctype="multipart/form-data">
            	<div class="row">
                    <div class="col-md-4 col-sm-6"></div>
                	<div class="col-md-4 col-sm-6">
                    	<div class="form-group">
                        	<label for="username">Destination : </label>
                            <select id="title_destination" class="form-control" name="title_destination">
                                <option value="Amérique du Nord">Amérique du nord</option>
                                <option value="Amérique du Sud">Amérique du sud</option>
                                <option value="Afrique">Afrique</option>
                                <option value="Asie">Asie</option>
                                <option value="Europe">Europe</option>
                                <option value="Océanie">Océanie</option>
                            </select>
                            <p class="help-block text-danger"></p>
                       	</div>

                        <div class="form-group">
                                <label for="avatar">Première image : </label>
                                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
                                <input type="file" class="form-control hidden" id="img_1avatar" name="img_1avatar" >
                                <p class="help-block text-danger"></p>
                                <div class="col-md-12 input_image">
                                    <button type="button" class="btn btn-xl" id="fakeBrowser1">Choisir </button>
                                    <input type="text" id="nomFichier1" readonly="true"  name="pictureDeuxImg_1">
                                </div>
                            </div>  
                        <div class="form-group">
                                <label for="avatar">Deuxième image : </label>
                                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
                                <input type="file" class="form-control hidden" id="img_2avatar" name="img_2avatar" >
                                <p class="help-block text-danger"></p>
                                <div class="col-md-12 input_image">
                                    <button type="button" class="btn btn-xl" id="fakeBrowser2">Choisir </button>
                                    <input type="text" id="nomFichier2" readonly="true" name="pictureDeuxImg_2">
                                </div>
                            </div>
                        <div class="form-group">
                                <label for="avatar">Troisième image : </label>
                                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
                                <input type="file" class="form-control hidden" id="img_3avatar" name="img_3avatar" >
                                <p class="help-block text-danger"></p>
                                <div class="col-md-12 input_image">
                                    <button type="button" class="btn btn-xl" id="fakeBrowser3">Choisir </button>
                                    <input type="text" id="nomFichier3" readonly="true" name="pictureDeuxImg_3">
                                </div>
                            </div>    



                       
                    </div>
                    <div class="col-md-4 col-sm-6"></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button type="submit" id="submit" class="btn btn-xl">Envoyer</button>
                      
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->stop('main_content') ?>