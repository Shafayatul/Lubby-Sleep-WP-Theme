<?php
/**
 * @package 	WordPress
 * @subpackage 	Startup Company Child
 * @version		1.0.0
 * 
 * Child Theme Functions File
 * Created by CMSMasters
 * 
 */


/**
* Add support for Gutenberg.
*
* @link https://wordpress.org/gutenberg/handbook/reference/theme-support/
*/
function mytheme_setup_theme_supported_features() {
		
		// Theme supports wide images, galleries and videos.
		add_theme_support( 'align-wide' );
		
		// Make specific theme colors available in the editor.
    add_theme_support( 'editor-color-palette',
        array(
            'name' => 'dark blue',
            'color' => '#1767ef',
        ),
        array(
            'name' => 'light gray',
            'color' => '#eee',
        ),
        array(
            'name' => 'dark gray',
            'color' => '#444',
        )
    );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );
function gutenberg_setup() {
// Support Featured Images

//Gutenberg
add_theme_support( 'align-wide' );
add_theme_support('editor-styles');
add_theme_support('wp-block-styles');
add_theme_support( 'dark-editor-style' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-color-palette' );
}
add_action( 'after_setup_theme', 'gutenberg_setup' );


function register_my_menus() {
  register_nav_menus(
    array(
      'top-main-menu' => __( 'Main Menu' ),
      'footer-menu-1' => __( 'Footer Menu - 1' ),
      'footer-menu-2' => __( 'Footer Menu - 2' ),
      'footer-menu-3' => __( 'Footer Menu - 3' ),
      'footer-menu-4' => __( 'Footer Menu - 4' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


add_theme_support( 'post-thumbnails' );


add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}

?>