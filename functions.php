<?php
/**
 * Setup miex Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */

//Theme Set up:
function miex_child_theme_setup() {
	load_child_theme_textdomain( 'miex-child', get_stylesheet_directory() . '/languages' );
    remove_action( 'init', 'register_miex_Portfolio2' );
    remove_action( 'init', 'register_miex_Portfolio' );
}
add_action( 'after_setup_theme', 'miex_child_theme_setup' );

require_once(get_stylesheet_directory() . '/visual/shortcodes.php');
require_once(get_stylesheet_directory() . '/visual/vc_shortcode.php');
require_once(get_stylesheet_directory() . '/portfolio-template.php');

function miex_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'miex_enqueue_styles' );

add_image_size( 'logo' , 638, 540, array( 'center', 'center' ));
add_image_size( 'logo-small' , 357, 367, array( 'center', 'center' ));

//which can also remove 
add_action( 'init', 'removeadd_my_shortcodes',20 );
function removeadd_my_shortcodes() {
    remove_shortcode('education', 'education_func');
    remove_shortcode('about_me', 'about_me_func');
    remove_shortcode('blog_1', 'blog_1_func');
    remove_shortcode( 'Portfolio', 'Portfolio_func');    
    remove_shortcode( 'portfolio_2', 'portfolio_2_func' );
    add_shortcode('about_me', 'about_me_func_new');
    add_shortcode('education', 'new_education_func');
    add_shortcode( 'Portfolio', 'Portfolio_func_new' );
    add_shortcode('blog_1', 'blog_1_func_new');

}

