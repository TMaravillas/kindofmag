<?php
/////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////// ENQUEUE

//CSS auto version
add_action( 'wp_enqueue_scripts', 'flex_non_cached_stylesheet' );
function flex_non_cached_stylesheet(){
  wp_enqueue_style(
    'style-main',
    get_stylesheet_directory_uri().'/dist/style.css',
    array(),
    filemtime( get_stylesheet_directory().'/dist/style.css' )
  );

  wp_enqueue_script('jquery');
  wp_enqueue_script( 'jquery.matchHeight', get_template_directory_uri() . '/src/js/jquery.matchHeight.js', array(), '1.0.0', true );
  wp_enqueue_script( 'matchHeight.init', get_template_directory_uri() . '/src/js/matchHeight.init.js', array(), '1.0.0', true );
  // Slick Slider
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/src/js/slick.js', array(), '1.0.0', true );
  wp_enqueue_script( 'slick.init.', get_template_directory_uri() . '/src/js/slick.init.js', array(), '1.0.0', true );

  // instafeed
  wp_enqueue_script( 'instafeed', get_template_directory_uri() . '/src/js/instafeed.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'instafeed.init', get_template_directory_uri() . '/src/js/instafeed.init.js', array(), '1.0.0', true );
// Sticky menu
wp_enqueue_script( 'stickyMenu', get_template_directory_uri() . '/src/js/stickyMenu.js', array(), '1.0.0', true );
// animsition
wp_enqueue_script( 'animsition', get_template_directory_uri() . '/src/js/animsition.js', array(), '1.0.0', true );
wp_enqueue_script( 'animsition.init', get_template_directory_uri() . '/src/js/animsition.init.js', array(), '1.0.0', true );
//Social fade
wp_enqueue_script( 'socialfade', get_template_directory_uri() . '/src/js/social-fade.js', array(), '1.0.0', true );

// Overlay
wp_enqueue_script( 'overlay', get_template_directory_uri() . '/src/js/overlay.js', array(), '1.0.0', true );
// scroll down
wp_enqueue_script( 'scroll-down', get_template_directory_uri() . '/src/js/scroll-down.js', array(), '1.0.0', true );
// mouse follower
wp_enqueue_script( 'mouse-follower', get_template_directory_uri() . '/src/js/mouse-follower.js', array(), '1.0.0', true );
// Aos
wp_enqueue_script( 'aos', get_template_directory_uri() . '/src/js/aos.js', array(), '1.0.0', true );
wp_enqueue_script( 'aos.init.', get_template_directory_uri() . '/src/js/aos.init.js', array(), '1.0.0', true );
// Svg edit
wp_enqueue_script( 'svg.edit', get_template_directory_uri() . '/src/js/svg.edit.js', array(), '1.0.0', true );
// Animate
wp_enqueue_script( 'jquery.fittext', get_template_directory_uri() . '/src/js/jquery.fittext.js', array(), '1.0.0', true );
wp_enqueue_script( 'jquery.lettering', get_template_directory_uri() . '/src/js/jquery.lettering.js', array(), '1.0.0', true );
wp_enqueue_script( 'jquery.textillate', get_template_directory_uri() . '/src/js/jquery.textillate.js', array(), '1.0.0', true );
wp_enqueue_script( 'textillate.init', get_template_directory_uri() . '/src/js/textillate.init.js', array(), '1.0.0', true );
// Flickity
wp_enqueue_script( 'flickity', get_template_directory_uri() . '/src/js/flickity.js', array(), '1.0.0', true );
wp_enqueue_script( 'flickity.init', get_template_directory_uri() . '/src/js/flickity.init.js', array(), '1.0.0', true );


  wp_enqueue_script(
    'mainjs',
    get_template_directory_uri().'/dist/main.min.js',
    null,
    null,
		true
  );

  // Font Awesome
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/c81fe3ea32.css');

}
?>
