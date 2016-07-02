<?php $this->layout('layout_admin', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>gestion des utilisateurs</h1>			

				<table class="col-lg-12 text-center">
					<tr>
						<th class="adminKey text-center">AVATAR</th>
						<th class="adminKey text-center">NOM</th>
						<th class="adminEmail text-center">EMAIL</th>
						<th class="adminRole text-center">ROLE</th>
						<th class="adminKey text-center">PAYS</th>
						<th class="adminKey text-center">VILLE</th>
						<th></th>
						<th></th>
					</tr>
				<?php 
				foreach ($listeUsers as $user) {
					# code...

						

							?>
							<tr>
								<td class="adminKey"><img width="50px" height="50px" src="<?= $this->assetUrl($user['avatar']); ?>"></td>
								<td class="adminKey"><?= $user['username'] ?></td>
								<td class="adminEmail"><?= $user['email'] ?></td>
								<td class="adminRole"><?= $user['role'] ?></td>
								<td class="adminKey"><?= $user['country'] ?></td>
								<td class="adminKey"><?= $user['city'] ?></td>
								<td class="adminKey"><a href="<?=$this->url('signin_selectSignin',['userid' => $user['id']]);?>">modifier</a></td>
								<td class="adminKey"><a href="<?=$this->url('user_supprimerUser',['userid' => $user['id']]);?>">supprimer</a></td>
							</tr>

							<?php

				}


					?>
				</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
