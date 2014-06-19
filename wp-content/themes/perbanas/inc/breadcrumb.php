<?php


function perbanas_breadcrumb_council( $trail ) {
	if (get_post_type() == 'sector') {
		//array_pop($trail->trail);
		//print_r($trail->trail);
	}
}
add_action('bcn_after_fill','perbanas_breadcrumb_council');