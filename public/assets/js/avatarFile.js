

    var fileInput1 = document.getElementById("img_1avatar");
    var textInput1 = document.getElementById("nomFichier1");
    var fauxBouton1 =  document.getElementById("fakeBrowser1");
   
    
    fauxBouton1.addEventListener("click", clicBrowser1);
    fileInput1.addEventListener("change", modifNomFichier1);
  

    function clicBrowser1(){

        fileInput1.click();
    }

    function modifNomFichier1(){

     
        textInput1.value = fileInput1.value;
    }

  

     

    var fileInput2 = document.getElementById("img_2avatar");
    var textInput2 = document.getElementById("nomFichier2");
    var fauxBouton2 =  document.getElementById("fakeBrowser2");
  
    
    fauxBouton2.addEventListener("click", clicBrowser2);
    fileInput2.addEventListener("change", modifNomFichier2);
  


    function clicBrowser2(){

        fileInput2.click();
    }

    function modifNomFichier2(){

        textInput2.value = fileInput2.value;
    }

   
     
    var fileInput3 = document.getElementById("img_3avatar");
    var textInput3 = document.getElementById("nomFichier3");
    var fauxBouton3 =  document.getElementById("fakeBrowser3");
    
    
    fauxBouton3.addEventListener("click", clicBrowser3);
    fileInput3.addEventListener("change", modifNomFichier3);
 


    function clicBrowser3(){

        fileInput3.click();
    }

    function modifNomFichier3(){

      
        textInput3.value = fileInput3.value;
    }

    