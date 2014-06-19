<?php 
$news = new WP_Query(
	array(
		'post_type'	=> 'events',
		'posts_per_page' => 4
));
?>

<div class="row">
	<div class="col-md-12">
		<h1>Latest Events</h1>
	</div>
	<?php 
	while ( $news->have_posts() ) : 
		$news->the_post();
	?>
	
	<div class="col-md-6">
		<h3><?php echo get_the_title(); ?></h3>
		<span><?php // echo gmdate( 'Y-m-d H:i', get_post_meta( get_the_ID(),'wpcf-date' )); ?></span>
		<p>
		Date begin: <br/>
		<?php 
		$date_begin = get_post_meta( get_the_ID(),'wpcf-date' );
		foreach ($date_begin as $db) {
			echo $db . ' : ' . gmdate('Y-m-d H:i',$db) . '<br/>';
		}
		?>
		</p>
		<p>
		Date end <br/>
		<?php 
		
		$date_end = get_post_meta( get_the_ID(),'wpcf-date-end' );
		foreach ($date_begin as $db) {
			echo $db . ' : ' .gmdate('Y-m-d H:i',$db) . '<br/>';
		}
		?></p>
		<p><?php echo get_the_content(); ?></p>
		<p><?php echo get_the_date(); ?></p>
		<span><a href="<?php the_permalink(); ?>">Readmore</a></span>
	</div>
	
	<?php 
	endwhile;
	wp_reset_postdata();
	?>
	
</div>