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
		$element = array( new bcn_breadcrumb('Council','','', get_bloginfo('siteurl') . '/council/sectors/') );
		
		$x = array_slice($trail->trail, 0, count($trail->trail)-1);
		$z = array_slice($trail->trail, count($trail->trail)-1, count($trail->trail));
		$trail->trail = array_merge($x,$element,$z);
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
		$element = array( new bcn_breadcrumb('News and Media','','', get_bloginfo('siteurl') . '/newsmedia/news/') );

		$x = array_slice($trail->trail, 0, count($trail->trail)-1);
		$z = array_slice($trail->trail, count($trail->trail)-1, count($trail->trail));
		$trail->trail = array_merge($x,$element,$z);
	}
}
add_action('bcn_after_fill','perbanas_breadcrumb_newsmedia');