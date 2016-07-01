<?php $this->layout('layout_destination', ['title' => 'Destination']) ?>

<?php $this->start('main_content') ?>

<!-- SECTION PRESENTATION CONTINENT -->

<!-- Tout le contenu de Thibaut à intégrer et à adapter par la suite -->



	<div class="container">

		<h1><?php echo $destination['title_destination']; ?></h1>

          	<div class="col-md-12"><!-- dbt div row 1-->

            	<p></p>
          	</div><!-- fin div row 1-->
        

        

<!-- Slide à insérer -->
			<div id="my_carousel" class="carousel slide" data-ride="carousel">
		      	<!-- Bulles -->
		    	<ol class="carousel-indicators">
		        	<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
		        	<li data-target="#my_carousel" data-slide-to="1"></li>
		        	<li data-target="#my_carousel" data-slide-to="2"></li>
		      	</ol>
		      <!-- Slides -->
		      	<div class="carousel-inner">
			        <!-- Page 1 -->
			        <div class="item active">  
			        	<div class="carousel-page">
			          	<img src="<?=$this->assetUrl($destination['img_1']); ?>" class="img-responsive" width="560" height="345" style="margin:0px auto;" alt="photo" />
			          	</div> 
			          		<!-- <div class="carousel-caption">Envie d'aller se baigner?</div> -->
			        </div>   
				   	<!-- Page 2 -->
				    <div class="item"> 
				        <div class="carousel-page">
				        <img src="<?=$this->assetUrl($destination['img_2']); ?>" class="img-responsive img-rounded" width="560" height="345" style="margin:0px auto;" alt="photo">  <!-- rajouter les alt -->
				        </div> 
				        	<!-- <div class="carousel-caption">Envie de soleil?</div> -->
				    </div>  
				      <!-- Page 3 -->
				    <div class="item">  
				    	<div class="carousel-page">
				        <img src="<?=$this->assetUrl($destination['img_3']); ?>" class="img-responsive img-rounded" width="560" height="345" style="margin:0px auto;max-height:100%;" alt="photo" />
				        </div>  
				      		<!-- <div class="carousel-caption">Envie de nature</div> -->
				    </div>     
				</div>
			      
			    <!-- Contrôles -->
			    <a class="left carousel-control" href="#my_carousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span></a>
			    <a class="right carousel-control" href="#my_carousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>


<!-- SECTION FICHE PAYS -->

		<?php foreach ($listePays as $key => $value) {

				
			?>

				<h2><?= $value['title_nation']?></h2>
				<p><?= $value['description']?></p>
				<a href="<?=$this->url('destination_viewpays',['pays' => $value['title_nation']]);?>">Liens vers la fiche pays&nbsp;<?= $value['title_nation'] ?></a>

			<?php
		}
		?>
				
				





	</div>
<?php $this->stop('main_content') ?>