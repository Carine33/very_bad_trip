<?php $this->layout('layoutQuiz', ['title' => 'Quiz']) ?>


<?php $this->start('main_content') ?>
	         
    <!-- <section> -->
        <div class="container">

        <h1>Page de Quiz</h1>








        

     
                    
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
                      <img id="idPicture1" class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_ameriquesud_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                    </a>

                    <div class="portfolio-caption text-center text-radio">
                                                 
                    
                        <input id="radioPicture1"  class="radioQuiz" type="radio" name="gastronomie" value="Amérique du Sud">
                                             
                                          
                       
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img id="idPicture2" class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture2" class="radioQuiz" type="radio" name="gastronomie" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture3" class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture3" class="radioQuiz" type="radio" name="gastronomie" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture4" class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_ameriquenord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture4" class="radioQuiz" type="radio" name="gastronomie" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture5" class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_oceanie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture5" class="radioQuiz" type="radio" name="gastronomie" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture6" class="myPicture" src="<?=$this->assetUrl('img/quiz/gastronomie/gastronomie_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture6" class="radioQuiz" type="radio" name="gastronomie" value="Europe">
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
                      <img id="idPicture7" class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_ameriquesud_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input id="radioPicture7" class="radioQuiz" type="radio" name="monument" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img id="idPicture8" class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture8" class="radioQuiz" type="radio" name="monument" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture9" class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture9" class="radioQuiz" type="radio" name="monument" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture10" class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_ameriquenord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture10" class="radioQuiz" type="radio" name="monument" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture11" class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_oceanie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture11" class="radioQuiz" type="radio" name="monument" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture12" class="myPicture" src="<?=$this->assetUrl('img/quiz/monument/monument_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture12" class="radioQuiz" type="radio" name="monument" value="Europe">
                    </div>
                </div>
                
            </div>
            <div class="row">
                        <h4>Musique</h4>
                        <p class="text-muted">Quel instrument ou artiste vous parle</p>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                      <img id="idPicture13" class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_ameriquesud_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input id="radioPicture13" class="radioQuiz" type="radio" name="musique" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img id="idPicture14" class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture14" class="radioQuiz" type="radio" name="musique" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture15" class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture15" class="radioQuiz" type="radio" name="musique" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture16" class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_ameriquenord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input  id="radioPicture16" class="radioQuiz" type="radio" name="musique" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture17" class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_oceanie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture17" class="radioQuiz" type="radio" name="musique" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture18" class="myPicture" src="<?=$this->assetUrl('img/quiz/musique/musique_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture18" class="radioQuiz" type="radio" name="musique" value="Europe">
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
                      <img id="idPicture19" class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_ameriquesud_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input id="radioPicture19" class="radioQuiz" type="radio" name="evenement" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img id="idPicture20" class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture20" class="radioQuiz" type="radio" name="evenement" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture21" class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture21" class="radioQuiz" type="radio" name="evenement" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture22" class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_ameriquenord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture22" class="radioQuiz" type="radio" name="evenement" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture23" class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_oceanie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture23" class="radioQuiz" type="radio" name="evenement" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture24" class="myPicture" src="<?=$this->assetUrl('img/quiz/evenement/evenement_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture24" class="radioQuiz" type="radio" name="evenement" value="Europe">
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
                      <img id="idPicture25" class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_ameriquesud_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input id="radioPicture25" class="radioQuiz" type="radio" name="film" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img id="idPicture26" class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture26" class="radioQuiz" type="radio" name="film" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture27" class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture27" class="radioQuiz" type="radio" name="film" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture28" class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_ameriquenord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture28" class="radioQuiz" type="radio" name="film" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture29" class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_oceanie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture29" class="radioQuiz" type="radio" name="film" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture30" class="myPicture" src="<?=$this->assetUrl('img/quiz/film/film_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture30" class="radioQuiz" type="radio" name="film" value="Europe">
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
                      <img id="idPicture31" class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_ameriquesud_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                        <input id="radioPicture31" class="radioQuiz" type="radio" name="plante" value="Amérique du Sud">
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        
                        <img id="idPicture32" class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_asie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                       
                        
                    </a>
                     <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture32" class="radioQuiz" type="radio" name="plante" value="Asie">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                         <img id="idPicture33" class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_afrique_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture33" class="radioQuiz" type="radio" name="plante" value="Afrique">
                    </div>
                    
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture34" class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_ameriquenord_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture34" class="radioQuiz" type="radio" name="plante" value="Amérique du Nord">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                         <img id="idPicture35" class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_oceanie_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture35" class="radioQuiz" type="radio" name="plante" value="Oceanie">
                    </div>
                </div>
                 <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-2x"></i>
                            </div>
                        </div>
                        <img id="idPicture36" class="myPicture" src="<?=$this->assetUrl('img/quiz/plante/flore_europe_'.rand(1, 9).'.jpg');?>" alt="Photo" />
                        
                    </a>
                    <div class="portfolio-caption text-center text-radio">
                         <input id="radioPicture36" class="radioQuiz" type="radio" name="plante" value="Europe">
                    </div>
                </div>
                
            </div>
            
            <br>
            
            <button class="btn btn-primary" type="submit">Envoyer</button>
            </form>
        </div>
    <!-- </section> -->

   


<?php $this->stop('main_content') ?>
