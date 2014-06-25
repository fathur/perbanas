<?php 

/**
 * Template untuk menampilkan daftar artikel dari Perbanas Corner Education.
 *
 * @author Fostrom
 *
 * */

$loop = new WP_Query(array('post_type' => get_post_type(),
	'posts_per_page'	=> get_option('posts_per_page'),
	'paged'				=> get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
	'tax_query' 		=> array(
		array(
			'taxonomy'  => 'subperbanascorner',
			'field'     => 'slug',
			'terms'     => get_query_var( $wp_query->query_vars['taxonomy'] )
		),
	),
));

// Pagination fix
$temp_query = $wp_query;
$wp_query   = NULL;
$wp_query   = $loop;

if( $loop->have_posts() ) :
	while($loop->have_posts()) : $loop->the_post(); ?>

<div class="row perbanas-corner-education-item">
	<div class="col-xs-12">
		<div class="perbanas-corner-education-desc-top">
			<h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
			<p class="date"><?php echo get_the_date(); ?></p>
			<p class="desc"><?php echo get_the_excerpt(''); ?></p>
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
wp_reset_postdata(); 

// Custom query loop pagination
echo paginate_links(array(
	'base'		=> get_term_link( $term, $taxonomy ) .'page/%#%',
	'total'		=> $loop->max_num_pages,
	'current'	=> get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1
));

// Reset main query object
$wp_query = NULL;
$wp_query = $temp_query;?>