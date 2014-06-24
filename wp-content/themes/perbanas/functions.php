<?php

load_theme_textdomain('perbanas');
add_theme_support( 'post-thumbnails' );


/**
 * Registering style and javascript in wordpress
 */
function perbanas_cssjs() {

	if ( !is_admin()) {

		wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('showup', get_template_directory_uri() . '/js/showup/showup.css');

		// Add select bootstrap script and style
		if ( get_post_type() == 'regionalboard' ) {
			wp_enqueue_style('select2', get_template_directory_uri() . '/js/select2-3.4.8/select2.css');
		}
		if ( is_tax('subsector') ) {
			wp_enqueue_style('select2', get_template_directory_uri() . '/js/select2-3.4.8/select2.css');
		}
		if ( get_post_type() == 'probankmagazine') {
			wp_enqueue_style('select2', get_template_directory_uri() . '/js/select2-3.4.8/select2.css');
		}		
		wp_enqueue_style('font-open-sans', get_template_directory_uri() . '/css/font-open-sans.css');
		wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css');
		wp_enqueue_style('flex-height', get_template_directory_uri() . '/css/flex-height.css');
		wp_enqueue_style('perbanas', get_template_directory_uri() . '/css/perbanas.css');
		
		// Add select bootstrap script and style
		if ( get_post_type() == 'regionalboard' ) {
			wp_enqueue_style('select2-bootstrap', get_template_directory_uri() . '/js/select2-3.4.8/select2-bootstrap.css');
		}

		wp_enqueue_script('jquery-1.11.1', get_template_directory_uri() . '/js/jquery.min.js',array(),'1.11.1',TRUE);
		wp_enqueue_script('showup', get_template_directory_uri() . '/js/showup/showup.js',array(),'',TRUE);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(),'1.3.1',TRUE);
		wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js',array(),'',TRUE);
		wp_enqueue_script('fastclick', get_template_directory_uri() . '/js/fastclick.js',array(),'1.0.2',FALSE);

		wp_enqueue_script('function', get_template_directory_uri() . '/js/functions.js',array(),'',TRUE);
		wp_enqueue_script('main', get_template_directory_uri() . '/js/page.general.js',array(),'',TRUE);

		// Add select bootstrap script and style
		if ( get_post_type() == 'regionalboard' ) {
			wp_enqueue_script('select2-js', get_template_directory_uri() . '/js/select2-3.4.8/select2.min.js',array(),'',TRUE);
			wp_enqueue_script('page-council', get_template_directory_uri() . '/js/page.council.js',array(),'',TRUE);
		}
		
		if (is_tax('subsector')) {			
			wp_enqueue_script('select2-js', get_template_directory_uri() . '/js/select2-3.4.8/select2.min.js',array(),'',TRUE);
			wp_enqueue_script('page-council', get_template_directory_uri() . '/js/page.council.js',array(),'',TRUE);
		}

		if (get_post_type() == 'boardmember') {
			wp_enqueue_script('page-council', get_template_directory_uri() . '/js/page.council.js',array(),'',TRUE);
		}
		if (get_post_type() == 'advisoryboard') {
			wp_enqueue_script('page-council', get_template_directory_uri() . '/js/page.council.js',array(),'',TRUE);
		}
		if (get_post_type() == 'supervisoryboard') {
			wp_enqueue_script('page-council', get_template_directory_uri() . '/js/page.council.js',array(),'',TRUE);
		}
		if (get_post_type() == 'secretariat') {
			wp_enqueue_script('page-council', get_template_directory_uri() . '/js/page.council.js',array(),'',TRUE);
		}
		// Add script for contact page
		if ( is_page('contact') || is_page('kontak') ) {
			wp_enqueue_script('contact-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false',array(),'',TRUE);
		}
		if ( get_post_type() == 'probankmagazine') {
			wp_enqueue_script('select2-js', get_template_directory_uri() . '/js/select2-3.4.8/select2.min.js',array(),'',TRUE);
			wp_enqueue_script('page-news-and-media', get_template_directory_uri() . '/js/page.news-and-media.js',array(),'',TRUE);
		}		
		// about - who we are
		if ( is_page('who-we-are') || is_page('profil-perbanas')) {
			wp_enqueue_script('jquery-parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js',array(),'',TRUE);
			wp_enqueue_script('jquery-viewport', get_template_directory_uri() . '/js/jquery.viewport.mini.js',array(),'',TRUE);
			wp_enqueue_script('page-about', get_template_directory_uri() . '/js/page.about.js',array(),'',TRUE);
		}
		if (get_post_type() == 'photogallery') {
			wp_enqueue_script('page-news-and-media', get_template_directory_uri() . '/js/page.news-and-media.js',array(),'',TRUE);
		}

	}
}
add_action('wp_enqueue_scripts','perbanas_cssjs');

