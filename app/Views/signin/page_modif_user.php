<?php $this->layout('layout_registration', ['title' => 'Inscription']) ?>

<?php $this->start('main_content') ?>

<?php //var_dump($_POST); ?>


	<div class="container">
		<div class="row">
            <div class="col-lg-12">

            	<?php $users ?>

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

				<form method="post" enctype="multipart/form-data" action="<?=$this->url('signin_updateSigninUser');?>">
					<input type="hidden" name="id" value="<?php echo $users['id'] ?>">
					<input type="hidden" name="role" value="<?php echo $users['role'] ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="username">Votre pseudo : </label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Votre pseudo *" value="<?php echo $users['username'] ?>">
				            	<p class="help-block text-danger"></p>
				        	</div>

				            <div class="form-group">
								<label for="avatar">Avatar</label>
								<input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">

						    	<!-- <input type="file" class="form-control" id="avatar" name="avatar" value="<?php echo $this->assetUrl('upload/'.$w_user['avatar']); ?>"> -->

						    	
						    	<input type="file" class="form-control" id="avatar" name="avatar" >
						    	<p class="help-block text-danger"></p>
						    	

						    	<div class="col-sm-10">
  									<button type="button" class="btn btn-xl" id="fakeBrowser" >choisir </button>
  									<input type="text" id="nomFichier" readonly="true" name="pictureDeux" value="<?php echo $users['avatar'] ?>">
  								</div>

						    </div>	
							
						</div>	
						<div class="col-md-6">	
							<div class="form-group">
								<label for="email">Votre Adresse email : </label>
								<input type="email" class="form-control" id="email" name="email" placeholder="votre@email.fr *"value="<?php echo $users['email'] ?>">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<label for="country">Votre pays : </label>
								<input type="text" class="form-control" id="country" name="country" placeholder="Votre pays *" value="<?php echo $users['country'] ?>">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<label for="city">Votre ville : </label>
								<input type="text" class="form-control" id="city" name="city" placeholder="Votre ville *" value="<?php echo $users['city'] ?>">
								<p class="help-block text-danger"></p>
							</div>
						</div>
					
						

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