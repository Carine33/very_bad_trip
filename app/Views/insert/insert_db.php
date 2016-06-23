<?php $this->layout('layout', ['title' => 'Insertion']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($eventSuccess) && $eventSuccess == true): ?>
	<div class="alert alert-success">Ca Marche event</div>
<?php endif; ?>

<?php if(isset($floraSuccess) && $floraSuccess == true): ?>
	<div class="alert alert-success">Ca Marche flora</div>
<?php endif; ?>

<?php if(isset($gastroSuccess) && $gastroSuccess == true): ?>
	<div class="alert alert-success">Ca Marche gastro</div>
<?php endif; ?>

<?php if(isset($monumentSuccess) && $monumentSuccess == true): ?>
	<div class="alert alert-success">Ca Marche monument</div>
<?php endif; ?>

<?php if(isset($movieSuccess) && $movieSuccess == true): ?>
	<div class="alert alert-success">Ca Marche movie</div>
<?php endif; ?>

<?php if(isset($musicSuccess) && $musicSuccess == true): ?>
	<div class="alert alert-success">Ca Marche music</div>
<?php endif; ?>
<?php $this->stop('main_content') ?>