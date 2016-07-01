<?php $this->layout('layout_destination', ['title' => 'Destination']) ?>

<?php $this->start('main_content') ?>

<!-- SECTION PRESENTATION CONTINENT -->

<!-- Tout le contenu de Thibaut à intégrer et à adapter par la suite -->



	<div class="container">

		<h1 class="text-center"><?=$listeThemesPays['pays'] ?></h1>	
		<br>
		<h2>Quelques événements à voir :</h2>

			<div class="content">

			<?php 


			$tableauEvent = $listeThemesPays['event'];


			foreach ($tableauEvent as $key => $value) {

				?>
				<h3><?php echo $value['name_event'];?></h3>
				<img width="560" height="345" src="<?=$this->assetUrl($value['picture_event']); ?>">
				<P><?php echo $value['description'];?></P>
				
				<?php
			}

			?>

			</div>
	
		<h2>Plantes</h2>

	

			<?php 


			$tableauFlora = $listeThemesPays['flora'];


			foreach ($tableauFlora as $key => $value) {

				?>
				<p><?php echo $value['name_flora'];?></p>
				<img width="560" height="345" src="<?=$this->assetUrl($value['picture_flora']); ?>">
				<P><?php echo $value['description'];?></P>
				
				<?php
			}

			?>


		<h2>Gastronomie</h2>

	

			<?php 


			$tableauGastronomy = $listeThemesPays['gastronomy'];


			foreach ($tableauGastronomy as $key => $value) {

				?>
				<p><?php echo $value['name_dish'];?></p>
				<img width="560" height="345" src="<?=$this->assetUrl($value['picture_dish']); ?>">
				<P><?php echo $value['description'];?></P>
				
				<?php
			}

			?>	
			<h2>Monument</h2>

	

			<?php 


			$tableauMonument = $listeThemesPays['monument'];


			foreach ($tableauMonument as $key => $value) {

				?>
				<p><?php echo $value['name_monument'];?></p>
				<img width="560" height="345" src="<?=$this->assetUrl($value['picture_monument']); ?>">
				<P><?php echo $value['description'];?></P>
				
				<?php
			}

			?>	

			<h2>Film</h2>

	

			<?php 


			$tableauMovie = $listeThemesPays['movie'];


			foreach ($tableauMovie as $key => $value) {

				?>
				<p><?php echo $value['title_movie'];?></p>
				<img width="560" height="345" src="<?=$this->assetUrl($value['poster']); ?>">
				<P><?php echo $value['description'];?></P>
				
				<?php
			}

			?>	

			<h2>Music</h2>

	

			<?php 


			$tableauMusic = $listeThemesPays['music'];


			foreach ($tableauMusic as $key => $value) {

				?>
				<p><?php echo $value['name_music'];?></p>
				<img width="560" height="345" src="<?=$this->assetUrl($value['picture_music']); ?>">
				<P><?php echo $value['description'];?></P>
				
				<?php
			}

			?>	
	</div>
<?php $this->stop('main_content') ?>