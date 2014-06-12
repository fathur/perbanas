<?php
add_theme_support( 'post-thumbnails' );

/**
 * Registering style and javascript in wordpress
 */
function perbanas_cssjs() {

	if ( !is_admin()) {

		wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
		
		// Add select bootstrap script and style
		if ( get_post_type() == 'regionalboard' ) {
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
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(),'1.3.1',TRUE);
		wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js',array(),'',TRUE);
		wp_enqueue_script('function', get_template_directory_uri() . '/js/functions.js',array(),'',TRUE);
		wp_enqueue_script('main', get_template_directory_uri() . '/js/page.general.js',array(),'',TRUE);

		// Add select bootstrap script and style
		if ( get_post_type() == 'regionalboard' ) {
			wp_enqueue_script('select2-js', get_template_directory_uri() . '/js/select2-3.4.8/select2.min.js',array(),'',TRUE);
		}
		
		// Add script for contact page
		if ( is_page('contact') || is_page('kontak') ) {
			wp_enqueue_script('contact-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false',array(),'',TRUE);
		}
		
		if ( is_page('who-we-are')) {
			wp_enqueue_script('jquery-parallax', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js',array(),'',TRUE);
			wp_enqueue_script('jquery-viewport', get_template_directory_uri() . '/js/jquery.viewport.mini.js',array(),'',TRUE);
			wp_enqueue_script('page-about', get_template_directory_uri() . '/js/page.about.js',array(),'',TRUE);
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
 * Registering menu in admin panel
 */
function perbanas_register_menu() {
	register_nav_menus( array(
		'about-menu'	=> 'About Menu',
		'header-menu' 	=> 'Header Menu',
		'extra-menu' 	=> 'Footer Menu',
		'council-menu'	=> 'Council Menu',
		'events-menu'	=> 'Events Menu',
		'member-bank-menu'	=> 'Member Bank Menu',
		'news-menu'		=> 'News Menu',
		'industryguidelines-menu'	=> 'Industry Guidelines Menu'
	));
}
add_action( 'init', 'perbanas_register_menu' );

/**
 * 
 * Generated menu utama
 * Menambahkan class first dan class last
 * pada menu utama.
 * 
 */
function perbanas_header_menu() {
	
	$menu_name = 'header-menu';
	
	if ( ($locations = get_nav_menu_locations()) AND (isset( $locations[$menu_name] )) ) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
		
		$generated_menu = '<ul class="nav navbar-nav">';
		$generated_menu .= '<li class="first"><a href="'.$menu_items[0]->url.'">'.$menu_items[0]->title.'</a></li>';
			
		for ($i = 1; $i < count($menu_items)-1; $i++)
			$generated_menu .= '<li><a href="'.$menu_items[$i]->url.'">'.$menu_items[$i]->title.'</a></li>';			
		
		$generated_menu .= '<li class="last"><a href="'.$menu_items[count($menu_items)-1]->url.'">'.$menu_items[count($menu_items)-1]->title.'</a></li>';
		$generated_menu .= '</ul>';
		
	}
	
	return $generated_menu;
}

function perbanas_side_menu( $menu_name, $id ) {
	
	$menus = __find_all_thread( $menu_name );
	
	if ( $menus && count( $menus ) > 0 ) {
		$list_menus = "<div class='accordion' id='$id'>";
	
		foreach ( $menus as $menu ) {
			
			if ($menu->url == __getCurrentUrl()) 
				$class_active	= 'active';
			else 
				$class_active	= '';			
			
			if ( __has_child( $menu->children )) {
				
				if ( __have_active_menu( $menu->children ) ) {
					$class_active = 'active';
				}
				
				$list_menus .= '<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle item" data-toggle="collapse" data-parent="#'.$id.'" href="'.$menu->url.'">
								<i class="icon-home"></i> '. $menu->title .
							'</a>
							<hr class="'.$class_active.'" />
						</div>';
				
				__generate_child_menu( $menu->children, $list_menus, 0, $menu->url );
				
				$list_menus .= '</div>';
				
			} else {
				
				$list_menus .= '<div class="accordion-group">
						<div class="accordion-heading">
							<a class="item" href="'.$menu->url.'">
								<i class="icon-home"></i> '. $menu->title .
												'</a>
							<hr class="'.$class_active.'" />
						</div></div>';
			}
		}	
		return $list_menus . "</div>";
	}
}

function __generate_child_menu( &$menus, &$list_menus, $level, &$url_collapse = '' ) {
	
	
	
	// Mengahapus simbol # (kres) pada string pertama
	$kres = substr($url_collapse, 0, 1);
	if ('#' == $kres) $url_collapse = substr($url_collapse, 1);
	
	$list_menus .= '<div id="'.$url_collapse.'" class="accordion-body collapse" style="height: 0px; ">
		<div class="accordion-inner">
			<ul class="list-unstyled" >';
	
	foreach ( $menus as $menu ) {
		
		if ($menu->url == __getCurrentUrl()) 
			$class_active	= 'active';
		else 
			$class_active	= '';	
	
		/* // if child has children, iterate its childs!!
		if ( __has_child( $menu->children ) ) {
	
			// first output its child parent
			$list_menus .= "<li><a href='#' title='" . $menu->title . "'>" .
					$menu->title . "</a>";
			// generate again
			__generate_child_menu( $menu->children, $list_menus,$level+1);
	
		} else {
			
			$list_menus .= "<li class='subnav$level nohaschild'>
				<a href='" . $menu->url . "' title='" . $menu->title . "' class='' >" . 
					$menu->title . 
				"</a>";
		}
		$list_menus .= "</li>"; */
		
		$list_menus .= '<li>
				<a href="'.$menu->url.'" class="item">'.$menu->title.'</a>
				<hr class="'.$class_active.'" />
			</li>';
	}
	
	$list_menus .= "</ul></div></div>";
}

function __has_child( $child ) {
	
	if ( $child AND count($child) )
		return TRUE;
	
	return FALSE;
}

function __have_active_menu( &$menus ) {
	
	$tmp	= array();
	
	foreach ( $menus as $menu ) {
	
		if ($menu->url == __getCurrentUrl())
			array_push($tmp, TRUE);
		else
			array_push($tmp, FALSE);
	}
	
	if (in_array(TRUE, $tmp)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function __find_all_thread( $menu_name ) {
	
	if ( ($locations = get_nav_menu_locations()) AND (isset( $locations[$menu_name] )) ) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
	
		return __do_thread( $menu_items, 0 );
	}
}

function __do_thread( $data, $root ) {
	$out 	= array();
	$sizeOf = sizeof( $data );
	
	for ($i = 0; $i < $sizeOf; $i++) {
				
		if ( ($data[$i]->menu_item_parent == $root) || (($root === NULL) && ($data[$i]->menu_item_parent == 0)) ) {
			$tmp = $data[$i];
	
			if ( isset($data[$i]->ID) ) {
				$tmp->children = __do_thread( $data, $data[$i]->ID );
			} else {
				$tmp->children = NULL;
			}
			$out[] = $tmp;
		}
	}
	return $out;
}

/**
 * Mendapatkan url sekarang yang sedang dibuka
 * @return string url
 */
function __getCurrentUrl() {
	$protocol 	= (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$url		= $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
	
	return $protocol . $url;
}

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
 * Get Meta ID from Meta Key
 * */
function perbanas_get_metaid_by_key( $post_id, $meta_key ) {
	global $wpdb;
	$mid = $wpdb->get_var( $wpdb->prepare("SELECT meta_id FROM $wpdb->postmeta WHERE post_id = %d AND meta_key = %s", $post_id, $meta_key) );
	if( $mid != '' )
		return (int)$mid;

	return false;
}
function perbanas_get_metaval_by_id( $meta_id ) {
	global $wpdb;
	$mval = $wpdb->get_row( "SELECT meta_value FROM $wpdb->postmeta WHERE meta_id = $meta_id" );
	if( $mval != '' )
		return $mval->meta_value;

	return false;
}
