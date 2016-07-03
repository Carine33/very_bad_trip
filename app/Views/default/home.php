<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	
<!-- <body id="page-top" class="index"> -->

    <!-- Section Inscription -->
    <section id="inscription">
        <div class="container">
            <div class="row">
                <div id="blockInscr" class="col-lg-12 text-center">
                    <h2 class="section-heading">Inscription</h2>
                    <h3 class="section-subheading text-muted">Rejoignez la communauté des passionnés de voyages !</h3>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-4 col-sm-6">
                </div>
                <div class="text-center col-md-4 col-sm-6">                    
                    <a class="lienInscription btn btn-default btn-lg btn-block btn-xl monBtn" href="<?=$this->url('signin_signin');?>">S'inscrire</a>           
                </div>
                <div class="text-center col-md-4 col-sm-6">
                </div>
            </div>
        </div>

<!--         <div class="scroll-top page-scroll">
            <a class="btn btn-primary" href="#page-top">Retour à l'accueil</a>
        </div> -->

        <!-- <a href="#top" class="js-scrollTo retour">Revenir en haut</a> -->
    </section>



    <!-- Section Destinations -->
    <section id="destinations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Aux "quatre coins" du monde...</h2>
                    <h3 class="section-subheading text-muted">Trouvez la destination qui vous ressemble ! </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
<!-- L' EUROPE  -->
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/paris.jpg');?>" alt="">
                            </div>
                            <div class="timeline-image second">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/rome.jpg');?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Europe</h4>
                                    <h4 class="subheading">Le vieux continent</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">L’Europe, s’étendant des côtes atlantiques françaises à l’ouest à la Russie à l’est, et de la Scandinavie au nord aux pays méditerranéens au sud, est un continent aux multiples visages.<br>
									Sites exceptionnels, architecture remarquable, sites archéologiques, paysages montagneux, sites naturels, nature et couleurs éclatantes, fjords, aurores boréales...<br>
									Découvrez les multiples visages du vieux continent à travers la diversité de ses cultures et de ses peuples : Ecosse, Irlande, Islande, Pays Baltes, Republique Tchèque, Roumanie, Russie, Suede, Norvège, Albanie, Arménie... </p>
                                </div>
                            </div>
                        </li>
<!-- L'ASIE -->
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/chine.jpg');?>" alt="">
                            </div>
                            <div class="timeline-image second">    
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/inde.jpg');?>" alt="">
                            </div>    
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Asie</h4>
                                    <h4 class="subheading">Détenteur de plusieurs records géographiques mondiaux</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Un voyage en Asie c'est autant de souvenirs que d'expériences différentes à raconter : l’émerveillement de la nature préservée, l’éblouissement des lieux culturels, la fascination pour l’histoire de ces pays, et les rencontres humaines inoubliables.<br>
									La Thaïlande vous séduira par sa personnalité enchanteresse : plages de sable fin, peuple souriant et optimiste, cuisine subtile et raffinée… Le Vietnam, le Laos et le Cambodge offrent des séjours sous le signe de la culture et de l’histoire, avec des trésors à découvrir au fil des chemins...<br>
									Visitez les temples enfouis d’Angkor, la baie d’Halong et appréciez les balades à dos d’éléphant. Le Myanmar, l’ancienne Birmanie jusqu’ici moins accessible, ouvre les portes de voyages et d’expériences encore plus étonnants. Puis la Chine ancestrale et le Japon aux rituels codifiés séduiront par leurs tailles inhabituelles et leurs immenses richesses. Enfin l’Indonésie, avec Bali la douce et les volcans de Java, et l’Inde majestueuse qui fascine autant qu’elle déroute…</p>
                                </div>
                            </div>
                        </li>
<!-- L'OCEANIE -->
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/sydney.jpg');?>" alt="">
                            </div>
                            <div class="timeline-image second">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/nouvelle_zélande.jpg');?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Océanie</h4>
                                    <h4 class="subheading">Au pays des kangourous !</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Envolez-vous vers le paradis sur terre... Vivez votre rêve et partez pour un voyage en Océanie. Vous l’avez pensé et imaginé depuis des mois, reste à le mettre en scène et à le concrétiser et pour cela nous allons vous aider.<br>
									De la culture millénaire du peuple aborigène à l'opéra de Sydney en passant par le désert ocre-rouge au bush et par les forêts tropicales... Un voyage en Australie vous fascinera. Profitez d'un voyage en Nouvelle-Zélande pour découvrir le "pays du long nuage blanc" et explorez ce véritable éden où la nature règne en&nbsp;maître. <br>
									Une destination qui est aussi le berceau de la culture maori et du célèbre Haka ! <br>
                                    </p>
                                </div>
                            </div>
                        </li>
<!-- L'AMERIQUE DU NORD -->
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/newYork.jpg');?>" alt="">
                            </div>
                            <div class="timeline-image second">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/arizona.jpg');?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Amérique du Nord</h4>
                                    <h4 class="subheading">L'Amérique, l'Amérique !</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Des destinations légendaires comme les Etats-Unis et le Canada : Écouter du jazz dans un bar de Manhattan ou le souffle du vent dans les plaines désertes du Grand Nord canadien, sentir le soleil sur sa peau au bord des plages paradisiaques de la Floride ou de la Californie...<br>
                                    Admirer les paysages majestueux au cours dans l'ouest américain avec le Grand Canyon ou les lumières scintillantes de Las Vegas, savourer un succulent burger ou des tapas inoubliables au Nouveau-Mexique, s’enivrer des parfums des champs de blé au Texas ou des arômes d’un pancake au sirop d’érable à Québec… Entre grandes capitales et ranch isolé, version cowboys ou building, côté Pacifique ou le long des grands lacs...  
                                    </p>
                                </div>
                            </div>
                        </li>
