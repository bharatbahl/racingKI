/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
jQuery( document ).ready(function($) {
    $(".vf-reveal p").on("click", function()
    {
      $(".vf-nav-mobile").slideToggle("slow");
		});
	
	$('.vf-close').on('click', function(){
		$(".vf-nav-mobile").slideUp("slow");
	});
	
	$('.menu-item-has-children').on('click', function(event){
		if (this == event.target) {
  			$(this).children('ul').slideToggle('medium');
  			$(this).toggleClass('open');
			
  		}
  		return true;
	});
	
	

});	





	
    

