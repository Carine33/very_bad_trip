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
                <a class="navbar-brand page-scroll" href="#page-top">Very Good Trip !</a>
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
                    <li>
                        <a class="page-scroll" href="<?=$this->url('users_selectUsers');?>">Liste des utilisateurs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#">Liste des destinations</a>
                    </li>
                     
                    <?php if(!empty($w_user['role']) && $w_user['role'] == 'admin'): ?>
                        <li>
                        <div><img id="myAvatar" src="<?=$this->assetUrl($w_user['avatar']);?>"></div>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$w_user['username'];?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=$this->url('signin_selectSignin',['userid' => $w_user['id']]);?>">Modifier information</a></li>
                                <li><a href="#">Changer de mot de passe</a></li>
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