jQuery(document).ready(function(){
  /*----------------------------------------------
         S C R O L L   D O W N
  ------------------------------------------------*/
  jQuery('#arrow').on("click", function() {
    jQuery('html,body').animate({ scrollTop: jQuery("#posts").offset().top}, 1000, 'easeInOutQuart');
    return false;
  });


});
