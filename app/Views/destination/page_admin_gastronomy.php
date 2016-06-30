<?php $this->layout('layout_evenement', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des plantes</h1>
	

					<table  class="col-lg-12 text-center">
						<tr>
							<td class="adminKey">destination</td>
							<td class="adminKey">pays</td>
							<td class="adminKey">denomination</td>
							<td class="adminKey">image 3</td>
							<td></td>
							<td></td>
						</tr>
					<?php 

					foreach ($listeGastronomy as $gastro) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $gastro['title_destination'] ?></td>
									<td class="adminKey"><?= $gastro['title_nation'] ?></td>
									<td class="adminKey"><?= $gastro['name_dish'] ?></td>
									<td class="adminKey"><?= $gastro['picture_dish'] ?></td>
									<td class="adminKey"><a href="">modifier</a></td>
									<td class="adminKey"><a href="<?=$this->url('destinationAdmin_supprimerGastronomy',['gastronomyid' => $gastro['id']]);?>">supprimer</a></td>
								</tr>

								<?php

					}


						?>
					</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
