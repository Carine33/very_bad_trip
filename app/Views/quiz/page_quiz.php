<?php $this->layout('layoutQuiz', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	
    
       



    <section>
        <div class="container">
        <?php if(!empty($_GET)){
            //var_dump($monTableau);
        }?>
        <?php if(!empty($_POST) && !empty($monTableau)){ 
        ?>
                <div class="row">
                        
                    <?php 
                    

                        foreach ($monTableau as $key => $value) {
                            # code...
                            //echo $key."/".$value."<br>";
                            if($value == max($monTableau) ){?>
                    <div class="col-lg-12">

                               <?= $key?>
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
                <div class="col-lg-2">
                    <a href="?gastronomie=AS"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="gastronomie" value="AS">
                </div>
                <div class="col-lg-2">
                    <a href="?gastronomie=Inde"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/inde.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="gastronomie" value="Inde">
                </div>
                <div class="col-lg-2">
                    <a href="?gastronomie=Afrique"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" /></a>
                   <input type="radio" name="gastronomie" value="Afrique">
                </div>
                <div class="col-lg-2">
                    <a href="?gastronomie=AN"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="gastronomie" value="AN">
                </div>
                <div class="col-lg-2">
                    <a href="?gastronomie=Oceanie"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="gastronomie" value="Oceanie">
                </div>
                <div class="col-lg-2">
                    <a href="?gastronomie=Europe"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="gastronomie" value="Europe">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <a href="?monument=AS"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="monument" value="AS">
                </div>
                <div class="col-lg-2">
                    <a href="?monument=Inde"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/inde.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="monument" value="Inde">
                </div>
                <div class="col-lg-2">
                    <a href="?monument=Afrique"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" /></a>
                   <input type="radio" name="monument" value="Afrique">
                </div>
                <div class="col-lg-2">
                    <a href="?monument=AN"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="monument" value="AN">
                </div>
                <div class="col-lg-2">
                    <a href="?monument=Oceanie"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="monument" value="Oceanie">
                </div>
                <div class="col-lg-2">
                    <a href="?monument=Europe"><img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" /></a>
                    <input type="radio" name="monument" value="Europe">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" />
                    <input type="radio" name="musique" value="AS">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/inde.jpg');?>" alt="Photo" />
                    <input type="radio" name="musique" value="Inde">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" />
                   <input type="radio" name="musique" value="Afrique">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" />
                    <input type="radio" name="musique" value="AN">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" />
                    <input type="radio" name="musique" value="Oceanie">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" />
                    <input type="radio" name="musique" value="Europe">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" />
                    <input type="radio" name="film" value="AS">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/inde.jpg');?>" alt="Photo" />
                    <input type="radio" name="film" value="Inde">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" />
                   <input type="radio" name="film" value="Afrique">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" />
                    <input type="radio" name="film" value="AN">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" />
                    <input type="radio" name="film" value="Oceanie">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" />
                    <input type="radio" name="film" value="Europe">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="Photo" />
                    <input type="radio" name="evenement" value="AS">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/inde.jpg');?>" alt="Photo" />
                    <input type="radio" name="evenement" value="Inde">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="Photo" />
                   <input type="radio" name="evenement" value="Afrique">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="Photo" />
                    <input type="radio" name="evenement" value="AN">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="Photo" />
                    <input type="radio" name="evenement" value="Oceanie">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="Photo" />
                    <input type="radio" name="evenement" value="Europe">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/plante/ameriquesud'.rand(1, 3).'.jpg');?>" alt="Photo" />
                    <input type="radio" name="plante" value="AS">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/plante/asie'.rand(1,3).'.jpg');?>" alt="Photo" />
                    <input type="radio" name="plante" value="Inde">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/plante/afrique'.rand(1,3).'.jpg');?>" alt="Photo" />
                   <input type="radio" name="plante" value="Afrique">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/plante/ameriquenord'.rand(1,3).'.jpg');?>" alt="Photo" />
                    <input type="radio" name="plante" value="AN">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/plante/oceanie'.rand(1,3).'.jpg');?>" alt="Photo" />
                    <input type="radio" name="plante" value="Oceanie">
                </div>
                <div class="col-lg-2">
                    <img class="myPicture" src="<?=$this->assetUrl('img/plante/europe'.rand(1,3).'.jpg');?>" alt="Photo" />
                    <input type="radio" name="plante" value="Europe">
                </div>
            </div>
            <input type="submit">
            </form>
        </div>
    </section>

   


<?php $this->stop('main_content') ?>
