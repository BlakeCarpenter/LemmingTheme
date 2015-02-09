<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function lemming_widgets_init() {

	register_sidebar( array(
		'name'          => 'Lemming Sidebar',
		'id'            => 'lemming-sidebar',
		'before_widget' => '<div class="lemming-sidebar">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3 class="widget-title">',
	) );
}

function lemming_nav_init(){
	register_nav_menu('splash-nav','Home Nav Menu');
}

add_action( 'widgets_init', 'lemming_widgets_init' );
add_action('after_setup_theme','lemming_nav_init');

//From digwp.com, smart jquery inclusion
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '1.3.2');
	wp_enqueue_script('jquery');
}
?>