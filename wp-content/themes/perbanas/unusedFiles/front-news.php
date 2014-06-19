<?php 
$news = new WP_Query(
	array(
		'post_type'	=> 'news',
		'posts_per_page' => 4
));
?>

<div class="row">
	<div class="col-md-12">
		<h1>Latest News</h1>
	</div>
	<?php 
	while ( $news->have_posts() ) : 
		$news->the_post();
	?>
	
	<div class="col-md-6">
		<h3><?php echo get_the_title(); ?></h3>
		<?php 
		if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		  echo the_post_thumbnail();
		} ?>
		<p><?php echo get_the_content(); ?></p>
		<p><?php echo get_the_date(); ?></p>
		<span><a href="<?php the_permalink(); ?>">Readmore</a></span>
	</div>
	
	<?php 
	endwhile;
	wp_reset_postdata();
	?>
	
</div>