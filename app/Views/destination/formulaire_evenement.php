<?php $this->layout('layout_evenement', ['title' => 'Ajouter événement']) ?>

<?php $this->start('main_content') ?>

<?php 
// $w_user est accessible dans tout les fichiers de vue (Views/)
// elle retourne les infos de l'utilisateur connecté ou null sinon
/*if(!empty($w_user)){
	var_dump($w_user);
	echo '<br><br>';
	echo '<a href="'.$this->url('login_logout').'">Déconnexion</a>';
	echo '<br><br>';
    modif
*/
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        	<?php if(!empty($errors)): // On affiche les erreurs si le tableau n'est pas vide ?>
        		<div class="alert alert-danger">
            	<?=implode('<br>', $errors); ?>
            	</div>
        	<?php endif; ?>
            <h1>Evenement</h1>
         
        	<form method="post" enctype="multipart/form-data">
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

                            <label for="nation">Pays : </label>
                            <input type="text" class="form-control" id="title_nation" name="title_nation">
                            <p class="help-block text-danger"></p>

                        </div>
                        <div class="form-group">

                            <label for="name_event">Nom de l'événement : </label>
                            <input type="text" class="form-control" id="name_event" name="name_event">
                            <p class="help-block text-danger"></p>

                        </div>

                         <div class="form-group">
                                <label for="avatar">Image : </label>
                                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
                                <input type="file" class="form-control" id="avatar" name="avatar" >
                                <p class="help-block text-danger"></p>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-xl" id="fakeBrowser">Choisir </button>
                                    <input type="text" id="nomFichier" readonly="true" name="pictureDeux">
                                </div>
                            </div>  
                            
                        <div class="form-group">

                            <label for="name_event">Description de l'événement : </label>
                            <textarea  id="description" class="form-control" name="description"></textarea>
                            <p class="help-block text-danger"></p>

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