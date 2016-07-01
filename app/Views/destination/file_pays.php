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
					<p class="floatLeft">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_event']); ?>">
					</p>
				<p ><?php echo $value['description'];?></p>
				
				<?php
			}

			?>

			</div>
	
		<h2>Plantes</h2>

			<div class="content">

			<?php 


			$tableauFlora = $listeThemesPays['flora'];


			foreach ($tableauFlora as $key => $value) {

				?>
				<p><?php echo $value['name_flora'];?></p>
					<p class="floatLeft">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_flora']); ?>">
					</p>
				<p><?php echo $value['description'];?></p>
				
				<?php
			}

			?>

			</div>

		<h2>Gastronomie</h2>

			<div class="content">

			<?php 


			$tableauGastronomy = $listeThemesPays['gastronomy'];


			foreach ($tableauGastronomy as $key => $value) {

				?>
				<p><?php echo $value['name_dish'];?></p>
					<p class="floatLeft">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_dish']); ?>">
					</p>
				<p><?php echo $value['description'];?></p>
				
				<?php
			}

			?>	

			</div>

		<h2>Monument</h2>

			<div class="content">

			<?php 


			$tableauMonument = $listeThemesPays['monument'];


			foreach ($tableauMonument as $key => $value) {

				?>
				<p><?php echo $value['name_monument'];?></p>
					<p class="floatLeft">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_monument']); ?>">
					</p>
				<p><?php echo $value['description'];?></p>
				
				<?php
			}

			?>	

			</div>

		<h2>Les films à voir :</h2>

			<div class="content">

			<?php 


			$tableauMovie = $listeThemesPays['movie'];


			foreach ($tableauMovie as $key => $value) {

				?>
				<p><?php echo $value['title_movie'];?></p>
					<p class="floatLeft">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['poster']); ?>">
					</p>
				<p><?php echo $value['description'];?></p>
				
				<?php
			}

			?>	

			</div>


		<h2>Music</h2>

			<div class="content">

			<?php 


			$tableauMusic = $listeThemesPays['music'];


			foreach ($tableauMusic as $key => $value) {

				?>
				<p><?php echo $value['name_music'];?></p>
					<p class="floatLeft">
						<img width="200" height="150" style="border-radius: 10%; border: 5px solid white; margin-right: 20px;" src="<?=$this->assetUrl($value['picture_music']); ?>">
					</p>
				<p><?php echo $value['description'];?></p>
				
				<?php
			}

			?>	
			</div>
	</div>
<?php $this->stop('main_content') ?>