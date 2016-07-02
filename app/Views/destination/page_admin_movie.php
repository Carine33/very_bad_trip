<?php $this->layout('layout_evenement', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des films</h1>
	
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

					foreach ($listeMovie as $movie) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $movie['title_destination'] ?></td>
									<td class="adminKey"><?= $movie['title_nation'] ?></td>
									<td class="adminKey"><?= $movie['title_movie'] ?></td>
									<td class="adminKey"><img width="50px" height="50px" src="<?= $this->assetUrl($movie['poster']); ?>"></td>
									<td class="adminKey"><a href="">modifier</a></td>
									<td class="adminKey"><a href="<?=$this->url('destinationAdmin_supprimerMovie',['movieid' => $movie['id']]);?>">supprimer</a></td>
								</tr>

								<?php

					}


						?>
					</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
