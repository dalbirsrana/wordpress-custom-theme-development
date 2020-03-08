<?php 

// Please install the following two VS Code Extensions:
// PHP Intelephense
// WordPress Snippets

if ( ! function_exists( 'jazzicons_setup' ) ) :

function jazzicons_setup() {
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-formats', array('aside', 'gallery', 'quote', 'video') );


  add_theme_support( 'custom-header', array(
    'height'  => '400',
    'width'   => '1800',
    'uploads' => true,
    'default-image' => get_template_directory_uri() . '/img/cropped-live-02.jpg',
  ) );


  // Tell WP how many menu 
    register_nav_menus( array(
      'menu-main'       => 'Main Menu',
      'menu-footer'  => 'Footer Menu',
      'menu-social'     => 'Social Menu',
    ) );


}
endif;


add_action('after_setup_theme', 'jazzicons_setup');


function jazzicons_scripts_styles(){
  $rand = rand(1, 9999999999);
  wp_enqueue_style('jazzicons_style', get_stylesheet_uri(), '' , $rand );

  wp_enqueue_style('jazzicons_fonts', 'https://fonts.googleapis.com/css?family=Lora:400,700&display=swap' );

  // ARGS: handle, src, dependencies, version,  in footer (boolean) ?
  wp_enqueue_script( 'jazzicons_video', get_template_directory_uri() . '/js/responsive-video.js', array(), null, true );
}

add_action('wp_enqueue_scripts', 'jazzicons_scripts_styles');

