<?php $this->layout('layoutAdmin', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
	<h1>page d'administration gestion des destinations</h1>
	

<table>
	<tr>
<td class="adminKey">destination</td><td class="adminKey">image 1</td><td class="adminKey">image 2</td><td class="adminKey">image 3</td><td></td><td></td>
</tr>
<?php 

foreach ($listeDestinations as $dest) {
	# code...

		

			?>
			<tr><td class="adminKey"><?= $dest['title_nation'] ?></td><td class="adminKey"><?= $dest['img_1'] ?></td><td class="adminKey"><?= $dest['img_2'] ?></td><td class="adminKey"><?= $dest['img_3'] ?></td>
			<td class="adminKey"><a href="">modifier</a></td><td class="adminKey"><a href="<?=$this->url('destination_supprimerDestination',['destinationid' => $dest['id']]);?>">supprimer</a></td></tr>

			<?php

}


	?>
	</table>
<?php $this->stop('main_content') ?>
