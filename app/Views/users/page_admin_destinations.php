<?php $this->layout('layout_admin', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des destinations</h1>
	
				<br><br>

					<table  class="col-lg-12 text-center">
						<tr>
							<th class="adminKey text-center">DESTINATION</th>
							<th class="adminKey text-center">IMAGE 1</th>
							<th class="adminKey text-center">IMAGE 2</th>
							<th class="adminKey text-center">IMAGE 3</th>
							<th></th>
							<th></th>
						</tr>
					<?php 

					foreach ($listeDestinations as $dest) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $dest['title_destination'] ?></td>
									<td class="adminKey"><img width="50px" height="50px" src="<?= $this->assetUrl($dest['img_1']); ?>"></td>
									<td class="adminKey"><img width="50px" height="50px" src="<?= $this->assetUrl($dest['img_2']); ?>"></td>
									<td class="adminKey"><img width="50px" height="50px" src="<?= $this->assetUrl($dest['img_3']); ?>"></td>
									<td class="adminKey"><a href="">modifier</a></td>
									<td class="adminKey"><a href="<?=$this->url('destination_supprimerDestination',['destinationid' => $dest['id']]);?>">supprimer</a></td>
								</tr>

								<?php

					}


						?>
					</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
