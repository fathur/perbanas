<?php 
/**
Menampilkan post type council saja
*/
get_header(); ?>

<div class="row">
	<div class="col-md-4">
		<?php // echo get_post_type(); 
		wp_nav_menu( array(
 			'theme_location'  => get_post_type() . '-menu'
 			//'menu' => 'council-menu'
 		) ); 
		?>
	</div>
	<div class="col-md-8">
		<p>Diisi apa?</p>
	</div>
</div>

<?php get_footer(); ?>