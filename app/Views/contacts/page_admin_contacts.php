<?php $this->layout('layout_evenement', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>liste des contacts</h1>

			<br><br>

					<table  class="col-lg-12 text-center">
						<tr>
							<th class="adminKey text-center">NOM</th>
							<th class="adminKey text-center">PRENOM</th>
							<th class="adminKey text-center">EMAIL</th>
							<th class="adminKey text-center">MESSAGE</th>
							<th></th>
							<th></th>
						</tr>

					<?php 

					foreach ($listeContacts as $contact) {
						# code...

							

								?>
								<tr>
									<td class="adminKey"><?= $contact['firstname'] ?></td>
									<td class="adminKey"><?= $contact['lastname'] ?></td>
									<td class="adminKey"><?= $contact['email'] ?></td>
									<td class="adminKey"><?= $contact['message'] ?></td>
									<td class="adminKey"><a href="<?=$this->url('default_supprimerContact',['contactid' => $contact['id']]);?>">supprimer</a></td>
								</tr>

								<?php

					}


						?>
					</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
