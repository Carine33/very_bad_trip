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
					<!-- <?php var_dump($w_user) ?> -->

				<h1>Thémes</h1>
         
	        	<form method="post" enctype="multipart/form-data">
	        	<input type="hidden" name="id" value="<?=$theme['id'] ?>">
	            	<div class="row">
	                    <div class="col-md-4 col-sm-6"></div>
	                	<div class="col-md-4 col-sm-6">
	                    	<div class="form-group">
	                        	<label for="username">Thémes : </label>
	                            <select id="theme" class="form-control" name="theme">
	                                <option value="event" <?php if($theme['theme'] == 'event'){?>selected<?php } ?>>Evenement</option>
	                                <option value="flora" <?php if($theme['theme'] == 'flora'){?>selected<?php } ?>>Fleurs et plantes</option>
	                                <option value="gastronomy" <?php if($theme['theme'] == 'gastronomy'){?>selected<?php } ?>>Gastronomie</option>
	                                <option value="monument" <?php if($theme['theme'] == 'monument'){?>selected<?php } ?>>Monument</option>
	                                <option value="movie" <?php if($theme['theme'] == 'movie'){?>selected<?php } ?>>Film</option>
	                                <option value="music" <?php if($theme['theme'] == 'music'){?>selected<?php } ?>>Musique</option>
	                            </select>
	                            <p class="help-block text-danger"></p>
	                       	</div>
	                        <div class="form-group">
	                            <label for="username">Destination : </label>
	                            <select id="title_destination" class="form-control" name="title_destination">
	                                <option value="Amérique du Nord" <?php if($theme['title_destination'] == 'Amérique du Nord'){?>selected<?php } ?>>Amérique du nord</option>
	                                <option value="Amérique du Sud" <?php if($theme['title_destination'] == 'Amérique du Sud'){?>selected<?php } ?>>Amérique du sud</option>
	                                <option value="Afrique" <?php if($theme['title_destination'] == 'Afrique'){?>selected<?php } ?>>Afrique</option>
	                                <option value="Asie" <?php if($theme['title_destination'] == 'Asie'){?>selected<?php } ?>>Asie</option>
	                                <option value="Europe" <?php if($theme['title_destination'] == 'Europe'){?>selected<?php } ?>>Europe</option>
	                                <option value="Océanie" <?php if($theme['title_destination'] == 'Océanie'){?>selected<?php } ?>>Océanie</option>
	                            </select>
	                            <p class="help-block text-danger"></p>
	                        </div>
	                        <div class="form-group">

	                            <label for="nation">Pays : </label>
	                            <input type="text" class="form-control" id="title_nation" name="title_nation" value="<?=$theme['title_nation'] ?>">
	                            <p class="help-block text-danger"></p>

	                        </div>
	                        <div class="form-group">

	                            <label for="name_event">Nom du théme : </label>
	                            <input type="text" class="form-control" id="name" name="name" value="<?=$theme['name'] ?>">
	                            <p class="help-block text-danger"></p>

	                        </div>

	                         <div class="form-group">
	                                <label for="avatar">Image : </label>
	                                <input type="hidden" class="form-control" name="MAX_FILE_SIZE" value="<?php echo $maxSize; ?>">
	                                <input type="file" class="form-control" id="avatar" name="avatar" >
	                                <p class="help-block text-danger"></p>
	                                <div class="col-md-12">
	                                    <button type="button" class="btn btn-xl" id="fakeBrowser">Choisir </button>
	                                    <input type="text" id="nomFichier" readonly="true" name="pictureDeux" value="<?=$theme['picture'] ?>">
	                                </div>
	                            </div>  
	                            
	                        <div class="form-group">

	                            <label for="name_event">Description : </label>
	                            <textarea  id="description" class="form-control" name="description" ><?=$theme['description'] ?></textarea>
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

<?php endif; ?>

<?php $this->stop('main_content') ?>