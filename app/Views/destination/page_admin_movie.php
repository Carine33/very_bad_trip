<?php $this->layout('layout_evenement', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des filmes</h1>
	

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

					foreach ($listeMovie as $movie) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $movie['title_destination'] ?></td>
									<td class="adminKey"><?= $movie['title_nation'] ?></td>
									<td class="adminKey"><?= $movie['title_movie'] ?></td>
									<td class="adminKey"><?= $movie['poster'] ?></td>
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
