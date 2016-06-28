<?php $this->layout('layout', ['title' => 'motdepasseoublier']) ?>

<?php $this->start('main_content') ?>
	

          
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
       

    


<?php $this->stop('main_content') ?>
