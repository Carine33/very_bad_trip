<?php $this->layout('layoutAdmin', ['title' => 'motdepasseoublier']) ?>

<?php $this->start('main_content') ?>
	
    <?php echo "bonjour!"; ?> 
    <?php echo $_GET['email'] ?>
    <?php echo $_GET['token'] ?>


<?php $this->stop('main_content') ?>
