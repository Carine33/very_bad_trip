<?php $this->layout('layout_evenement', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des themes</h1>

			<br><br>

					<table  class="col-lg-12 text-center">
						<tr>
							<th class="adminKey text-center">DESTINATION</th>
							<th class="adminKey text-center">PAYS</th>
							<th class="adminKey text-center">NOM</th>
							<th class="adminKey text-center">THEME</th>
							<th></th>
							<th></th>
						</tr>

					<?php 

					foreach ($listeThemes as $theme) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $theme['title_destination'] ?></td>
									<td class="adminKey"><?= $theme['title_nation'] ?></td>
									<td class="adminKey"><?= $theme['name'] ?></td>
									<td class="adminKey"><?= $theme['theme'] ?></td>
									<td class="adminKey"><a href="<?=$this->url('destination_updateTheme',['themeid' => $theme['id']]);?>">modifier</a></td>
									<td class="adminKey"><a href="<?=$this->url('destination_supprimerTheme',['themeid' => $theme['id']]);?>">supprimer</a></td>
								</tr>

								<?php

					}


						?>
					</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
