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
					<h3><?php echo $value['name_event'];?></h3>

					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_event']); ?>">
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
					<h3><?php echo $value['name_dish'];?></h3>
					
					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_dish']); ?>">
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
					<h3><?php echo $value['name_monument'];?></h3>

					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_monument']); ?>">
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
					<h3><?php echo $value['title_movie'];?></h3>
					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['poster']); ?>">
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
					<h3><?php echo $value['name_music'];?></h3>
					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_music']); ?>">
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
					<h3><?php echo $value['name_flora'];?></h3>

					<div class="col-md-3 text-center">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_flora']); ?>">
					</div>

					<div class="col-md-9">
						<p><?php echo $value['description'];?></p>
					</div>
				</div>
				<?php
			}

			?>

			</div>
	</div>
<?php $this->stop('main_content') ?>