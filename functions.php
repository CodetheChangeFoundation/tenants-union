<?php
/**
 * Code the Change Starter Theme  Functions
 *
 * @package startertheme
 */

require get_template_directory() . '/inc/cleanup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/bs4navwalker.php';



function tenants_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('customcss', get_template_directory_uri() . '/assets/css/startertheme.css', array(), '1.0', 'all');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/startertheme.js', array(), '1.0.0', true);
}

function bootstrap_enqueue_styles () {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );

}

add_theme_support('menus');
require_once get_template_directory() . '/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'Primary Navigation' ),
) );
// Register custom navigation walker

require get_template_directory() . '/map.php';

?>
