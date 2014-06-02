<?php
add_theme_support( 'post-thumbnails' );

/**
 * Registering style and javascript in wordpress
 */
function perbanas_cssjs() {

	if ( !is_admin()) {

		wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
		wp_enqueue_style('font-open-sans', get_template_directory_uri() . '/css/font-open-sans.css');
		wp_enqueue_style('flex-height', get_template_directory_uri() . '/css/flex-height.css');
		wp_enqueue_style('perbanas', get_template_directory_uri() . '/css/perbanas.css');

		wp_enqueue_script('jquery-1.11.1', get_template_directory_uri() . '/js/jquery.min.js',array(),'1.11.1',TRUE);
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',array(),'1.3.1',TRUE);
		wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.min.js',array(),'',TRUE);
		wp_enqueue_script('function', get_template_directory_uri() . '/js/functions.js',array(),'',TRUE);
		wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js',array(),'',TRUE);

		// Add script for contact page
		if ( is_page('contact') || is_page('kontak') ) {
			wp_enqueue_script('contact-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false',array(),'',TRUE);
		}
	}
}
add_action('wp_enqueue_scripts','perbanas_cssjs');

/**
 * Registering menu in admin panel
 */
function perbanas_register_menu() {
	register_nav_menus( array(
		'header-menu' 	=> 'Header Menu',
		'extra-menu' 	=> 'Footer Menu',
		'council-menu'	=> 'Council Menu',
		'events-menu'	=> 'Events Menu',
		'member-bank-menu'	=> 'Member Bank Menu'
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

function perbanas_side_menu( $menu_name ) {
	
	if ( ($locations = get_nav_menu_locations()) AND (isset( $locations[$menu_name] )) ) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);
	
		print_r($menu_items);
	
	}
	
	// return $generated_menu;
}

function __generate_menu( $id = 'menu' ) {
	$menus = __find_all_thread();
	
	if ( $menus && count( $menus ) > 0 ) {
		$list_menus = "<ul id=\"$id\">";
	
		foreach ( $menus as $menu ) {
			// if current top menu has children
			if ( $this->__has_child( $menu['children'] ) ) {
				// 1st li or top parent
				$list_menus .= "<li class='rootnav'><a href='#' id='m" . $menu['id'] . "' class='menuais' title='" . $menu['name'] . "'>" . $menu['name'] . "</a>";
				$this->__generate_child_menu( $menu['children'], $list_menus,0 );
			} else {
				$list_menus .= "<li><a href='" . $menu['path'] ."' title='" . $menu['name'] . "' >" . $menu['name'] . "</a>";
			}
	
			$list_menus .= "</li>";
		}
	
		return $list_menus . "</ul>";
	}
}

function __generate_child_menu( &$menus, &$list_menus, $level ) {
	
	/* $CIPATH = $this->config->item('base_url')."/index.php";
	$AISPATH = $this->config->item('base_url_ais'); */
	
	$list_menus .= "<ul>";
	
	foreach ( $menus as $menu ) {
	
		// if child has children, iterate its childs!!
		if ( $this->__has_child( $menu['children'] ) ) {
	
			// first output its child parent
			$list_menus .= "<li class='subnav$level haschild close'><a href='#' title='" . $menu['name'] . "'>" .
					$menu['name'] . "</a>";
			// generate again
			$this->__generate_child_menu( $menu['children'], $list_menus,$level+1);
	
		} else {
			if($menu['class']=='menu-ais'){
				$href = $CIPATH . $menu['path'];
			}else{
				$href = $AISPATH . $menu['path'];
			}
			$list_menus .= "<li class='subnav$level nohaschild'><a href='" . $href . "' title='" . $menu['name'] . "' class='" . $menu['class'] . "' >" .
					$menu['name'] . "</a>";
		}
		$list_menus .= "</li>";
	}
	
	$list_menus .= "</ul>";
}

function __has_child( $child ) {
	
	if ( $child AND count($child) ) {
		return TRUE;
	}
	
	return FALSE;
}

function __find_all_thread() {
	
}

function __do_thread( $data, $root ) {
	$out 	= array();
	$sizeOf = sizeof( $data );
	
	for ($ii = 0; $ii < $sizeOf; $ii++) {
		
		if (($data[$ii]['menu_item_parent'] == $root) || (($root === NULL) && ($data[$ii]['menu_item_parent'] == '0'))) {
			$tmp = $data[$ii];
	
			if (isset($data[$ii]['id'])) {
				$tmp['children'] = $this->__do_thread($data, $data[$ii]['ID']);
			} else {
				$tmp['children'] = NULL;
			}
	
			$out[] = $tmp;
		}
	}
	
	return $out;
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

