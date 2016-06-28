<?php $this->layout('layout_login', ['title' => 'Se connecter']) ?>

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
            
        	<form method="post" novalidate>
            	<div class="row">
                    <div class="col-md-4 col-sm-6"></div>
                	<div class="col-md-4 col-sm-6">
                    	<div class="form-group">
                        	<label for="username">Votre pseudo : </label>
                            <input type="text" class="form-control" placeholder="Votre pseudo *" id="username" name="username" required>
                            <p class="help-block text-danger"></p>
                       	</div>
                        <div class="form-group">
                        	<label for="password">Votre mot de passe : </label>
                            <input type="password" class="form-control" placeholder="Votre mot de passe *" id="password" name="password" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6"></div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button type="submit" id="submit" class="btn btn-xl">Envoyer</button>
                       <a href="">Mot de passe oublié</a> 
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->stop('main_content') ?>