<?php $this->layout('layoutQuiz', ['title' => 'Quiz']) ?>


<?php $this->start('main_content') ?>
             
    <!-- <section> -->
        <div class="container">

        <h1>Page de Quiz</h1>
<?php 

         if(!empty($_POST) && !empty($resultatQuiz)){ 
            
            foreach ($resultatQuiz as $key => $value) {
                 ?>
             <div class="col-lg-12">
                <a href="<?=$this->url('destination_viewdestination',['id' => $value['id']]);?>"><?= $value['title_destination'] ?></a>
            </div>
        <?php
            }
        }

        ?>

<?php $this->stop('main_content') ?>