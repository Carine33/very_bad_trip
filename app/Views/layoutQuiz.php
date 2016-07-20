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

    <style type="text/css">
                .radioQuiz {

                    display: none;
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

   
<script>

        
            var picture1 = document.getElementById("idPicture1");
            var radio1 = document.getElementById("radioPicture1");
       
        
            picture1.addEventListener("click", clicBrowser1);
       


            function clicBrowser1(){

            radio1.click();
            picture1.style.backgroundColor = "#fff";
            picture1.style.opacity = "0.5";
            picture2.style.opacity = "1";
            picture3.style.opacity = "1";
            picture4.style.opacity = "1";
            picture5.style.opacity = "1";
            picture6.style.opacity = "1";
            


            }

            var picture2 = document.getElementById("idPicture2");
            var radio2 = document.getElementById("radioPicture2");
       
        
            picture2.addEventListener("click", clicBrowser2);
       


            function clicBrowser2(){

            radio2.click();
            picture2.style.backgroundColor = "#fff";
            picture1.style.opacity = "1";
            picture2.style.opacity = "0.5";
            picture3.style.opacity = "1";
            picture4.style.opacity = "1";
            picture5.style.opacity = "1";
            picture6.style.opacity = "1";
            }

            var picture3 = document.getElementById("idPicture3");
            var radio3 = document.getElementById("radioPicture3");
       
        
            picture3.addEventListener("click", clicBrowser3);
       


            function clicBrowser3(){

            radio3.click();
            picture3.style.backgroundColor = "#fff";
            picture1.style.opacity = "1";
            picture2.style.opacity = "1";
            picture3.style.opacity = "0.5";
            picture4.style.opacity = "1";
            picture5.style.opacity = "1";
            picture6.style.opacity = "1";
            }

            var picture4 = document.getElementById("idPicture4");
            var radio4 = document.getElementById("radioPicture4");
       
        
            picture4.addEventListener("click", clicBrowser4);
       


            function clicBrowser4(){

            radio4.click();
             picture4.style.backgroundColor = "#fff";
            picture1.style.opacity = "1";
            picture2.style.opacity = "1";
            picture3.style.opacity = "1";
            picture4.style.opacity = "0.5";
            picture5.style.opacity = "1";
            picture6.style.opacity = "1";
            }

            var picture5 = document.getElementById("idPicture5");
            var radio5 = document.getElementById("radioPicture5");
       
        
            picture5.addEventListener("click", clicBrowser5);
       


            function clicBrowser5(){

            radio5.click();
             picture5.style.backgroundColor = "#fff";
            picture1.style.opacity = "1";
            picture2.style.opacity = "1";
            picture3.style.opacity = "1";
            picture4.style.opacity = "1";
            picture5.style.opacity = "0.5";
            picture6.style.opacity = "1";
            }

            var picture6 = document.getElementById("idPicture6");
            var radio6 = document.getElementById("radioPicture6");
       
        
            picture6.addEventListener("click", clicBrowser6);
       


            function clicBrowser6(){

            radio6.click();
             picture6.style.backgroundColor = "#fff";
            picture1.style.opacity = "1";
            picture2.style.opacity = "1";
            picture3.style.opacity = "1";
            picture4.style.opacity = "1";
            picture5.style.opacity = "1";
            picture6.style.opacity = "0.5";
            }

            var picture7 = document.getElementById("idPicture7");
            var radio7 = document.getElementById("radioPicture7");
       
        
            picture7.addEventListener("click", clicBrowser7);
       


            function clicBrowser7(){

            radio7.click();
            picture7.style.backgroundColor = "#fff";
            picture7.style.opacity = "0.5";
            picture8.style.opacity = "1";
            picture9.style.opacity = "1";
            picture10.style.opacity = "1";
            picture11.style.opacity = "1";
            picture12.style.opacity = "1";
            }

            var picture8 = document.getElementById("idPicture8");
            var radio8 = document.getElementById("radioPicture8");
       
        
            picture8.addEventListener("click", clicBrowser8);
       


            function clicBrowser8(){

            radio8.click();
            picture8.style.backgroundColor = "#fff";
            picture7.style.opacity = "1";
            picture8.style.opacity = "0.5";
            picture9.style.opacity = "1";
            picture10.style.opacity = "1";
            picture11.style.opacity = "1";
            picture12.style.opacity = "1";
            }

            var picture9 = document.getElementById("idPicture9");
            var radio9 = document.getElementById("radioPicture9");
       
        
            picture9.addEventListener("click", clicBrowser9);
       


            function clicBrowser9(){

            radio9.click();
            picture9.style.backgroundColor = "#fff";
            picture7.style.opacity = "1";
            picture8.style.opacity = "1";
            picture9.style.opacity = "0.5";
            picture10.style.opacity = "1";
            picture11.style.opacity = "1";
            picture12.style.opacity = "1";
            }

            var picture10 = document.getElementById("idPicture10");
            var radio10 = document.getElementById("radioPicture10");
       
        
            picture10.addEventListener("click", clicBrowser10);
       


            function clicBrowser10(){

            radio10.click();
            picture10.style.backgroundColor = "#fff";
            picture7.style.opacity = "1";
            picture8.style.opacity = "1";
            picture9.style.opacity = "1";
            picture10.style.opacity = "0.5";
            picture11.style.opacity = "1";
            picture12.style.opacity = "1";
            }

            var picture11 = document.getElementById("idPicture11");
            var radio11 = document.getElementById("radioPicture11");
       
        
            picture11.addEventListener("click", clicBrowser11);
       


            function clicBrowser11(){

            radio11.click();
            picture11.style.backgroundColor = "#fff";
            picture7.style.opacity = "1";
            picture8.style.opacity = "1";
            picture9.style.opacity = "1";
            picture10.style.opacity = "1";
            picture11.style.opacity = "0.5";
            picture12.style.opacity = "1";
            }

            var picture12 = document.getElementById("idPicture12");
            var radio12 = document.getElementById("radioPicture12");
       
        
            picture12.addEventListener("click", clicBrowser12);
       


            function clicBrowser12(){

            radio12.click();
            picture12.style.backgroundColor = "#fff";
            picture7.style.opacity = "1";
            picture8.style.opacity = "1";
            picture9.style.opacity = "1";
            picture10.style.opacity = "1";
            picture11.style.opacity = "1";
            picture12.style.opacity = "0.5";
            }

            var picture13 = document.getElementById("idPicture13");
            var radio13 = document.getElementById("radioPicture13");
       
        
            picture13.addEventListener("click", clicBrowser13);
       


            function clicBrowser13(){

            radio13.click();
            picture13.style.backgroundColor = "#fff";
            picture13.style.opacity = "0.5";
            picture14.style.opacity = "1";
            picture15.style.opacity = "1";
            picture16.style.opacity = "1";
            picture17.style.opacity = "1";
            picture18.style.opacity = "1";
            }

            var picture14 = document.getElementById("idPicture14");
            var radio14 = document.getElementById("radioPicture14");
       
        
            picture14.addEventListener("click", clicBrowser14);
       


            function clicBrowser14(){

            radio14.click();
            picture14.style.backgroundColor = "#fff";
            picture13.style.opacity = "1";
            picture14.style.opacity = "0.5";
            picture15.style.opacity = "1";
            picture16.style.opacity = "1";
            picture17.style.opacity = "1";
            picture18.style.opacity = "1";
            }

            var picture15 = document.getElementById("idPicture15");
            var radio15 = document.getElementById("radioPicture15");
       
        
            picture15.addEventListener("click", clicBrowser15);
       


            function clicBrowser15(){

            radio15.click();
            picture15.style.backgroundColor = "#fff";
            picture13.style.opacity = "1";
            picture14.style.opacity = "1";
            picture15.style.opacity = "0.5";
            picture16.style.opacity = "1";
            picture17.style.opacity = "1";
            picture18.style.opacity = "1";
            }

            var picture16 = document.getElementById("idPicture16");
            var radio16 = document.getElementById("radioPicture16");
       
        
            picture16.addEventListener("click", clicBrowser16);
       


            function clicBrowser16(){

            radio16.click();
            picture16.style.backgroundColor = "#fff";
            picture13.style.opacity = "1";
            picture14.style.opacity = "1";
            picture15.style.opacity = "1";
            picture16.style.opacity = "0.5";
            picture17.style.opacity = "1";
            picture18.style.opacity = "1";
            }

            var picture17 = document.getElementById("idPicture17");
            var radio17 = document.getElementById("radioPicture17");
       
        
            picture17.addEventListener("click", clicBrowser17);
       


            function clicBrowser17(){

            radio17.click();
            picture17.style.backgroundColor = "#fff";
            picture13.style.opacity = "1";
            picture14.style.opacity = "1";
            picture15.style.opacity = "1";
            picture16.style.opacity = "1";
            picture17.style.opacity = "0.5";
            picture18.style.opacity = "1";
            }

            var picture18 = document.getElementById("idPicture18");
            var radio18 = document.getElementById("radioPicture18");
       
        
            picture18.addEventListener("click", clicBrowser18);
       


            function clicBrowser18(){

            radio18.click();
            picture18.style.backgroundColor = "#fff";
            picture13.style.opacity = "1";
            picture14.style.opacity = "1";
            picture15.style.opacity = "1";
            picture16.style.opacity = "1";
            picture17.style.opacity = "1";
            picture18.style.opacity = "0.5";
            }

            var picture19 = document.getElementById("idPicture19");
            var radio19 = document.getElementById("radioPicture19");
       
        
            picture19.addEventListener("click", clicBrowser19);
       


            function clicBrowser19(){

            radio19.click();
            picture19.style.backgroundColor = "#fff";
            picture19.style.opacity = "0.5";
            picture20.style.opacity = "1";
            picture21.style.opacity = "1";
            picture22.style.opacity = "1";
            picture23.style.opacity = "1";
            picture24.style.opacity = "1";
            }

            var picture20 = document.getElementById("idPicture20");
            var radio20 = document.getElementById("radioPicture20");
       
        
            picture20.addEventListener("click", clicBrowser20);
       


            function clicBrowser20(){

            radio20.click();
            picture20.style.backgroundColor = "#fff";
            picture19.style.opacity = "1";
            picture20.style.opacity = "0.5";
            picture21.style.opacity = "1";
            picture22.style.opacity = "1";
            picture23.style.opacity = "1";
            picture24.style.opacity = "1";
            }

            var picture21 = document.getElementById("idPicture21");
            var radio21 = document.getElementById("radioPicture21");
       
        
            picture21.addEventListener("click", clicBrowser21);
       


            function clicBrowser21(){

            radio21.click();
            picture21.style.backgroundColor = "#fff";
            picture19.style.opacity = "1";
            picture20.style.opacity = "1";
            picture21.style.opacity = "0.5";
            picture22.style.opacity = "1";
            picture23.style.opacity = "1";
            picture24.style.opacity = "1";
            }

            var picture22 = document.getElementById("idPicture22");
            var radio22 = document.getElementById("radioPicture22");
       
        
            picture22.addEventListener("click", clicBrowser22);
       


            function clicBrowser22(){

            radio22.click();
            picture22.style.backgroundColor = "#fff";
            picture19.style.opacity = "1";
            picture20.style.opacity = "1";
            picture21.style.opacity = "1";
            picture22.style.opacity = "0.5";
            picture23.style.opacity = "1";
            picture24.style.opacity = "1";
            }

            var picture23 = document.getElementById("idPicture23");
            var radio23 = document.getElementById("radioPicture23");
       
        
            picture23.addEventListener("click", clicBrowser23);
       


            function clicBrowser23(){

            radio23.click();
            picture23.style.backgroundColor = "#fff";
            picture19.style.opacity = "1";
            picture20.style.opacity = "1";
            picture21.style.opacity = "1";
            picture22.style.opacity = "1";
            picture23.style.opacity = "0.5";
            picture24.style.opacity = "1";
            }

            var picture24 = document.getElementById("idPicture24");
            var radio24 = document.getElementById("radioPicture24");
       
        
            picture24.addEventListener("click", clicBrowser24);
       


            function clicBrowser24(){

            radio24.click();
            picture24.style.backgroundColor = "#fff";
            picture19.style.opacity = "1";
            picture20.style.opacity = "1";
            picture21.style.opacity = "1";
            picture22.style.opacity = "1";
            picture23.style.opacity = "1";
            picture24.style.opacity = "0.5";
            }

            var picture25 = document.getElementById("idPicture25");
            var radio25 = document.getElementById("radioPicture25");
       
        
            picture25.addEventListener("click", clicBrowser25);
       


            function clicBrowser25(){

            radio25.click();
            picture25.style.backgroundColor = "#fff";
            picture25.style.opacity = "0.5";
            picture26.style.opacity = "1";
            picture27.style.opacity = "1";
            picture28.style.opacity = "1";
            picture29.style.opacity = "1";
            picture30.style.opacity = "1";
            }

            var picture26 = document.getElementById("idPicture26");
            var radio26 = document.getElementById("radioPicture26");
       
        
            picture26.addEventListener("click", clicBrowser26);
       


            function clicBrowser26(){

            radio26.click();
            picture26.style.backgroundColor = "#fff";
            picture25.style.opacity = "1";
            picture26.style.opacity = "0.5";
            picture27.style.opacity = "1";
            picture28.style.opacity = "1";
            picture29.style.opacity = "1";
            picture30.style.opacity = "1";
            }

            var picture27 = document.getElementById("idPicture27");
            var radio27 = document.getElementById("radioPicture27");
       
        
            picture27.addEventListener("click", clicBrowser27);
       


            function clicBrowser27(){

            radio27.click();
            picture27.style.backgroundColor = "#fff";
            picture25.style.opacity = "1";
            picture26.style.opacity = "1";
            picture27.style.opacity = "0.5";
            picture28.style.opacity = "1";
            picture29.style.opacity = "1";
            picture30.style.opacity = "1";
            }

            var picture28 = document.getElementById("idPicture28");
            var radio28 = document.getElementById("radioPicture28");
       
        
            picture28.addEventListener("click", clicBrowser28);
       


            function clicBrowser28(){

            radio28.click();
            picture28.style.backgroundColor = "#fff";
            picture25.style.opacity = "1";
            picture26.style.opacity = "1";
            picture27.style.opacity = "1";
            picture28.style.opacity = "0.5";
            picture29.style.opacity = "1";
            picture30.style.opacity = "1";
            }

            var picture29 = document.getElementById("idPicture29");
            var radio29 = document.getElementById("radioPicture29");
       
        
            picture29.addEventListener("click", clicBrowser29);
       


            function clicBrowser29(){

            radio29.click();
            picture29.style.backgroundColor = "#fff";
            picture25.style.opacity = "1";
            picture26.style.opacity = "1";
            picture27.style.opacity = "1";
            picture28.style.opacity = "1";
            picture29.style.opacity = "0.5";
            picture30.style.opacity = "1";
            }

            var picture30 = document.getElementById("idPicture30");
            var radio30 = document.getElementById("radioPicture30");
       
        
            picture30.addEventListener("click", clicBrowser30);
       


            function clicBrowser30(){

            radio30.click();
            picture30.style.backgroundColor = "#fff";
            picture25.style.opacity = "1";
            picture26.style.opacity = "1";
            picture27.style.opacity = "1";
            picture28.style.opacity = "1";
            picture29.style.opacity = "1";
            picture30.style.opacity = "0.5";
            }

            var picture31 = document.getElementById("idPicture31");
            var radio31 = document.getElementById("radioPicture31");
       
        
            picture31.addEventListener("click", clicBrowser31);
       


            function clicBrowser31(){

            radio31.click();
            picture31.style.backgroundColor = "#fff";
            picture31.style.opacity = "0.5";
            picture32.style.opacity = "1";
            picture33.style.opacity = "1";
            picture34.style.opacity = "1";
            picture35.style.opacity = "1";
            picture36.style.opacity = "1";
            }

            var picture32 = document.getElementById("idPicture32");
            var radio32 = document.getElementById("radioPicture32");
       
        
            picture32.addEventListener("click", clicBrowser32);
       


            function clicBrowser32(){

            radio32.click();
            picture32.style.backgroundColor = "#fff";
            picture31.style.opacity = "1";
            picture32.style.opacity = "0.5";
            picture33.style.opacity = "1";
            picture34.style.opacity = "1";
            picture35.style.opacity = "1";
            picture36.style.opacity = "1";
            }

            var picture33 = document.getElementById("idPicture33");
            var radio33 = document.getElementById("radioPicture33");
       
        
            picture33.addEventListener("click", clicBrowser33);
       


            function clicBrowser33(){

            radio33.click();
            picture33.style.backgroundColor = "#fff";
            picture31.style.opacity = "1";
            picture32.style.opacity = "1";
            picture33.style.opacity = "0.5";
            picture34.style.opacity = "1";
            picture35.style.opacity = "1";
            picture36.style.opacity = "1";
            }

            var picture34 = document.getElementById("idPicture34");
            var radio34 = document.getElementById("radioPicture34");
       
        
            picture34.addEventListener("click", clicBrowser34);
       


            function clicBrowser34(){

            radio34.click();
            picture34.style.backgroundColor = "#fff";
            picture31.style.opacity = "1";
            picture32.style.opacity = "1";
            picture33.style.opacity = "1";
            picture34.style.opacity = "0.5";
            picture35.style.opacity = "1";
            picture36.style.opacity = "1";
            }

            var picture35 = document.getElementById("idPicture35");
            var radio35 = document.getElementById("radioPicture35");
       
        
            picture35.addEventListener("click", clicBrowser35);
       


            function clicBrowser35(){

            radio35.click();
            picture35.style.backgroundColor = "#fff";
            picture31.style.opacity = "1";
            picture32.style.opacity = "1";
            picture33.style.opacity = "1";
            picture34.style.opacity = "1";
            picture35.style.opacity = "0.5";
            picture36.style.opacity = "1";
            }

            var picture36 = document.getElementById("idPicture36");
            var radio36 = document.getElementById("radioPicture36");
       
        
            picture36.addEventListener("click", clicBrowser36);
       


            function clicBrowser36(){

            radio36.click();
            picture36.style.backgroundColor = "#fff";
            picture31.style.opacity = "1";
            picture32.style.opacity = "1";
            picture33.style.opacity = "1";
            picture34.style.opacity = "1";
            picture35.style.opacity = "1";
            picture36.style.opacity = "0.5";
            }

            


</script>
</body>
    
</html>