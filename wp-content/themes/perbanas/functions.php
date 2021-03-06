<?php

load_theme_textdomain('perbanas');
add_theme_support( 'post-thumbnails' );

add_action( 'login_form_middle', 'add_lost_password_link' );
function add_lost_password_link() {
	return '<a class="forgot-password" href="'.wp_lostpassword_url().'">Forgot Password?</a>';
}
/**
 * Registering style and javascript in wordpress
 */
function perbanas_cssjs() {

	if ( !is_admin()) {

		wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
		if (!is_home() && !is_front_page()) {
			wp_enqueue_style('showup', get_template_directory_uri() . '/js/showup/showup.css');
		}

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
		if (!is_home() && !is_front_page()) {
			wp_enqueue_script('showup', get_template_directory_uri() . '/js/showup/showup.js',array(),'',TRUE);
		}
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
 * 
 * */
function perbanas_cssjs_admin() {
	global $wp_roles;
	$current_user = wp_get_current_user();
	$roles = $current_user->roles;
	$role = array_shift($roles);
	$roleSekarang = isset($wp_roles->role_names[$role]) ? translate_user_role($wp_roles->role_names[$role] ) : false;
	
	if (strtolower(str_replace(' ','',$roleSekarang)) == 'memberarea') {
		wp_enqueue_style('perbanas-admin', get_template_directory_uri().'/css/adminperbanas.css');
	} 
}
add_action( 'admin_enqueue_scripts', 'perbanas_cssjs_admin' );

/**
 * Add Title to Titlebar
 */
/*add_filter( 'wp_title', 'perbanas_title_for_home' );
function perbanas_title_for_home( $title )
{
	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __(get_bloginfo('title'),'perbanas') . ' | ' . __(get_bloginfo( 'description' ),'perbanas');
	} else {
		return __(get_bloginfo('title'),'perbanas') . ' |' . __($title,'perbanas');
	}
	
	return __($title,'perbanas');
}*/

/**
 * Override wp_title for translating
 */
function perbanas_wp_title($display = true)
{
	global $wp_locale;

	$m = get_query_var('m');
	$year = get_query_var('year');
	$monthnum = get_query_var('monthnum');
	$day = get_query_var('day');
	$search = get_query_var('s');
	$title = '';

	$t_sep = '%WP_TITILE_SEP%'; // Temporary separator, for accurate flipping, if necessary

	if ( is_single() || ( is_home() && !is_front_page() ) || ( is_page() && !is_front_page() ) ) {
		$title = single_post_title( '', false );
	}

	// If there's a post type archive
	if ( is_post_type_archive() ) {
		$post_type = get_query_var( 'post_type' );
		if ( is_array( $post_type ) )
			$post_type = reset( $post_type );
		$post_type_object = get_post_type_object( $post_type );
		if ( ! $post_type_object->has_archive )
			$title = post_type_archive_title( '', false );
	}

	// If there's a category or tag
	if ( is_category() || is_tag() ) {
		$title = single_term_title( '', false );
	}

	// If there's a taxonomy
	if ( is_tax() ) {
		$term = get_queried_object();
		if ( $term ) {
			$tax = get_taxonomy( $term->taxonomy );
			$title = single_term_title( '', false );
		}
	}

	// If there's an author
	if ( is_author() && ! is_post_type_archive() ) {
		$author = get_queried_object();
		if ( $author )
			$title = $author->display_name;
	}

	// Post type archives with has_archive should override terms.
	if ( is_post_type_archive() && $post_type_object->has_archive )
		$title = post_type_archive_title( '', false );

	// If there's a month
	if ( is_archive() && !empty($m) ) {
		$my_year = substr($m, 0, 4);
		$my_month = $wp_locale->get_month(substr($m, 4, 2));
		$my_day = intval(substr($m, 6, 2));
		$title = $my_year . ( $my_month ? $t_sep . $my_month : '' ) . ( $my_day ? $t_sep . $my_day : '' );
	}

	// If there's a year
	if ( is_archive() && !empty($year) ) {
		$title = $year;
		if ( !empty($monthnum) )
			$title .= $t_sep . $wp_locale->get_month($monthnum);
		if ( !empty($day) )
			$title .= $t_sep . zeroise($day, 2);
	}

	// If it's a search
	if ( is_search() ) {
		/* translators: 1: separator, 2: search phrase */
		$title = sprintf(__('Search Results %1$s %2$s'), $t_sep, strip_tags($search));
	}

	// If it's a 404 page
	if ( is_404() ) {
		$title = __('Page not found');
	}



	if ($display) {

		if( empty( $title ) && ( is_home() || is_front_page() ) ) {
			echo __(get_bloginfo('title'),'perbanas') . ' | ' . __(get_bloginfo( 'description' ),'perbanas');
		} else {
			echo __(get_bloginfo('title'),'perbanas') . ' | ' . __($title,'perbanas');
		}

	} else {

		if( empty( $title ) && ( is_home() || is_front_page() ) ) {
			return __(get_bloginfo('title'),'perbanas') . ' | ' . __(get_bloginfo( 'description' ),'perbanas');
		} else {
			return __(get_bloginfo('title'),'perbanas') . ' | ' . __($title,'perbanas');
		}
	}
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
 * Remove excerpt [...] suffix
 * */
function perbanas_remove_suffix_excerpt() {
	return '';
}
add_filter('excerpt_more', 'perbanas_remove_suffix_excerpt');


/**
 * Change footer admin text
 * */
function perbanas_edit_footer()
{
    add_filter( 'admin_footer_text', 'perbanas_edit_text', 11 );
}

function perbanas_edit_text($content) {
    return "Thank you for creating with <a href='http://www.fostrom.com/'>Fostrom</a>";
}
add_action( 'admin_init', 'perbanas_edit_footer' );


/**
 * Sort multi dimensional array
 * Source: http://stackoverflow.com/questions/2699086/sort-multi-dimensional-array-by-value
 * 
 * @param  array $a array
 * @param  array $b array
 * @return order    
 *
 * 
 */
function sort_by_order($a, $b) {
	return strcasecmp($a['order'], $b['order']);
}

function redirect($url, $statusCode = 303)
{
	header('Location:'.$url, true, $statusCode);
	die();
}

/**
 * Include separate function
 * 
 */
require get_template_directory() . '/inc/breadcrumb.php'; 
require get_template_directory() . '/inc/postmeta.php';
require get_template_directory() . '/inc/menuperbanas.php';
