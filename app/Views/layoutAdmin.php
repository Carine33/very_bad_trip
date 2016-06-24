<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $this->e($title) ?>  Very Good Trip Page de Quiz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   

    <!-- // Le CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="<?=$this->assetUrl('css/agency.css');?>" rel="stylesheet">
    <!-- // CSS Perso -->
    <link rel="stylesheet" type="text/css" href="<?=$this->assetUrl('css/style.css');?>">
    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?=$this->assetUrl('css/styleQuiz.css');?>">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .adminIdTitle{
        width: 20px;
        text-align: center;
        
    }
    .adminRoleTitle{
        width: 50px;
        text-align: center;
       

    }
    .adminEmailTitle{
        width: 250px;
        text-align: center;
        
    }
    .adminKeyTitle{
        width: 100px;
        text-align: center;
        
    }
   
    .adminId{
        width: 20px;
        text-align: center;
        
    }
    .adminRole{
        width: 50px;
        text-align: center;
       

    }
    .adminEmail{
        width: 250px;
        text-align: center;
        }
    .adminKey{
        width: 100px;
        text-align: center;
        
    }
 
    </style>
</head>
<body  id="page-top" class="index">
<section>
	<?= $this->section('main_content') ?>
</section>



    <!-- jQuery -->
    <script src="<?=$this->assetUrl('js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$this->assetUrl('js/bootstrap.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?=$this->assetUrl('js/classie.js');?>"></script>
    <script src="<?=$this->assetUrl('js/cbpAnimatedHeader.js');?>"></script>

   

    
</body>
</html>