<?php
/////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////Default Functions

/////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////// Title Tag Support
function theme_slug_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );

///////////////////////////////////////////////////////
// No pingbacks for security
// http://blog.sucuri.net/2014/03/more-than-162000-wordpress-sites-used-for-distributed-denial-of-service-attack.html
add_filter( 'xmlrpc_methods', function( $methods ) {
  unset( $methods['pingback.ping'] );
  return $methods;
} );

//// Nice url
function niceurl($url) {
	$url = str_replace('http://', '', $url);
	$url = str_replace('https://', '', $url);
	$url = str_replace('www.', '', $url);
	$url = rtrim($url, "/");
    return $url;
}

// Excerpt length
function custom_excerpt_length( $length ) {
        return 10;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 20 );

// Usage
// niceurl('http://google.com.au/');
/// outputs -> google.com.au

///////////////////////////////////////////////////////
//Most popular posts
/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

///////////////////////////////////////////////////////
//Add an excerpt box for pages
if ( function_exists('add_post_type_support') ){
  add_action('init', 'add_page_excerpts');
  function add_page_excerpts(){
    add_post_type_support( 'page', 'excerpt' );
  }
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function add_link_atts($atts) {
  $atts['class'] = "animsition-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');
?>
