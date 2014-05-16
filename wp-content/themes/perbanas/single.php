<div class="row">
	<div class="col-md-12">
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