<?php
  // ADD THEME OPTIONS
  include('theme-options.php');
  
  // Translations can be filed in the /languages/ directory
  load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );

  $locale = get_locale();
  $locale_file = TEMPLATEPATH . "/languages/$locale.php";
  if ( is_readable($locale_file) )
      require_once($locale_file);
  
  // LOAD JQUERY SCRIPTS
  function tinktank_add_scripts() {
      wp_enqueue_script('jquery');
      wp_register_script( 'add-custom-js', get_template_directory_uri() . '/_/_js/custom-ck.js', array('jquery'),'',true  ); // TO FOOTER
      wp_enqueue_script( 'add-custom-js' );
  }
  add_action( 'wp_enqueue_scripts', 'tinktank_add_scripts' );

  // Clean up the <head>
  function removeHeadLinks() {
      remove_action('wp_head', 'rsd_link');
      remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

  // MENUS
  function your_function_name() {
  add_theme_support( 'menus' );
  }
  add_action( 'after_setup_theme', 'your_function_name' );

  // ALLOW SVG UPLOADS
  function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
  }
  add_filter( 'upload_mimes', 'cc_mime_types' );

  // FEATURED IMAGE
  if ( function_exists( 'add_theme_support' ) )
  add_theme_support( 'post-thumbnails' );

  // READ-MORE TO EXPERPT
  function new_excerpt_more($more) {
         global $post;
    return '... <a href="'. get_permalink($post->ID) . '" class="read-more">&rarr;</a>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

 ?>
