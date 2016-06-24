<?php $this->layout('layoutAdmin', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
	<h1>page d'administration</h1>
	

<table>
	<tr>
<td class="adminKey">avatar</td><td class="adminKey">nom</td><td class="adminKey">mot de passe</td><td class="adminEmail">email</td><td class="adminRole">role</td><td class="adminKey">pays</td><td class="adminKey">ville</td><td></td><td></td>
</tr>
<?php 
foreach ($listeUsers as $user) {
	# code...

		

			?>
			<tr></td><td class="adminKey"><?= $user['avatar'] ?></td><td class="adminKey"><?= $user['username'] ?></td><td class="adminKey"><?= $user['password'] ?></td><td class="adminEmail"><?= $user['email'] ?></td><td class="adminRole"><?= $user['role'] ?></td><td class="adminKey"><?= $user['country'] ?></td><td class="adminKey"><?= $user['city'] ?></td>
			<td class="adminKey"><a href="">modifier</a></td><td class="adminKey"><a href="page-supprimer-user/<?= $user['id']?>">supprimer</a></td></tr>

			<?php

}


	?>
	</table>
<?php $this->stop('main_content') ?>
