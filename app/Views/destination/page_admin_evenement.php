<?php $this->layout('layout_evenement', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des événements</h1>
	

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

					foreach ($listeEvenement as $event) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $event['title_destination'] ?></td>
									<td class="adminKey"><?= $event['title_nation'] ?></td>
									<td class="adminKey"><?= $event['name_event'] ?></td>
									<td class="adminKey"><?= $event['picture_event'] ?></td>
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