<!-- L'AMERIQUE DU SUD -->
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/bresil.jpg');?>" alt="">
                            </div>
                            <div class="timeline-image second">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/Machu_Picchu_Peru.jpg');?>" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Amérique du Sud</h4>
                                    <h4 class="subheading">Le Nouveau Monde !</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Entre villes coloniales, faune et flore variée et forêt amazonienne, un voyage en Amérique du Sud vous invite à découvrir la diversité de ses paysages majestueux et la richesse de ses sites culturels au travers les mythiques et grandes civilisations.<br>
									Partez renouer avec la culture Maya au Mexique, défiez votre sens du rythme avec le tango argentin, grimpez sur les crêtes du Pérou, découvrez la cordillère des Andes et ses sommets vertigineux, laissez vos rêves se réaliser sur les plages mythique de Copacabana, ou retrouvez vos instincts premiers au coeur de la forêt amazonienne...</p>
                                </div>
                            </div>
                        </li>
<!-- L'AFRIQUE -->
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/maroc.jpg');?>" alt="">
                            </div>
                            <div class="timeline-image second">
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/egypte.jpg');?>" alt="">
                            </div>      
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Afrique</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Quelle que soit l'approche, votre voyage en Afrique vous emmènera à la découverte d'un territoire envoûtant. Les chutes Victoria ou la réserve du Masaï Mara, la brousse animale ou les profondeurs de la mangrove, les splendeurs de l’Okavango, tout est possible. Découvrez les couleurs chaudes, les paysages majestueux, les animaux sauvages par milliers, les populations chaleureuses à la grande joie de vivre, et surtout laissez-vous enivrer des parfums de cet immense et fabuleux continent qui vous promet un voyage aussi riche que varié.<br>
									Vos vacances en Afrique vous emmèneront au coeur du berceau de l’humanité, et vous n'en serez qu'enchanté. </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4 style="margin-top: 20px;">Quelle
                                    <br>destination 
                                    <br>est faite
                                    <br>pour vous ?</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section La Team -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Notre Amazing Team</h2>
                    <h3 class="section-subheading text-muted">4 personnalités bien distinctes, regorgeant d'idées et animées de mêmes passions !</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="team-member">
                        <!-- <a href="img/team/photoWF3Cadre.jpg"> --><img src="<?=$this->assetUrl('img/team/photoWF3Cadre.jpg');?>" class="img-responsive" alt="Photo_de_Carine" title="Photo de Carine, cliquez pour agrandir la photo">
                        <h4>Carine THEOBALD</h4>
                        <p class="text-muted">Moulti-tâches, passionnée par le cinéma, les voyages, la musique et tout ce qui l'entoure !</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <!-- <a href="img/team/Damien_polaroid.jpg"> --><img src="<?=$this->assetUrl('img/team/Damien_polaroid.jpg');?>" class="img-responsive" alt="Photo_de_Damien" title="Photo de Damien, cliquez pour agrandir la photo">
                        <h4>Damien Vermilas</h4>
                        <p class="text-muted">Serial Gamer ! La programmation c'est mon truc ! "if", "switch", "foreach"  etc.... what else ?</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <!-- <a href="img/team/Hugues_polaroid.jpg"> --><img src="<?=$this->assetUrl('img/team/Hugues_polaroid.jpg');?>" class="img-responsive" alt="Photo_de_Hugues" title="Photo de Hugues, cliquez pour agrandir la photo">
                        <h4>Hugues Fonteyraud</h4>
                        <p class="text-muted">Surnommé Hugues0111 ou encore Hugo. Fondu de musique et en particulier la guitare...</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="team-member">
                        <!-- <a href="img/team/Thibaut_polaroid.jpg"> --><img src="<?=$this->assetUrl('img/team/Thibaut_polaroid.jpg');?>" class="img-responsive" alt="Photo_de_Thibaut" title="Photo de Thibaut, cliquez pour agrandir la photo">
                        <h4>Thibaut Taquet</h4>
                        <p class="text-muted">Passionné de décoration florale et de design, la programmation c'est le futur, donc maintenant sur le web !</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>                
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Carine, Damien, Hugues et Thibaut issus de divers horizons vous partagent leur univers ! </p>
                </div>
            </div>
        </div>
    </section>

  
    <!-- Section Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactez-nous</h2>
                    <h3 class="section-subheading text-muted contact">Un petit coucou ! Un petit message à nos développeurs ! N'hésitez pas à nous adresser un commentaire !</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <?php if(!empty($errors)): // On affiche les erreurs si le tableau n'est pas vide ?>
                        <div class="alert alert-danger">
                            <?=implode('<br>', $errors); ?>
                        </div>
                    <?php endif; ?>

                    <?php if(isset($success) && $success === true): ?>
                        <div class="alert alert-success">
                            <p>Votre message a bien été pris en compte. Merci !</p>
                        </div>
                    <?php endif; ?> 

                    <form method="post" action="#contact" id="formContact" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Votre nom : </label>
                                    <input type="text" class="form-control" placeholder="Votre nom *" id="lastname" name="lastname" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="firstname">Votre prénom : </label>
                                    <input type="text" class="form-control" placeholder="Votre prénom *" id="firstname" name="firstname" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Votre adresse mail : </label>
                                    <input type="email" class="form-control" placeholder="Votre adresse email *" id="email" name="email" required>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="message">Votre message : </label>
                                    <textarea class="form-control" placeholder="Votre Message *" id="message" name="message" required></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" id="submit" class="btn btn-xl">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php $this->stop('main_content') ?>
