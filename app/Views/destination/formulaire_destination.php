<?php $this->layout('layout_destination', ['title' => 'Se connecter']) ?>

<?php $this->start('main_content') ?>

<?php 
// $w_user est accessible dans tout les fichiers de vue (Views/)
// elle retourne les infos de l'utilisateur connecté ou null sinon
/*if(!empty($w_user)){
	var_dump($w_user);
	echo '<br><br>';
	echo '<a href="'.$this->url('login_logout').'">Déconnexion</a>';
	echo '<br><br>';*/

?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        	<?php if(!empty($errors)): // On affiche les erreurs si le tableau n'est pas vide ?>
        		<div class="alert alert-danger">
            	<?=implode('<br>', $errors); ?>
            	</div>
        	<?php endif; ?>
            
            	<div class="row">
                    <div class="col-md-4 col-sm-6"></div>
                	<div class="col-md-4 col-sm-6">
                    	<div class="form-group">
                        	<label for="username">Destination : </label>
                            <select id="title_destination" name="title_destination">
                                <option value="AN">Amerique du nord</option>
                                <option value="AS">Amerique du sud</option>
                                <option value="Afrique">Afrique</option>
                                <option value="Asie">Asie</option>
                                <option value="Europe">Europe</option>
                            </select>
                            <p class="help-block text-danger"></p>
                       	</div>

                        <div class="form-group">
                                <label for="avatar">premiére image : </label>
                                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
                                <input type="file" class="form-control" id="img_1avatar" name="img_1avatar" >
                                <p class="help-block text-danger"></p>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-xl" id="fakeBrowser1">Choisir </button>
                                    <input type="text" id="nomFichier1" readonly="true" name="pictureDeuxImg_1">
                                </div>
                            </div>  
                        <div class="form-group">
                                <label for="avatar">deuxieme image : </label>
                                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
                                <input type="file" class="form-control" id="img_2avatar" name="img_2avatar" >
                                <p class="help-block text-danger"></p>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-xl" id="fakeBrowser2">Choisir </button>
                                    <input type="text" id="nomFichier2" readonly="true" name="pictureDeuxImg_2">
                                </div>
                            </div>
                        <div class="form-group">
                                <label for="avatar">troisiéme image : </label>
                                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
                                <input type="file" class="form-control" id="img_3avatar" name="img_3avatar" >
                                <p class="help-block text-danger"></p>
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-xl" id="fakeBrowser3">Choisir </button>
                                    <input type="text" id="nomFichier" readonly="true" name="pictureDeuxImg_3">
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
