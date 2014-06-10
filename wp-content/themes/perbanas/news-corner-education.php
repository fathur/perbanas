<?php 
$taxonomy       = 'subperbanascorner';

wp_reset_query();
	
$args = array('post_type' => get_post_type(),
	'tax_query' => array(
		array(
			'taxonomy'  => $taxonomy,
			'field'     => 'slug',
			'terms'     => get_query_var( $wp_query->query_vars['taxonomy'] )
		),
	),
);
	
$loop = new WP_Query($args);
	
if( $loop->have_posts() ) :
while($loop->have_posts()) : $loop->the_post();

?>

<div class="row perbanas-corner-education-item">
	<div class="col-xs-12">
		<div class="perbanas-corner-education-desc-top">
			<h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
			<p class="date"><?php echo get_the_date(); ?></p>
			<p class="desc"><?php echo get_the_content('...'); ?></p>
		</div>
		<div class="perbanas-corner-education-desc-bottom">
			<a href="<?php echo get_permalink(); ?>" class="btn">Read more <span class="arrow">&rang;</span></a>
		</div>
	</div>
</div>
<hr />

<?php 

endwhile;
endif; 

?>