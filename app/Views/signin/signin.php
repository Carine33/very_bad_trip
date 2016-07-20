<?php $this->layout('layout_registration', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<?php //var_dump($_POST); ?>


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
						<p>Votre inscription a bien été prise en charge en attente de validation de votre compte</p>
					</div>
				<?php else: ?>

				<form method="post" enctype="multipart/form-data">
				<input type="hidden" name="role"  value="user"> 
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="username">Votre pseudo : </label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Votre pseudo *">
				            	<p class="help-block text-danger"></p>
				        	</div>

							<div class="form-group">
								<label for="password">Votre mot de passe : </label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe *">
								<p class="help-block text-danger"></p>
							</div>
							
				           	<div class="form-group">
								<label for="avatar">Avatar : </label>
								<input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
						    	<input type="file" class="form-control" id="avatar" name="avatar" >
						    	<p class="help-block text-danger"></p>
						    	<div class="col-md-10">
  									<button type="button" class="btn btn-xl" id="fakeBrowser">Choisir </button>
  									<input type="text" id="nomFichier" readonly="true" name="pictureDeux">
  								</div>
						    </div>	
						</div>	
						<div class="col-md-6">	
							<div class="form-group">
								<label for="email">Votre Adresse email : </label>
								<input type="email" class="form-control" id="email" name="email" placeholder="votre@email.fr *">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<label for="country">Votre pays : </label>
								<input type="text" class="form-control" id="country" name="country" placeholder="Votre pays *">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<label for="city">Votre ville : </label>
								<input type="text" class="form-control" id="city" name="city" placeholder="Votre ville *">
								<p class="help-block text-danger"></p>
							</div>
						</div>
					
<!-- 						<div class="form-group">
								<div class="col-md-6">
									<label class="control-label" for="role">Statut</label>
									<div class="radio">
										<label for="role-0">
										<input type="radio" name="role" id="role-0" value="admin"> Administrateur
										</label>
									</div>
									<div class="radio">
										<label for="role-1">
										<input type="radio" name="role" id="role-1" value="user"> Utilisateur
										</label>
									</div>
								</div>
						</div> -->

						<div class="clearfix"></div>
                            <div id="btnSubReg" class="col-lg-12 text-center">
							<input type="submit" id="submit" value="Envoyer" class="btn btn-xl" >
						</div>
					</div>	
				</form>
			</div>
		</div>
	</div>

<?php endif; ?>

<?php $this->stop('main_content') ?>