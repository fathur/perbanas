<?php


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

	global $pagename;

	$menu_name = 'header-menu';

	if ( ($locations = get_nav_menu_locations()) AND (isset( $locations[$menu_name] )) ) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		if (is_page()) {
			$args_gpm = $pagename;
		} elseif (get_post_type()) {
			$args_gpm = get_post_type();
		}

		$generated_menu = '<ul class="nav navbar-nav">';

		// First items
		$generated_menu .= '<li class="first">';
		if ( (is_page( $pagename ) || get_post_type() ) AND $menu_items[0]->post_name == __get_postname_menu( $args_gpm )->menu_key ) {
			$generated_menu .= "<a class='hidden-xs hidden-sm' href='".$menu_items[0]->url."'>".$menu_items[0]->title."</a>".
					"<a class='hidden-md hidden-lg dropdown-toggle' data-toggle='dropdown' href='".$menu_items[0]->url."'>".$menu_items[0]->title." <span class='arrow'><img class='hidden-md hidden-lg' src='".get_template_directory_uri()."/img/menu-arrow.png' /></span></a>";
			$generated_menu .= __perbanas_header_mobile_menu( __get_postname_menu( $args_gpm )->location,'hm');
		} else {
			$generated_menu .= '<a href="'.$menu_items[0]->url.'">'.$menu_items[0]->title.'</a>';
		}
		$generated_menu .= '</li>';
			
		// All middle items
		for ($i = 1; $i < count($menu_items)-1; $i++) {
				
			$generated_menu .= '<li>';
			if ( (is_page( $pagename ) || get_post_type() ) AND  $menu_items[$i]->post_name == __get_postname_menu( $args_gpm )->menu_key ) {
				$generated_menu .= "<a class='hidden-xs hidden-sm' href='".$menu_items[$i]->url."'>".$menu_items[$i]->title."</a>".
						"<a class='hidden-md hidden-lg dropdown-toggle' data-toggle='dropdown' href='".$menu_items[$i]->url."'>".$menu_items[$i]->title." <span class='arrow'><img class='hidden-md hidden-lg' src='".get_template_directory_uri()."/img/menu-arrow.png' /></span></a>";
				$generated_menu .= __perbanas_header_mobile_menu( __get_postname_menu( $args_gpm )->location,'hm');
			} else {
				$generated_menu .= '<a href="'.$menu_items[$i]->url.'">'.$menu_items[$i]->title.'</a>';
			}
			$generated_menu .= '</li>';
		}

		// Last item
		$generated_menu .= '<li class="last">';
		if ( (is_page( $pagename ) || get_post_type() ) AND $menu_items[count($menu_items)-1]->post_name == __get_postname_menu( $args_gpm )->menu_key ) {
			$generated_menu .= "<a class='hidden-xs hidden-sm' href='".$menu_items[count($menu_items)-1]->url."'>".$menu_items[count($menu_items)-1]->title."</a>".
					"<a class='hidden-md hidden-lg dropdown-toggle' data-toggle='dropdown' href='".$menu_items[count($menu_items)-1]->url."'>".$menu_items[count($menu_items)-1]->title." <span class='arrow'><img class='hidden-md hidden-lg' src='".get_template_directory_uri()."/img/menu-arrow.png' /></span></a>";
			$generated_menu .= __perbanas_header_mobile_menu( __get_postname_menu( $args_gpm )->location,'hm');
		} else {
			$generated_menu .= '<a href="'.$menu_items[count($menu_items)-1]->url.'">'.$menu_items[count($menu_items)-1]->title.'</a>';
		}
		$generated_menu .= '</li>';

		$generated_menu .= '</ul>';

	}

	return $generated_menu;
}

/**
 * Melakukan asosiasi antara menu utama dengan menu side.
 * array key utama menandakan slug menu name yang tersimpan di database
 * array value dari page adalah halaman2 page yang diasosiasikan dengan menu utama
 * array value dari post_type adalah halaman2 post type yang diasosiasikan dengan menu utama
 * location adalah sesuai dengan lokasi dari funsi perbanas_register_menu()
 *
 */
