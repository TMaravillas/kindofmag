jQuery( document ).ready(function( $ ) {
  AOS.init({
    duration: 1200,
    disable: 'mobile'
  })
  $(window).on('load', function() {
  AOS.refresh();
  });
  });
