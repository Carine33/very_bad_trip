<?php $this->layout('layoutQuiz', ['title' => 'Quiz']) ?>


<?php $this->start('main_content') ?>
	         
    <!-- <section> -->
        <div class="container">

        <h1>Page de Quiz</h1>

        <?php if(!empty($_POST) && !empty($monTableau)){ 
        ?>
                <div class="row">
                        
                    <?php 
                    

                        foreach ($monTableau as $key => $value) {
                            # code...
                            //echo $key."/".$value."<br>";
                            if($value == max($monTableau) ){?>
                    <div class="col-lg-12">

                               <a href="fiche_pays?destination=<?= $key?>"><?= $key ?></a>
                    </div>
                    <?php
                            }
                        }
                            
                      }  

                    ?>
                    
                </div>
        </div>
    <div class="container">
        <form method="POST">
            <div class="row">
                        <h4>Gastronomie</h4>
                        <p class="text-muted">Choisissez le plat qui vous plait</p>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                      <img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" />
                    </a>

                    <div class="portfolio-caption text-center text-radio">
                                                 
                    
                        <input type="radio" name="gastronomie" value="AS">
                                             
                                          
                       
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/gastronomie/gastronomie_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="gastronomie" value="Inde">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="gastronomie" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="gastronomie" value="AN">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="gastronomie" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="gastronomie" value="Europe">
                    </div>
                </div>
                
            </div>
            <div class="row">
                        <h4>Monument</h4>
                        <p class="text-muted">Quel monument vous attire</p>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                      <img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="monument" value="AS">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/monument/monument_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="monument" value="Inde">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="monument" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="monument" value="AN">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="monument" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="monument" value="Europe">
                    </div>
                </div>
                
            </div>
            <div class="row">
                        <h4>Musique</h4>
                        <p class="text-muted">Quel instrument vous parle</p>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                      <img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="musique" value="AS">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/musique/musique_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="musique" value="Inde">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="musique" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="musique" value="AN">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="musique" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="musique" value="Europe">
                    </div>
                </div>
                
            </div>
            <div class="row">
                        <h4>Evenement</h4>
                        <p class="text-muted">A quel événement souhaiterez vous participer</p>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                      <img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="evenement" value="AS">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/evenement/evenement_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="evenement" value="Inde">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="evenement" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="evenement" value="AN">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="evenement" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="evenement" value="Europe">
                    </div>
                </div>
                
            </div>
            <div class="row">
                        <h4>Film</h4>
                        <p class="text-muted">Quel film vous a marqué</p>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                      <img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="film" value="AS">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/film/film_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="film" value="Inde">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="film" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="film" value="AN">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="film" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="film" value="Europe">
                    </div>
                </div>
                
            </div>
             <div class="row">
                        <h4>Plante</h4>
                        <p class="text-muted">Quelle plante voudriez vous cueillir</p>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                      <img class="myPicture" src="<?=$this->assetUrl('img/plante/ameriquesud'.rand(1, 3).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="plante" value="AS">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/plante/asie'.rand(1,3).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="plante" value="Inde">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                         <img class="myPicture" src="<?=$this->assetUrl('img/plante/afrique'.rand(1,3).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="plante" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/plante/ameriquenord'.rand(1,3).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="plante" value="AN">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                         <img class="myPicture" src="<?=$this->assetUrl('img/plante/oceanie'.rand(1,3).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="plante" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/plante/europe'.rand(1,3).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="plante" value="Europe">
                    </div>
                </div>
                
            </div>
            
            <br>
            
            <button class="btn btn-primary" type="submit">Envoyer</button>
            </form>
        </div>
    <!-- </section> -->

   


<?php $this->stop('main_content') ?>
