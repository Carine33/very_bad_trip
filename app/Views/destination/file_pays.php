<?php $this->layout('layout_destination', ['title' => 'Destination']) ?>

<?php $this->start('css') ?>

<style>
@media (min-width:1850px){
	#mainSection {
	    background: url('<?=$this->assetUrl('img/tour_du_monde.png'); ?>');
	    background-position: 99% 65%;
	    background-repeat: no-repeat;
	    background-attachment: fixed;
	}
}
</style>

<?php $this->stop('css') ?>


<?php $this->start('main_content') ?>

<!-- SECTION PRESENTATION CONTINENT -->

<!-- Tout le contenu de Thibaut à intégrer et à adapter par la suite -->



	<div class="container">
	
		<h1 class="text-center"><?=$listeThemesPays['pays'] ?></h1>	
		<br>
		<h2>Quelques événements à voir :</h2>

			<div class="content row">

			<?php 


			$tableauEvent = $listeThemesPays['event'];


			foreach ($tableauEvent as $key => $value) {

				?>
				<div class="col-md-12">
					<h3><?php echo $value['name'];?></h3>

					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture']); ?>">
					</div>

					<div class="col-md-9">
						<p><?php echo $value['description'];?></p>
					</div>
				</div>
				<?php
			}

			?>

			</div>
	

		<h2>Pour les gourmands : </h2>

			<div class="content row">

			<?php 


			$tableauGastronomy = $listeThemesPays['gastronomy'];


			foreach ($tableauGastronomy as $key => $value) {

				?>
				<div class="col-md-12">
					<h3><?php echo $value['name'];?></h3>
					
					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture']); ?>">
					</div>

					<div class="col-md-9">
						<p><?php echo $value['description'];?></p>
					</div>
				</div>
				<?php
			}

			?>	

			</div>

		<h2>Monuments à voir absolument</h2>

			<div class="content row">

			<?php 


			$tableauMonument = $listeThemesPays['monument'];


			foreach ($tableauMonument as $key => $value) {

				?>
				<div class="col-md-12">
					<h3><?php echo $value['name'];?></h3>

					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture']); ?>">
					</div>

					<div class="col-md-9">
						<p><?php echo $value['description'];?></p>
					</div>
				</div>
				<?php
			}

			?>	

			</div>

		<h2>Les films à connaître</h2>

			<div class="content row">

			<?php 


			$tableauMovie = $listeThemesPays['movie'];


			foreach ($tableauMovie as $key => $value) {

				?>
				<div class="col-md-12">
					<h3><?php echo $value['name'];?></h3>
					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture']); ?>">
					</div>

					<div class="col-md-9">
						<p><?php echo $value['description'];?></p>
					</div>
				</div>
				<?php
			}

			?>	

			</div>


		<h2>Envie de musique ?</h2>

			<div class="content row">

			<?php 


			$tableauMusic = $listeThemesPays['music'];


			foreach ($tableauMusic as $key => $value) {

				?>
				<div class="col-md-12">
					<h3><?php echo $value['name'];?></h3>
					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture']); ?>">
					</div>

					<div class="col-md-9">
						<p><?php echo $value['description'];?></p>
					</div>
				</div>
				<?php
			}

			?>	
			</div>

		<h2>Et si on parlait flore !</h2>

			<div class="content row">

			<?php 


			$tableauFlora = $listeThemesPays['flora'];


			foreach ($tableauFlora as $key => $value) {

				?>
				<div class="col-md-12">
					<h3><?php echo $value['name'];?></h3>

					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture']); ?>">
					</div>

					<div class="col-md-9">
						<p><?php echo $value['description'];?></p>
					</div>
				</div>
				<?php
			}

			?>

			</div>

			<div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Laissez un comentaire</h2>
                    <h3 class="section-subheading text-muted contact">N'hésitez pas à laisser un commentaire !</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <?php if(!empty($errors)): // On affiche les erreurs si le tableau n'est pas vide ?>
                        <div class="alert alert-danger">
                            <?=implode('<br>', $errors); ?>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($success) && $success === true): ?>
                        <div class="alert alert-success">
                            <p>Votre commentaire a bien été pris en compte. Merci !</p>
                        </div>
                    <?php endif; ?> 

                    <form method="post"  action="<?=$this->url('destination_viewPays',['pays'=> $listeThemesPays['pays']]);?>" id="formContact" novalidate>
                    <input type="hidden" name="id_user" value="<?=$w_user['id'] ?>">
                    <input type="hidden" name="title_nation" value="<?=$listeThemesPays['pays'] ?>">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="lastname"><?=$w_user['username'] ?></label>
                                    <input type="hidden" id="nickname" name="nickname" value="<?=$w_user['username']?>">
                                    <p class="help-block text-danger"></p>
                                </div>
                             </div> 
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="message">Votre message : </label>
                                    <textarea class="form-control" placeholder="Votre Message *" id="content" name="content" row="20" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id="submit" class="btn btn-xl">Envoyer</button>
                                <button type="reset" id="reset" class="btn btn-xl">Annuler</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Comentaires</h2>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <?php 



                foreach ($listeComments as $key => $comment) {
                	# code...
                ?>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="lastname"><?=$comment['nickname'] ?></label>
                                  
                                </div>
                             </div> 
                            <div class="col-md-8">
                                <p><?=$comment['content']?></p>
                            </div>
                            <div class="col-md-2">
                                <p><?=$comment['date_add']?></p>
                            </div>
                        </div>
                  <?php
                  }
                  ?>
                   <?php if(isset($success) && $success === true): ?>
                       <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="lastname"><?=$_POST['nickname'] ?></label>
                                  
                                </div>
                             </div> 
                            <div class="col-md-8">
                                <p><?=$_POST['content']?></p>
                            </div>
                            <div class="col-md-2">
                                <p><?=date("Y-m-d")?></p>
                            </div>
                        </div>
                    <?php endif; ?> 
                  
                </div>
            </div>
	</div>
<?php $this->stop('main_content') ?>