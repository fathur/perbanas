<?php 
$menu_post_type = 'events'; // Karena sector merupakan bagian dari menu council

get_header(); ?>

<!--
http://localhost/perbanas/sector/

Daftar nama-nama sektor seperti 
Organization Sektor
RnD Sektor
dll
-->

<div class="row">
	<div class="col-md-4">
		<?php // echo get_post_type(); 
		
		wp_nav_menu( array(
			'theme_location'  => $menu_post_type . '-menu'
		) );
		?>
	</div>
	<div class="col-md-8">
	<?php 
	
	$args = array(
		'post_type' => get_post_type()
	);
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		echo '<ul>';
		while ( $query->have_posts() ) {
			$query->the_post();
			echo '<li><a href="'.get_permalink().'">' . get_the_title() . '</a></li>';
		}
		echo '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

    ?> 
	</div>
</div>

<?php get_footer(); ?>