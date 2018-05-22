jQuery( document ).ready(function( $ ) {

  $(function() {
  	$('.equal').matchHeight({
    byRow: true,
    property: 'height',
    target: null,
    remove: false
    });
  });

});
