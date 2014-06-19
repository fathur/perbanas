<?php get_header(); ?>
<div class="row">
	<div class="col-md-4">
		<?php // echo get_post_type(); 
		
		wp_nav_menu( array(
			'theme_location'  => get_post_type() . '-menu'
		) );
		?>
	</div>
	<div class="col-md-8">
		<?php 
		while ( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_format() );
			
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			
		endwhile;		
		?>
	</div>
</div>
<?php get_footer(); ?>