<?php $this->layout('layout_registration', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>liste des pays</h1>
	

					<table  class="col-lg-12 text-center">
						<tr>
							
							<th class="adminKey text-center">PAYS</th>
							
						</tr>
					<?php 

					foreach ($listePays as $monpays) {
						# code...

							

								?>
								<tr>							
									<td class="adminKey"><a href="<?=$this->url('destination_viewPays' , ['pays' => $monpays['title_nation']]);?>"><?= $monpays['title_nation'] ?></a></td>
								</tr>

								<?php

					}


						?>
					</table>
		</div>
	</div>
</div>
<?php $this->stop('main_content') ?>
