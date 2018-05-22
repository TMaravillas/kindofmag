
jQuery( document ).ready(function( $ ) {

  var bee = document.getElementById("bee");
 document.addEventListener("mousemove", getMouse);


 bee.style.position = "absolute"; //css
 var beepos = {x:0, y:0};

 setInterval(followMouse, 30);

 var mouse = {x:0, y:0}; //mouse.x, mouse.y

 var dir = "right";
 function getMouse(e){
   mouse.x = e.pageX;
   mouse.y = e.pageY;
     //Checking directional change
     if(mouse.x > beepos.x){
       dir = "right";
     } else {
       dir = "left";
     }
 }

 function followMouse(){
   //1. find distance X , distance Y
   var distX = mouse.x - beepos.x;
   var distY = mouse.y - beepos.y;
   //Easing motion
    //Progressive reduction of distance
   beepos.x += distX/5;
   beepos.y += distY/2;

   bee.style.left = beepos.x + "px";
   bee.style.top = beepos.y + "px";

 }

 $('img').hover(function() {
       $(".cursor_follow").addClass('transition');

    }, function() {
       $(".cursor_follow").removeClass('transition');
    });
 $('a').hover(function() {
       $(".cursor_follow").addClass('transition');

    }, function() {
      $(".cursor_follow").removeClass('transition');
    });
 $('footer').hover(function() {
      $(".cursor_follow").addClass('transition_white');

    }, function() {
       $(".cursor_follow").removeClass('transition_white');
    });
    // $('.shape-overlays').hover(function() {
    //       $(".cursor_follow").addClass('transition_white');
    //
    //    }, function() {
    //       $(".cursor_follow").removeClass('transition_white');
    //    });
    var pulsate = function(x) {
    $(x).toggleClass('show')
  };

  $(function() {
    $('body').click(function() {
      pulsate('#bee');
    });
  });

});
