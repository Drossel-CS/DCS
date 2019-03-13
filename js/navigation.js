/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

$ = jQuery.noConflict(true);

$(document).ready( function () {

var breakpoint = 767;

if ($(document).width() <= breakpoint){
  $("#primary-menu").css("display","none");

}

  $('.menu-toggle').click(function(e) {
    e.preventDefault();

      if ($('#primary-menu').is(":visible") ) {
        $('.menu-toggle').removeClass("is-active");
        $('#primary-menu').stop(true,true).slideUp(400);
        
      } else {
        $('.menu-toggle').addClass("is-active");
        $('#primary-menu').stop(true,true).slideDown(400); 
      }
      
    });


  sizeOfScreen = $(window).width();

  $(window).resize(function () {
    
    if ($(document).width() > breakpoint){
      $("#primary-menu").css("display","block");
		}else{
      $("#primary-menu").css("display","none");
      $('.menu-toggle').removeClass("is-active");
    }

		sizeOfScreen = $(window).width();
  });

});


( function() {
	
	var nav1 = document.getElementsByClassName('front-nav');
	//getElementsByClass return array
	var nav = nav1[0];

	if(typeof nav !== "undefined"){
		window.onscroll = function(){
			if (window.pageYOffset >100){
				nav.style.background = "#2b2b2b";
				nav.style.transition = ".5s";
			}
			else {
				nav.style.background = "transparent";
			}
		}
	}

} )();
