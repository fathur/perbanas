<?php 
			
wp_reset_query();

$args = array(
	'post_type' => get_post_type()
);

$loop = new WP_Query($args);

if( $loop->have_posts() ) :
while($loop->have_posts()) : $loop->the_post();

?>
            
<div class="row press-release-item">
	<div class="col-xs-12">
		<div class="news-desc-top">
			<h2><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
			<p class="date"><?php echo get_the_date(); ?></p>
			<p class="desc"><?php echo get_the_content('...'); ?></p>
		</div>
		
		<div class="news-desc-bottom">
			<a href="<?php echo get_permalink(); ?>" class="btn"><?php _e('Read more','perbanas'); ?> <span class="arrow">&rsaquo;</span></a>
		</div>
	</div>
</div>
<hr />
				
<?php 
endwhile;
endif; 
?>