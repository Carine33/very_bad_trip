<?php $this->layout('layoutQuiz', ['title' => 'Quiz']) ?>


<?php $this->start('main_content') ?>
	         
    <!-- <section> -->
        <div class="container">

        <h1>Page de Quiz</h1>








        

     
                    
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
                      <img class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_amerique_sud_'.rand(1, 3).'.jpg');?>" alt="Photo" />
                    </a>

                    <div class="portfolio-caption text-center text-radio">
                                                 
                    
                        <input type="radio" name="gastronomie" value="Amérique du Sud">
                                             
                                          
                       
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="gastronomie" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronome_afrique_.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_amerique_nord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="gastronomie" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_oceanie_'.rand(1, 3).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                      <img class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_amerique_sud_1.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="monument" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="monument" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_amerique_nord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="monument" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_oceanie_'.rand(1, 3).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                      <img class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_amerique_sud_'.rand(1, 1).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="musique" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="musique" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_amerique_nord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="musique" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_oceanie_'.rand(1, 3).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                      <img class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_amerique_sud_'.rand(1, 1).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="evenement" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="evenement" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_amerique_nord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="evenement" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_oceanie_'.rand(1, 3).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                      <img class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_amerique_sud_'.rand(1, 3).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="film" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="film" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_amerique_nord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="film" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_oceanie_'.rand(1, 3).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
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
                      <img class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_amerique_sud_'.rand(1, 3).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input type="radio" name="plante" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_asie_'.rand(1,3).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="plante" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                         <img class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_afrique_'.rand(1,3).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_amerique_nord_'.rand(1,3).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input type="radio" name="plante" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                         <img class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_oceanie_'.rand(1,3).'.jpg');?>" alt="Photo" />
                        
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
                        <img class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_europe_'.rand(1,3).'.jpg');?>" alt="Photo" />
                        
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
