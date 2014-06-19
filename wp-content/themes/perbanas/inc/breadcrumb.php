<?php

/**
 * Breadcrumb for council
 * @param Obj $trail
 */
function perbanas_breadcrumb_council( $trail ) {
	if (get_post_type() == 'sector') {
		//array_pop($trail->trail);
		//print_r($trail);
	}
}
add_action('bcn_after_fill','perbanas_breadcrumb_council');