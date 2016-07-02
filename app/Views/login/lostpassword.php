<?php $this->layout('layout_login', ['title' => 'motdepasseoublier']) ?>

<?php $this->start('main_content') ?>
	
<?php 
/*
if(!empty($params['showFormPassword'])){$showFormPassword = $params['showFormPassword'];} ?>
<?php if(!empty($params['showFormEmail'])){$showFormEmail = $params['showFormEmail'];} ?>

<?php if(!empty($params['linkChangePassword'])){$linkChangePassword = $params['linkChangePassword'];
}*/

?>
          
<main class="container">
        <h1 class="text-center">Mot de passe à modifier ou oublié</h1>
        <br>

        <?php if(!empty($error)): // On affiche les erreurs si $error n'est pas vide ?>
            <div class="alert alert-danger">
                <?=implode('<br>', $error); ?>
            </div>
        <?php endif; ?>

        <?php if(isset($successUpdate) && $successUpdate == true): ?>
            <div class="alert alert-success">
                Cool ! Le mot de passe est à jour.
            </div>
        <?php endif; ?>
            

        <?php if(isset($showFormEmail) && $showFormEmail == true): // On affiche le premier formulaire ?>

            <?php if(isset($linkChangePassword)): // Si l'adresse email est ok et que le token est inséré ?>


              
                
                <p>Vous pouvez réinitialiser votre mot de passe en cliquant sur le lien suivant :
                <br>
                <a href="<?=$linkChangePassword; ?>">Modifier mon mot de passe</a>
                </p>
                <br>
                <!-- 
                    On affiche le lien en dur juste pour la forme 
                    Rappel : le token ou le lien de changement de mot de passe ne doit jamais apparaitre en clair sur la page. Celui-ci sera obligatoirement envoyé par email
                -->
                <code><?=$linkChangePassword; ?></code>




            <?php else: // Sinon on affiche le formulaire ?>

            <form  method="post">
                <input type="hidden" name="action" value="generateToken">
                <div class="row">
                    <div class="col-md-4 col-sm-6"></div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label  for="email_password">Votre adresse email</label>
                            <input type="email" name="email_password" id="email_password" class="form-control">
                        </div>
                        <div class="form-group">
                            
                                <button type="submit" class="btn btn-xl">Réinitialiser mon mot de passe</button>
                            
                        </div>
                    </div>
                </div>
            </form>
        <?php endif; // ferme le if/else de $linkChangePassword ?>
    <?php endif; ?>

    <?php if($showFormPassword == true): // Permet d'afficher le formulaire de changement de mot de passe ?>

        <form  method="post">
            <input type="hidden" name="action" value="updatePassword">
            <input type="hidden" name="email" value="<?=$_GET['email'];?>">
            <input type="hidden" name="token" value="<?=$_GET['token'];?>">
            <div class="row">
                    <div class="col-md-4 col-sm-6"></div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="new_password">Votre nouveau mot de passe</label>
                            <input type="password" name="new_password" id="new_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="new_password_conf">Confirmation du mot de passe</label>
                            <input type="password" name="new_password_conf" id="new_password_conf" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-xl">Mettre à jour mon mot de passe</button>
                        </div>
                    </div>
            </div>
        </form> 
    <?php endif; ?>



    </main>

    


<?php $this->stop('main_content') ?>
