<?php $this->layout('layout_destination', ['title' => 'Destination']) ?>

<?php $this->start('main_content') ?>

<!-- SECTION PRESENTATION CONTINENT -->


<?php if(!empty($destination)): ?>

	<div class="container">
		
	
	<h1><?php echo $destination['title_nation']; ?></h1>



	</div>

<?php endif; ?>

<!-- SECTION FICHE PAYS -->

<?php $this->stop('main_content') ?>