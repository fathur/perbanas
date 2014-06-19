<?php 

/**
 * Template untuk menampilkan daftar artikel dari Perbanas Corner FAQ.
 *
 * @author Fostrom
 *
 * */
	
$args = array('post_type' => get_post_type(),
	'tax_query' => array(
		array(
			'taxonomy'  => 'subperbanascorner',
			'field'     => 'slug',
			'terms'     => get_query_var( $wp_query->query_vars['taxonomy'] )
		),
	),
);
	
$loop = new WP_Query($args);
	
if( $loop->have_posts() ) :
	while($loop->have_posts()) : $loop->the_post();

	// Inisialisasi increment 
	$i = 1;
?>

<div class="row item">
	<div class="col-xs-12 accordion" id="event-id-<?php echo $i; ?>">
		<div class="accordion-group">
			<div class="accordion-heading">
				<h2>
					<a class="accordion-toggle event-upcoming-toggle-description-js" data-toggle="collapse" data-parent="#event-id-<?php echo $i; ?>" href="#event-id-<?php echo $i; ?>-body">
						<?php echo get_the_title(); ?>
					</a>
				</h2>
			</div>
			<div class="accordion-body collapse" id="event-id-<?php echo $i; ?>-body">
				<div class="accordion-inner">
					<p><?php echo get_the_content(); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $i++; // Incrementing
	endwhile;
endif; ?>