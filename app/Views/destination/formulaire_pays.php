<?php $this->layout('layout_evenement', ['title' => 'Se connecter']) ?>

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
            <h1>Evénement</h1>
            
        	<form method="post" >
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
                                 <option value="Océanie">Océanie</option>
                            </select>
                            <p class="help-block text-danger"></p>
                       	</div>
                        <div class="form-group">

                            <label for="nation">Pays : </label>
                            <input type="text" id="title_nation" name="title_nation">
                            <p class="help-block text-danger"></p>

                        </div>
                        
                            
                        <div class="form-group">

                            <label for="name_event">description de l'évenement : </label>
                            <textarea  id="description" name="description"></textarea>
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