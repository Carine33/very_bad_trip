<?php $this->layout('layout_evenement', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des événements</h1>

			<br><br>

					<table  class="col-lg-12 text-center">
						<tr>
							<th class="adminKey text-center">DESTINATION</th>
							<th class="adminKey text-center">PAYS</th>
							<th class="adminKey text-center">DENOMINATION</th>
							<th class="adminKey text-center">IMAGE</th>
							<th></th>
							<th></th>
						</tr>

					<?php 

					foreach ($listeEvenement as $event) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $event['title_destination'] ?></td>
									<td class="adminKey"><?= $event['title_nation'] ?></td>
									<td class="adminKey"><?= $event['name_event'] ?></td>
									<td class="adminKey"><img width="50px" height="50px" src="<?= $this->assetUrl($event['picture_event']); ?>"></td>
									<td class="adminKey"><a href="">modifier</a></td>
									<td class="adminKey"><a href="<?=$this->url('destinationAdmin_supprimerEvenement',['eventid' => $event['id']]);?>">supprimer</a></td>
								</tr>

								<?php

					}


						?>
					</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
