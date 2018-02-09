<?php
require get_template_directory() .'/inc/enqueue.php';
require get_template_directory() .'/inc/class-wp-bootstrap-navwalker.php';


// /**
//  * Filter the upload size limit for non-administrators.
//  *
//  * @param string $size Upload size limit (in bytes).
//  * @return int (maybe) Filtered size limit.
//  */
// function filter_site_upload_size_limit( $size ) {
//     // Set the upload size limit to 60 MB for users lacking the 'manage_options' capability.
//     if ( ! current_user_can( 'manage_options' ) ) {
//         // 60 MB.
//         $size = 6024 * 10000;
//     }
//     return $size;
// }
// add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 20 );


function zaman_theme_setup(){
  add_theme_support( 'menus' );
  register_nav_menus(
    array(
      'primary'     => __('Header Menu', 'zaman-website-theme'),
      'secondary'   => __('Footer Menu', 'zaman-website-theme'),
    )
  );
}
add_action( 'init', 'zaman_theme_setup');
/*
==========================================
          Sidebar Function
==========================================
*/
function zaman_widget_setup() {

	register_sidebar(
		array(
			'name'	=> 'Sidebar',
			'id'	=> 'sidebar-1',
			'class'	=> 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action('widgets_init','zaman_widget_setup');

/**
 * Filter the except length to 25 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 25;//the amount of words the excerpt shows
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// theme support functions
add_theme_support( 'post-thumbnails');
add_theme_support( 'html5', array('search-form') );
