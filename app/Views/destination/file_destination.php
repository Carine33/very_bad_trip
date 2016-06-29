<?php $this->layout('layout_destination', ['title' => 'Destination']) ?>

<?php $this->start('main_content') ?>

<!-- SECTION PRESENTATION CONTINENT -->

<!-- Tout le contenu de Thibaut à intégrer et à adapter par la suite -->



	<div class="container">

		<h1><?php echo $destination['title_nation']; ?></h1>

          	<div class="col-md-12"><!-- dbt div row 1-->

            	<p>Le tourisme en Afrique représente une importante activité économique.
             	La particularité touristique de l'Afrique réside dans la grande variété des points d’intérêts, la diversité et la multitude de paysages ainsi que le riche patrimoine culturel.</p>
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
			          	<img src="<?=$this->assetUrl('img/Asie/chine/evenement/nouvel-an-chinois-2014.jpg'); ?>" class="img-responsive" width="560" height="345" style="margin:0px auto;" alt="plage" />
			          	</div> 
			          		<div class="carousel-caption">Envie d'aller se baigner?</div>
			        </div>   
				   	<!-- Page 2 -->
				    <div class="item"> 
				        <div class="carousel-page">
				        <img src="<?=$this->assetUrl('img/Asie/chine/evenement/fete-la-fete-des-lanternes-3.jpg.jpg'); ?>" class="img-responsive img-rounded" width="560" height="345" style="margin:0px auto;" alt="soleil">  <!-- rajouter les alt -->
				        </div> 
				        	<div class="carousel-caption">Envie de soleil?</div>
				    </div>  
				      <!-- Page 3 -->
				    <div class="item">  
				    	<div class="carousel-page">
				        <img src="<?=$this->assetUrl('img/Asie/chine/evenement/dragonboats_pic2a.jpg'); ?>" class="img-responsive img-rounded" width="560" height="345" style="margin:0px auto;max-height:100%;" alt="elephant" />
				        </div>  
				      		<div class="carousel-caption">Envie de nature</div>
				    </div>     
				</div>
			      
			    <!-- Contrôles -->
			    <a class="left carousel-control" href="#my_carousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span></a>
			    <a class="right carousel-control" href="#my_carousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>


<!-- SECTION FICHE PAYS -->





	</div>
<?php $this->stop('main_content') ?>