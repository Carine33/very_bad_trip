<?php $this->layout('layout_registration', ['title' => 'Page d\'administration']) ?>

<?php $this->start('main_content') ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1>liste des pays</h1>
	
					
				<p style="font-size:18px;"><strong>Sélectionnez un pays</strong></p>
						
				<ul class="list-inline">
				<?php foreach ($listePays as $monpays) { ?>
							
					<li class="pays-item">
						<a href="<?=$this->url('destination_viewPays' , ['pays' => $monpays['title_nation']]);?>"><?= $monpays['title_nation'] ?></a>
					</li>
				<?php } ?>
				</ul>
		</div>
	</div>
</div>

<style>
<!--
.pays-item {
	padding: 30px 40px !important;
	font-size: 18px;
	margin: 10px;
	background: #fed136;
	border-radius: 15px;
}
.pays-item a, .pays-item a:hover, .pays-item a:focus {
	color: #333;
}

-->
</style>
<?php $this->stop('main_content') ?>
