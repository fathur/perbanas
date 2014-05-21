<?php get_header(); ?>	



	<?php 
	if ( is_front_page() ):
		?>
		<!-- Latest News  -->
		<?php // get_template_part( 'front', 'news' ); ?>
		
		<!-- Latest Photos  -->
		<?php // get_template_part( 'front', 'photos' ); ?>
		
		<!-- Latest Event  -->		
		<?php // get_template_part( 'front', 'events' ); ?>
		
		<!-- Latest Magazines -->
		<?php // get_template_part( 'front', 'magazines' ); ?>
	<?php else:
	?>

<div class="row">
	<div class="col-md-4">

 		<?php 
 	//	echo get_post_type();
 		/*wp_list_categories( array(
 			'taxonomy' => "sub-" . get_post_type(),
 			'hide_empty' => 0,
 			'depth'	=> 2
 		) ); */


 		wp_nav_menu( array(
 			'theme_location'  => get_post_type() . '-menu'
 			//'menu' => 'council-menu'
 		) ); ?>
	</div>
	<div class="col-md-8">
	<?php 
	echo single_cat_title('',TRUE);
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() ); 
		endwhile;
	else:
		get_template_part( 'content', 'none' ); 
	endif; // End if have_posts()
	?>
	</div>
</div>	

	<?php 	
	endif; // End if is front page
	?>
<?php get_footer(); ?>