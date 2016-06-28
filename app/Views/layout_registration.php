<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $this->e($title) ?>  Very Good Trip </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- // Le CSS -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <link href="<?=$this->assetUrl('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=$this->assetUrl('css/agency.css');?>" rel="stylesheet">
    <!-- // CSS Perso -->
    <link rel="stylesheet" type="text/css" href="<?=$this->assetUrl('css/style_registration.css');?>">
    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="<?=$this->assetUrl('font-awesome/css/font-awesome.min.css');?>">
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body  id="page-top" class="index">

<nav class="navbar navbar-default navbar-fixed-top">
	<?=$this->insert('_partials/navbarBis');?>
</nav>

<header>

</header>

<section>
	<?= $this->section('main_content'); ?>
</section>

<footer>
	<?=$this->insert('_partials/footerBis');?>
</footer>

    <!-- jQuery -->
    <script src="<?=$this->assetUrl('js/jquery.js');?>"></script>
    <!-- javaScript -->
    <!-- <script src="<?=$this->assetUrl('js/contact.js');?>" type="text/javascript"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$this->assetUrl('js/bootstrap.min.js');?>"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?=$this->assetUrl('js/classie.js');?>"></script>
    <script src="<?=$this->assetUrl('js/cbpAnimatedHeader.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=$this->assetUrl('js/agency.js');?>"></script>

    <script>
    var fileInput = document.getElementById("avatar");
    var textInput = document.getElementById("nomFichier");
    var fauxBouton =  document.getElementById("fakeBrowser");
    /*var vraiBouton = document.getElementById("btnSubmit");
    var tmp = document.getElementById("tmp");*/
    
    fauxBouton.addEventListener("click", clicBrowser);
    fileInput.addEventListener("change", modifNomFichier);
    /*vraiBouton.addEventListener("click", clicBtn);
*/


    function clicBrowser(){

        fileInput.click();
    }

    function modifNomFichier(){

        /*document.getElementById('demo').innerHTML = '<img src="' + fileInput.value +'" />';*/
        //document.getElementById('demo').innerHTML = fileInput.value;
        textInput.value = fileInput.value;
    }

    /*function clicBtn(){

        vraiBouton.click();
        vraiBouton.click();


    }*/

     var previewImage = function(event) {
        var fakeImage = URL.createObjectURL(event.target.files[0]); 

        var fileName = document.getElementById('nomFichier');
        fileName.value = fakeImage;

        // Remplit la prévisualisation
        var output = document.getElementById('demo');
        output.innerHTML = '<img src="' + fakeImage +'" alt="">';
    };

</script>
</body>
</html>