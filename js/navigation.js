/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

$ = jQuery.noConflict(true);
var breakpoint = 767;

$(document).ready( function () {

var nav1 = document.getElementsByClassName('front-nav');
//getElementsByClass return array
var nav = nav1[0];

if ($(document).width() <= breakpoint){
  $("#primary-menu").css("display","none");
  if(typeof nav !== "undefined"){
    nav.style.background = "#2b2b2b";
  }
}else{
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
      if (window.pageYOffset >100){
        nav.style.background = "#2b2b2b";
      }else{
        nav.style.background = "transparent";
      }

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
		}else{
      $("#primary-menu").css("display","none");
      $('.menu-toggle').removeClass("is-active");
      if(typeof nav !== "undefined"){
        nav.style.background = "#2b2b2b";
      }
      
    }

		sizeOfScreen = $(window).width();
  });
  

});