/**
 * Add Title to Titlebar
 */
add_filter( 'wp_title', 'perbanas_title_for_home' );
function perbanas_title_for_home( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'perbanas' ) . ' | ' . get_bloginfo( 'description' );
	}
	return $title;
}

/**
 * Remove login logo in wordpress admin
 * http://stanislav.it/how-to-remove-wordpress-logo-from-admin-bar/
 */
function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'remove_wp_logo', 999);

/**
 * Logo in login page
 */
function perbanas_login_logo() {
	echo '<style type="text/css">
        body.login div#login h1 a {
            background-image: url('.get_template_directory_uri().'/img/LOGO_PERBANAS_EN.png);
            padding-bottom: 30px;
            		width: 300px;
height: 200px;
background-size: 300px 200px;
        }
    </style>';
	
}
function perbanas_login_logo_url() {
	return home_url();
}
function perbanas_login_logo_url_title() {
	return 'Perbanas';
}
add_filter( 'login_headertitle', 'perbanas_login_logo_url_title' );
add_filter( 'login_headerurl', 'perbanas_login_logo_url' );
add_action('login_enqueue_scripts','perbanas_login_logo');


/**
 * Add filter custom taxonomy in post type
 * http://wordpress.org/support/topic/show-categories-filter-on-custom-post-type-list?replies=15
 */
function perbanas_restrict_manage_post_type() {
	
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
function perbanas_request_sectors( $request ) {
	$current_url = substr( $GLOBALS['PHP_SELF'], -18);
	if (is_admin() && $current_url == '/wp-admin/edit.php' && isset($request['post_type']) && $request['post_type']=='sector') {
		$request['term'] = get_term($request['subsector'],'subsector')->name;
	}
	return $request;
}
add_action( 'restrict_manage_posts','perbanas_restrict_manage_post_type' );
add_action( 'request', 'perbanas_request_sectors' );


/**
 * For admin gallery
 */
/* function gallery_columns($columns) {
	$columns = array(
		'cb'				=> '<input type="checkbox"',
		'gal_post_thumb'	=> 'Thumbnail',
		'title'				=> 'Title',
		'photo_type'		=> 'Type',
		'author'			=> 'Author',
		'date'				=> 'Date'
	);
	
	return $columns;
}

function custom_gallery_columns($column) {
	global $post;
	
	switch ($column) {
		case 'gal_post_thumb':
			echo the_post_thumbnail('admin-list-thumb');
		break;
		
		case 'description':
			the_excerpt();
		break;
		
		case 'photo_type':
			echo get_the_term_list( $post->ID, 'photo_type', '', ', ','');
		break;
	}
}

add_action('manage_posts_custom_column', 'gallery_columns');
add_filter('manage_edit-gallery_columns', 'custom_gallery_columns'); */

/**
 * 
 * Custom restriction for post type member area
 * 
 * */
function perbanas_force_members_area() {
	
	if ( 'memberarea' == get_post_type() && !is_user_logged_in() ) {
		auth_redirect();
	}
}

/**
 * Include separate function
 * 
 */
require get_template_directory() . '/inc/breadcrumb.php'; 
require get_template_directory() . '/inc/postmeta.php';
require get_template_directory() . '/inc/menuperbanas.php';
