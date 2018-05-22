jQuery( document ).ready(function( $ ) {
var userFeed = new Instafeed({
        get: 'user',
        userId: '2151162498',
        resolution: 'standard_resolution',
        accessToken: "2151162498.1677ed0.8280874d0cf44ef491236d7f60e879db",
        sortBy: 'most-recent',
        template: '<div class="columns four"><a href="{{link}}"><img src="{{image}}" /></a></div>',
        limit: 4,
      //   after: function () {
      //   $('.instagram-feed').slick({
      //     infinite: true,
      //     slidesToShow: 3,
      //     slidesToScroll: 3
      //   });
      // //   $('.instagram-feed').slick({
      // //   infinite: true,
      // //   speed: 300,
      // //   slidesToShow: 4,
      // //   slidesToScroll: 4,
      // // });
      //   }
    });
    userFeed.run();
});
