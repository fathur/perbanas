<?php

$taxonomy 			= 'subcouncil';

$current_term 		= get_term_by( 'name', single_term_title('',FALSE), $taxonomy);
$current_term_slug 	= $current_term->slug;
$current_term_id	= $current_term->term_id;

get_header();

if ( $current_term_slug == 'sectors' ) {

	$term_by 		= get_term_by( 'slug', $current_term_slug, $taxonomy ) ; 
	$term_children 	= get_term_children( $term_by->term_id, $taxonomy);
?>
<div class="row">
	<div class="col-md-4">
		<?php wp_nav_menu( array(
 			'theme_location'  => get_post_type() . '-menu'
 		) ); ?>
	</div>
	<div class="col-md-8">
		<ul>
<?php
	// begin foreach term children
	foreach ($term_children as $child) {
		
		$s = get_term_by( 'id', $child, $taxonomy );
		//print_r($s);
		echo "<li>".$s->name."</li>";

	} // end foreach term children
?>
		</ul>
	</div>
</div>
<?php
} // end if current term slug = sectors

get_footer();