function __get_postname_menu( $cari ) {

	// Create empty object
	$return = new stdClass();

	// Register assiciated all menu content page, post or whatever here
	$lists_menu_header = array(
			'about-2'	=> array(
					'page'	=> array(
							'who-we-are',
							'how-we-work',
							'what-we-do',
							'lingkup-kerja',
							'kegiatan-perbanas',
							'profil-perbanas'
					),
					'post_type'	=> array(),
					'location'	=> 'about-menu'
			),'council'	=> array(
					'page'	=> array(),
					'post_type'	=> array(
							'sector',
							'regionalboard',
							'advisoryboard',
							'supervisoryboard',
							'boardmember',
							'secretariat'
					),
					'location'	=> 'council-menu'
			),'member-banks'	=> array(
					'page'	=> array(),
					'post_type'	=> array(
							'memberbank'
					),
					'location'	=> 'member-bank-menu'
			),'industry-guidelines'	=> array(
					'page'	=> array(
							'banking-in-indonesia',
							'perbankan-di-indonesia'
					),
					'post_type'	=> array(
							'industryguidelines'
					),
					'location'	=> 'industryguidelines-menu'
			),'events'	=> array(
			'page'	=> array(),
			'post_type'	=> array('upcomingevent','eventseminar'),
			'location'	=> 'events-menu'
					),'news-and-media'	=> array(
					'page'	=> array(),
					'post_type'	=> array(
					'news',
					'pressrelease',
					'probankmagazine',
					'photogallery',
					'download',
					'perbanascorner'
							),
							'location'	=> 'news-menu'
									),'contact'	=> array(
									'page'	=> array(),
									'post_type'	=> array(),
									'location'	=> ''
											)
	);

	// Main search
	foreach ($lists_menu_header as $menu_key => $menu_val) {

		foreach ($menu_val as $key => $val ) {
				
			if ('page' == $key) {

				if (in_array($cari, $val )) {
					$return->menu_key = $menu_key;
					$return->location = $lists_menu_header[$menu_key]['location'];
				}
			}
				
			if ('post_type' == $key) {
				if (in_array($cari, $val )) {
					$return->menu_key = $menu_key;
					$return->location = $lists_menu_header[$menu_key]['location'];
				}
			}
		}
	}

	return $return;
}

/**
 * Sama dengan perbanas_side_menu()
 * @param unknown $menu_name
 * @param unknown $id
 * @return string
 */
function __perbanas_header_mobile_menu( $menu_name, $id) {

	$menus = __find_all_thread( $menu_name );

	if ( $menus && count( $menus ) > 0 ) {

		$list_menus		= "<ul class='hidden-md hidden-lg dropdown-menu' >";

		foreach ( $menus as $menu ) {

			if ( __has_child( $menu->children )) {

				$list_menus .= "<li>";
				$list_menus .= "<a class='hidden-xs hidden-sm' href='".$menu->url."'>".$menu->title."</a>";
				$list_menus .= "<a class='hidden-md hidden-lg dropdown-toggle' data-toggle='dropdown' href='".$menu->url."'>".$menu->title." <span class='arrow'><img class='hidden-md hidden-lg' src='".get_template_directory_uri()."/img/menu-arrow.png' /></span></a>";
				$list_menus .= __generate_child_mobile_menu( $menu->children, $list_menus, 0, $menu->url );
				$list_menus .= "</li>";

			} else {

				$list_menus .= "<li><a href='".$menu->url."'>".$menu->title."</a></li>";
			}
		}
		return $list_menus . "</ul>";
	}
}

