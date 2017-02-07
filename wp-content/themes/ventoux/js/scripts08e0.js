jQuery(function($) {

  // Animations

$(document).ready(function(){
  $.doTimeout(2500, function(){
    $('.repeat.go').removeClass('go');
    return true;
  });
$.doTimeout(2520, function(){
  $('.repeat').addClass('go');
    return true;
  });
});

  // Smooth scroll

$( document ).ready(function() {
  smoothScroll.init({
    speed: 1000,
    offset: 115,
    updateURL: true,
  });
});

  // Lightbox

jQuery(document).ready(function($){
  $('a').nivoLightbox({
    effect: 'fadeScale',
  });
});

  // Fixed header

$(function () // on document.ready()
  {
    if ($('div#fixed').length > 0)
  {
    function init() {
      window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
          shrinkOn = 200,
          header = document.querySelector("#fixed");
            if (distanceY > shrinkOn) {
              classie.add(header,"smaller");
              $(".span-underline").removeClass("topnav-span");
            } else {
            if (classie.has(header,"smaller")) {
              classie.remove(header,"smaller");
               $(".span-underline").addClass("topnav-span");
            }
          }
      });
  }
  window.onload = init();
  }
});

  // Header offsets for sub pages

jQuery(window).load(function() {
  function headerOffsets(){
    var headerHeight = jQuery('.sub-header').css("height");
      jQuery('.vf-offset').prepend('<div style="height: '+ headerHeight +';"></div>');
    };
  headerOffsets()
});

  // Close overlays in mobile devices

jQuery(document).ready(function($){
  if (Modernizr.touch) {
    // show the close overlay button
      $(".close-overlay").removeClass("hidden");
    // handle the adding of hover class when clicked
  $(".img").click(function(e){
      if (!$(this).hasClass("hover")) {
        $(this).addClass("hover");
      }
    });
    // handle the closing of the overlay
      $(".close-overlay").click(function(e){
        e.preventDefault();
        e.stopPropagation();
          if ($(this).closest(".img").hasClass("hover")) {
            $(this).closest(".img").removeClass("hover");
        }
      });
        } else {
    // handle the mouseenter functionality
      $(".img").mouseenter(function(){
        $(this).addClass("hover");
      })
    // handle the mouseleave functionality
      .mouseleave(function(){
        $(this).removeClass("hover");
      });
    }
});

  // Isotope sorting

if(jQuery().isotope) {   
  $(window).load(function(){
    var $container = $('#container');
      $container.isotope({
        itemSelector: '.item',
        filter: '*',
        animationOptions: {
        duration: 2000,
        easing: 'linear',
        queue: false,
        transitionDuration: 1.9,
    }
});
var iso = $container.data('isotope');
  $container.isotope( 'reveal', iso.items );

var $optionSets = $('.button-group'),
  $optionLinks = $optionSets.find('div');

$optionLinks.click(function(){
  var $this = $(this);
// don't proceed if already selected
    if ( $this.hasClass('selected') ) {
      return false;
    }

var $optionSet = $this.parents('.button-group');
  $optionSet.find('.selected').removeClass('selected');
    $this.addClass('selected'); 
  });

$('#filters').on( 'click', 'div', function() {
  var filterValue = $(this).attr('data-filter');
    $container.isotope({ filter: filterValue });
  });
});
    $(".isotope").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
  });
}

  // Showing and hiding the search bar

$(".vf-search-toggle").on('click', function(){
    $(".vf-search").slideToggle('slow');
  });

$(".vf-close-button").on('click', function  () {
    $(".vf-search").slideUp('slow');
  })
});

  // Fit vids, responsive video

jQuery(document).ready(function($){
// Target your .container, .wrapper, .post, etc.
  $("body").fitVids();
});

// Back to top button

jQuery(document).ready(function($) {
              $(window).scroll(function() {
                if($(this).scrollTop() !== 0) {
                  $('#toTop').fadeIn();
                } else {
                  $('#toTop').fadeOut();
                }
              });
             
              $('#toTop').click(function() {
                $('body,html').animate({scrollTop:0},1000);
              });
            });