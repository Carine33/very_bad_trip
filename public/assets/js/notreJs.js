$(window).scroll(function () {
    // A chaque fois qu'on va descendre la page
    var y = $(this).scrollTop(); // On récupére la valeur du scroll vertical
 
    //si cette valeur > à 50 on ajoute la class fixed
    if (y >= 50) {
      $('.nav').addClass('fixed');
    } else {
      // sinon, on l'enlève
      $('.nav').removeClass('fixed');
    }
  });

$(document).ready(function () {
	$('.js-scrollTo').on('click', function() { // Au clic sur un élément
		var speed = 2500; // Durée de l'animation (en ms)
		$('html, body').animate( { scrollTop: $('html').offset().top }, speed ); // Go scrollTop vers le top avec 'html'
		return false;
	});
});
