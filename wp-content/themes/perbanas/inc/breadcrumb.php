<?php

/**
 * Breadcrumb for council
 * 
 * @param bcn_breadcrumb $trail
 * @author Fostrom
 * @author Fathur Rohman
 * 
 */
function perbanas_breadcrumb_council( $trail ) {
	
	if ( get_post_type() == 'sector' || 
		get_post_type() == 'advisoryboard' || 
		get_post_type() == 'supervisoryboard' ||
		get_post_type() == 'regionalboard' ||
		get_post_type() == 'secretariat') {
		
		// Lihat file class.bcn_breadcrumb.php di plugin breadcrumb-navxt
		$element = array( new bcn_breadcrumb( __('Council','perbanas'),'','', get_bloginfo('siteurl') . '/council/sectors/') );
		
		// Menambahkan satu elemen sebelum awal breadcrumb
		// atau sebelum akhir array $trail->trail
		$x = array_slice($trail->trail, 0, count($trail->trail)-1);
		$z = array_slice($trail->trail, count($trail->trail)-1, count($trail->trail));
		$merging = array_merge($x,$element,$z);
		
		// Menterjemahkan tiap2 item yang berupa object protected 
		$new_trail = array();
		foreach ($merging as $item) {
			$translated = __( $item->get_title(), 'perbanas' );
			$item->set_title($translated);
			array_push($new_trail, $item);
		}
		
		$trail->trail = $new_trail;
		
	}
}
add_action('bcn_after_fill','perbanas_breadcrumb_council');


function perbanas_breadcrumb_newsmedia( $trail ) {

	if ( get_post_type() == 'pressrelease' ||
		get_post_type() == 'news' ||
		get_post_type() == 'probankmagazine' ||
		get_post_type() == 'photogallery' ||
		get_post_type() == 'download' ||
		get_post_type() == 'perbanascorner') {

		// Lihat file class.bcn_breadcrumb.php di plugin breadcrumb-navxt
		$element = array( new bcn_breadcrumb( __('News & Media','perbanas'),'','', get_bloginfo('siteurl') . '/newsmedia/news/') );

		$x = array_slice($trail->trail, 0, count($trail->trail)-1);
		$z = array_slice($trail->trail, count($trail->trail)-1, count($trail->trail));
		$merging = array_merge($x,$element,$z);
		
		// Menterjemahkan tiap2 item yang berupa object protected
		$new_trail = array();
		foreach ($merging as $item) {
			$translated = __( $item->get_title(), 'perbanas' );
			$item->set_title($translated);
			array_push($new_trail, $item);
		}
		
		$trail->trail = $new_trail;
	}
}
add_action('bcn_after_fill','perbanas_breadcrumb_newsmedia');