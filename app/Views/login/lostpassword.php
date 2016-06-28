<?php $this->layout('layout_login', ['title' => 'motdepasseoublier']) ?>

<?php $this->start('main_content') ?>
	
<?php 

if(!empty($params['showFormPassword'])){$showFormPassword = $params['showFormPassword'];} ?>
<?php if(!empty($params['showFormEmail'])){$showFormEmail = $params['showFormEmail'];} ?>

<?php if(!empty($params['linkChangePassword'])){$linkChangePassword = $params['linkChangePassword'];
}

?>
          
           <main class="container">
        <h1 class="text-center">Mot de passe oublié</h1>
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


                <?php 

                
                /** envoi d'un mail **/







                //$mail = new PHPMailer;//à décommenter

                //$mail->SMTPDebug = 3;                               
                // Enable verbose debug output

                //$mail->isSMTP();// Set mailer to use SMTP//à décommenter
                /*$mail->Host = 'smtp1.example.com;smtp2.example.com';*/  // Specify main and backup SMTP servers
                //$mail->Host = '';//à décomenter
                //$mail->SMTPAuth = true;// Enable SMTP authentication//à décomenter
                /*$mail->Username = 'user@example.com'; */                // SMTP username
                //$mail->Username = '';//à décommenter 
                /*$mail->Password = 'secret'; */
                //$mail->Password = '';// SMTP password//à décomenter
                //$mail->SMTPSecure = '';// Enable TLS encryption, `ssl` also accepted//à décomenter
                //$mail->Port = 587;// TCP port to connect to//à décommenter

                //$mail->setFrom('nom.prenom@exemple.com', 'prénom');//à décommenter
                //$mail->addAddress($post['email_password']); //à décommenter    
                // Add a recipient
                /*$mail->addAddress('ellen@example.com');*/               // Name is optional deuxieme adresse 
                //$mail->addReplyTo('info@example.com', 'Information');//à décommenter
                /*$mail->addCC('cc@example.com');
                $mail->addBCC('bcc@example.com');*/

                /*$mail->addAttachment('/var/tmp/file.tar.gz');  */       // Add attachments
                /*$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name
                //$mail->isHTML(true);// Set email format to HTML//à décommenter

                //$mail->Subject = 'modification de password';//à décommenter
                /*$mail->Body    = '<p>Vous pouvez réinitialiser votre mot de passe en cliquant sur le lien suivant :
                <br>
                <a href="'.$linkChangePassword.'">Modifier mon mot de passe</a>
                </p>
                <br>
                <code>'.$linkChangePassword.'</code>';

                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';*///à décommenter

                /*$mail->Body = nl2br($post['content']);
                $mail->AltBody = $post['content'];*/


                /*if(!$mail->send()) {
                echo 'Le message n\'a pu être envoyé.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                echo 'Le message a été envoyé.';
                }*///à décommenter

?>
                
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

            <form class="form-horizontal well well-sm" method="post">
                <input type="hidden" name="action" value="generateToken">
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email_password">Votre adresse email</label>
                    <div class="col-md-4">
                        <input type="email" name="email_password" id="email_password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <button type="submit" class="btn btn-default">Réinitialiser mon mot de passe</button>
                    </div>
                </div>
            </form>
        <?php endif; // ferme le if/else de $linkChangePassword ?>
    <?php endif; ?>

    <?php if($showFormPassword == true): // Permet d'afficher le formulaire de changement de mot de passe ?>

        <form class="form-horizontal well well-sm" method="post">
            <input type="hidden" name="action" value="updatePassword">
            <input type="hidden" name="email" value="<?=$_GET['email'];?>">
            <input type="hidden" name="token" value="<?=$_GET['token'];?>">
            <div class="form-group">
                <label class="col-md-4 control-label" for="new_password">Votre nouveau mot de passe</label>
                <div class="col-md-4">
                    <input type="password" name="new_password" id="new_password" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="new_password_conf">Confirmation du mot de passe</label>
                <div class="col-md-4">
                    <input type="password" name="new_password_conf" id="new_password_conf" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default">Mettre à jour mon mot de passe</button>
                </div>
            </div>
        </form> 
    <?php endif; ?>



    </main>

    


<?php $this->stop('main_content') ?>
