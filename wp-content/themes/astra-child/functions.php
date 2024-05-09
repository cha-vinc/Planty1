<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	/* Ajout de la page theme.css */
	wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
	/* Ajout /css/widgets/image-titre-widget.css */
	wp_enqueue_style('image-titre-widget', get_stylesheet_directory_uri() . '/css/widgets/image-titre-widget.css', array(), filemtime(get_stylesheet_directory() . '/css/widgets/image-titre-widget.css'));
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

/* Pour backgroung img*/
require_once(__DIR__ . '/widgets/ImageTitreWidget.php');



function register_widgets()
{
    register_widget('Image_Titre_Widget');
}
add_action('widgets_init', 'register_widgets');


/*Pour contact form 7*/

add_filter('wpcf7_autop_or_not', '__return_false');

/* Creation du lien d'administration*/

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

function add_extra_item_to_nav_menu( $items, $args ) {
		if (is_user_logged_in() && ($args->theme_location == 'primary' || $args->theme_location == 'mobile_menu' )){
		$items .= '<li><a href="' . admin_url() . '" class="menu-link admincss">Admin</a></li>';
		}

    return $items;
    
}




