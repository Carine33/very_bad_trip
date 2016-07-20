<!--     <nav class="navbar navbar-default navbar-fixed-top"> -->
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display = Menu "hamburger" -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!--  <?php if(!empty($w_user['role']) && $w_user['role'] == 'admin'): ?>
                    <a class="navbar-brand page-scroll" href="#page-top">Very Good Trip ! <small style="font-family:Montserrat,Arial,sans-serif; letter-spacing: 1px; text-transform: uppercase; font-size: 16px; color: grey;">Admin</small></a>
                <?php else: ;?> -->
                    <a class="navbar-brand page-scroll" href="#page-top">Very Good Trip !</a>
               <!--  <?php endif; ?>  -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?= $this->url('default_home');?>">Accueil</a>
                    </li>

                   <?php if(empty($w_user['role']) || ($w_user['role'] != 'user' && $w_user['role'] != 'admin')): ?>
                    <li>
                        <a class="page-scroll" href="<?=$this->url('signin_signin');?>">Inscription</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?= $this->url('login_login');?>">Se connecter</a>
                    </li>
                     <?php endif; ?>

                   






                   



                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Liste pays<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                          <?php use \Model\DestinationModel;


                          $objetListePays = new DestinationModel();
                          $listePays = $objetListePays->getListeTitleNation();

                        foreach ($listePays as $key => $monpays) {

                           
                             ?>
                                <li><a href="<?=$this->url('destination_viewPays' , ['pays' => $monpays['title_nation']]);?>"><?php echo $monpays['title_nation'];?></a></li>
                                <?php 
                        }
                        ?>
                            </ul>
                    </li>
                     
                    <?php if(!empty($w_user['role']) && $w_user['role'] == 'user'): ?>
                        <li>
                        <div><img id="myAvatar" src="<?=$this->assetUrl($w_user['avatar']);?>"></div>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$w_user['username'];?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=$this->url('signin_selectSignin',['userid' => $w_user['id']]);?>">Modifier information</a></li>
                                <li><a href="<?= $this->url('login_mylostpassword');?>">Changer de mot de passe</a></li>
                                <li><a href="<?= $this->url('login_logout');?>">Se déconnecter</a></li>
                            </ul>
                        </li>
                
                    <?php endif; ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
<!--     </nav> -->