function perbanas_side_menu( $menu_name, $id ) {

	$menus = __find_all_thread( $menu_name );

	if ( $menus && count( $menus ) > 0 ) {
		$list_menus = "<div class='accordion' id='$id'>";

		foreach ( $menus as $menu ) {
				
			if ( __formatUrl( $menu->url)  == __formatUrl( __getCurrentUrl() ))
				$class_active	= 'active';
			else
				$class_active	= '';
				
			if ( __has_child( $menu->children )) {

				if ( __have_active_menu( $menu->children ) ) {
					$class_active = 'active';
					$height = 'auto';
					$in	= 'in';
				} else {
					$class_active = '';
					$height = '0px';
					$in	= '';
				}

				$list_menus .= '<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle item '.$class_active.'" data-toggle="collapse" data-parent="#'.$id.'" href="'.$menu->url.'">
								<i class="icon-home"></i> '. __( $menu->title, 'perbanas') .
								'</a>
							<hr class="'.$class_active.'" />
						</div>';
				
				// Mengahapus simbol # (kres) pada string pertama
				$kres = substr($menu->url, 0, 1);
				if ('#' == $kres) $url_collapse = substr($menu->url, 1);

				$list_menus .= '<div id="'.$url_collapse.'" class="accordion-body collapse '.$in.'" style="height: '.$height.'; ">
					<div class="accordion-inner">
						<ul class="list-unstyled" >';
				
				__generate_child_menu( $menu->children, $list_menus, 0, $menu->url );
				
				$list_menus .= "</ul></div></div>";
				
				$list_menus .= '</div>';

			} else {
			
				$list_menus .= '<div class="accordion-group">
						<div class="accordion-heading">
							<a class="item" href="'.$menu->url.'">
								<i class="icon-home"></i> '. __( $menu->title, 'perbanas' ) .
								'</a>
							<hr class="'.$class_active.'" />
						</div></div>';
			}
		}
		return $list_menus . "</div>";
	}
}

function perbanas_footer_menu($menu_name, $id) {
	$menus = __find_all_thread( $menu_name );

	if ( $menus && count( $menus ) > 0 ) {
		$list_menus = "<div class='footer-links' id='$id'>";

		$cnt = count( $menus );

		for ($i = 0; $i < ($cnt -1); $i++) {
			if ( __has_child( $menus[$i]->children )) {
					
				// Do nothing
					
			} else {
					
				$list_menus .= '<a href="'.$menus[$i]->url.'">'. $menus[$i]->title . '</a> | ';
			}
		}

		$list_menus .= '<a href="'.$menus[$cnt-1]->url.'">'. $menus[$cnt-1]->title . '</a>';

		return $list_menus . "</div>";
	}
}

function __generate_child_mobile_menu( &$menus, &$list_menus, $level, &$url_collapse = '' ) {

	// Mengahapus simbol # (kres) pada string pertama
	$kres = substr($url_collapse, 0, 1);
	if ('#' == $kres) $url_collapse = substr($url_collapse, 1);

	$list_menus .= '<ul class="hidden-md hidden-lg dropdown-menu" >';

	foreach ( $menus as $menu ) {

		if ( __has_child( $menu->children ) ) {
				
		} else {
			$list_menus .= '<li><a href="'.$menu->url.'" class="item">'.__( $menu->title, 'perbanas').'</a></li>';
		}
	}

	$list_menus .= "</ul>";
}

function __generate_child_menu( &$menus, &$list_menus, $level, &$url_collapse = '' ) {

	// Mengahapus simbol # (kres) pada string pertama
	$kres = substr($url_collapse, 0, 1);
	if ('#' == $kres) $url_collapse = substr($url_collapse, 1);

	foreach ( $menus as $menu ) {
		
		if ( __formatUrl( $menu->url ) == __formatUrl( __getCurrentUrl() ))
			$class_active	= 'active';
		else
			$class_active	= '';

		/* // if child has children, iterate its childs!!
		 if ( __has_child( $menu->children ) ) 
		// first output its child parent
		$list_menus .= "<li><a href='#' title='" . $menu->title . "'>" .
		$menu->title . "</a>";
		// generate again
		__generate_child_menu( $menu->children, $list_menus,$level+1);
		} else {
		$list_menus .= "<li class='subnav$level nohaschild'>
		<a href='" . $menu->url . "' title='" . $menu->title . "' class='' >" .
		$menu->title .
		"</a>";}
		$list_menus .= "</li>"; */
		
		if (is_page('profil-perbanas') || is_page('who-we-are') ) {
			
			$x_wwa = explode('#',$menu->url);
			
			$menu_url = '#' . $x_wwa[1];
		} else {
			$menu_url = $menu->url;
		}

		$list_menus .= '<li>
				<a href="'.$menu_url.'" class="item">'. __( $menu->title,'perbanas').'</a>
				<hr class="'.$class_active.'" />
			</li>';
	}
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

function __formatUrl( $url ) {
	
	if (strpos($url,'#') !== false) {
		$x_url = explode('#', $url);
		$url	= $x_url[0];
	}
	
	$url = rtrim($url, '/');
	return $url;
}