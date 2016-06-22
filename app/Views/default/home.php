<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	
<!-- <body id="page-top" class="index"> -->

    <!-- Services Section -->
    <section id="inscription">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Inscription/Se connecter</h2>
                    <h3 class="section-subheading text-muted">Rejoignez la communauté des passionnés de voyages !</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section 
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?=$this->assetUrl('img/portfolio/roundicons.png');?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Round Icons</h4>
                        <p class="text-muted">Graphic Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?=$this->assetUrl('img/portfolio/startup-framework.png');?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?=$this->assetUrl('img/portfolio/treehouse.png');?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?=$this->assetUrl('img/portfolio/golden.png');?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?=$this->assetUrl('img/portfolio/escape.png');?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?=$this->assetUrl('img/portfolio/dreams.png');?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- About Section -->
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
									De la culture millénaire du peuple aborigène à l'opéra de Sydney en passant par le désert ocre-rouge au bush et par les forêts tropicales... Un voyage en Australie vous fascinera. Profitez d'un voyage en Nouvelle-Zélande pour découvrir le "pays du long nuage blanc" et explorez ce véritable éden où la nature règne en maître. <br>
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
                                    <h4 class="subheading">Le Nouveau Monde !</h4>
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
                                    <h4 class="subheading">Phase Two Expansion</h4>
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
                                <img class="img-circle img-responsive" src="<?=$this->assetUrl('img/destinations/togo.jpg');?>" alt="">
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

    <!-- La Team Section -->
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
                        <p class="text-muted">...</p>
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
                        <p class="text-muted">Fondu de musique et en particulier la guitare...</p>
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
                        <p class="text-muted">...</p>
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
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <!-- <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?=$this->assetUrl('img/logos/envato.jpg');?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?=$this->assetUrl('img/logos/designmodo.jpg');?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?=$this->assetUrl('img/logos/themeforest.jpg');?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?=$this->assetUrl('img/logos/creative-market.jpg');?>" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside> -->
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php $this->stop('main_content') ?>
