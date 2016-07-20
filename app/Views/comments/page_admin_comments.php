<?php $this->layout('layout_evenement', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des commentaires</h1>

			<br><br>

					<table  class="col-lg-12 text-center">
						<tr>
							<th class="adminKey text-center">PSEUDO</th>
							<th class="adminKey text-center">PAYS</th>
							<th class="adminKey text-center">COMMENTAIRE</th>
							<th class="adminKey text-center">DATE</th>
							<th></th>
							<th></th>
						</tr>

					<?php 

					foreach ($listeComments as $comment) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $comment['nickname'] ?></td>
									<td class="adminKey"><?= $comment['title_nation'] ?></td>
									<td class="adminKey"><?= $comment['content'] ?></td>
									<td class="adminKey"><?= $comment['date_add'] ?></td>
									<td class="adminKey"><a href="<?=$this->url('default_supprimerComment',['commentid' => $comment['id']]);?>">supprimer</a></td>
								</tr>

								<?php

					}


						?>
					</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
