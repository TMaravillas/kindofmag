// FADE IN SOCIAL
jQuery( document ).ready(function( $ ) {
var $fade = $('.social-fixed');
  if($fade.length) {
    $(window).scroll(function() {
      if($(window).scrollTop() > 300) {
        $fade.fadeIn(300);
      } else {
        $fade.fadeOut(300);
      }
    });
  }
});
