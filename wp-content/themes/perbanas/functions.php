<?php
add_theme_support( 'post-thumbnails' );

/**
 * Registering menu in admin panel
 */
function register_my_menu() {
	register_nav_menus( array(
		'header-menu' 	=> 'Header Menu',
		'extra-menu' 	=> 'Footer Menu',
		'council-menu'	=> 'Council Menu',
		'events-menu'	=> 'Events Menu',
		'member-bank-menu'	=> 'Member Bank Menu'
	));
}
add_action( 'init', 'register_my_menu' );

/**
 * Registering style and javascript in wordpress
 */
function perbanas_cssjs() {
	wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('font-open-sans', get_template_directory_uri() . '/css/font-open-sans.css');
	wp_enqueue_style('flex-height', get_template_directory_uri() . '/css/flex-height.css');
	wp_enqueue_style('perbanas', get_template_directory_uri() . '/css/perbanas.css');
	//wp_enqueue_script( 'jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),'1.3.1',TRUE);
	wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js',array(),'',TRUE);
	wp_enqueue_script('function', get_template_directory_uri() . '/js/functions.js',array(),'',TRUE);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js',array(),'',TRUE);
}
add_action('wp_enqueue_scripts','perbanas_cssjs');


/**
 * Add filter custom taxonomy in post type
 * http://wordpress.org/support/topic/show-categories-filter-on-custom-post-type-list?replies=15
 */
function restrict_manage_post_type() {
	
	global $typenow;

	// Mendaftarkan nama taxonomy, karena taxonomy yang saya gunakan
	// menggunakan awalan sub pada masing-masing post typenya
	$taxonomy = 'sub'. $typenow;

	if( $typenow != "page" && $typenow != "post" ){
		$filters = array($taxonomy);
		foreach ($filters as $tax_slug) {

			$tax_obj 	= get_taxonomy($tax_slug);
			$tax_name 	= $tax_obj->labels->name;
			$terms 		= get_terms($tax_slug);

			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
			echo "<option value=''>Show All $tax_name</option>";
			foreach ($terms as $term) { 
				echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; 
			}
			echo "</select>";
		}
	}
}
function request_sectors( $request ) {
	$current_url = substr( $GLOBALS['PHP_SELF'], -18);
	if (is_admin() && $current_url == '/wp-admin/edit.php' && isset($request['post_type']) && $request['post_type']=='sector') {
		$request['term'] = get_term($request['subsector'],'subsector')->name;
	}
	return $request;
}
add_action( 'restrict_manage_posts','restrict_manage_post_type' );
add_action( 'request', 'request_sectors' );

/**
 * Custumize permalink becomes
 * http://perbanas.org/[main_menu]/[post_type]/[taxonomy]/[term]/[post_content]
 */
function route_council()
{
	
}

