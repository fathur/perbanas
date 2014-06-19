<?php 

/**
 * Template untuk menampilkan daftar artikel dari Perbanas Corner Education.
 *
 * @author Fostrom
 *
 * */

$loop = new WP_Query(array('post_type' => get_post_type(),
	'tax_query' => array(
		array(
			'taxonomy'  => 'subperbanascorner',
			'field'     => 'slug',
			'terms'     => get_query_var( $wp_query->query_vars['taxonomy'] )
		),
	),
));
	
if( $loop->have_posts() ) :
	while($loop->have_posts()) : $loop->the_post(); ?>

<div class="row perbanas-corner-education-item">
	<div class="col-xs-12">
		<div class="perbanas-corner-education-desc-top">
			<h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
			<p class="date"><?php echo get_the_date(); ?></p>
			<p class="desc"><?php echo get_the_content('...'); ?></p>
		</div>
		<div class="perbanas-corner-education-desc-bottom">
			<a href="<?php echo get_permalink(); ?>" class="btn"><?php _e('Read more','perbanas'); ?> <span class="arrow">&rang;</span></a>
		</div>
	</div>
</div>
<hr />

<?php endwhile;
endif; 

/* Restore to originial query */
wp_reset_query();
/* Restore original Post Data */
wp_reset_postdata(); ?>