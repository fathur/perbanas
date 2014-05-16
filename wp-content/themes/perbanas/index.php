<?php get_header(); ?>	
	<div class="container">
		
		<!-- Latest News  -->
		<?php get_template_part( 'front', 'news' ); ?>
		
		<!-- Latest Photos  -->
		<?php get_template_part( 'front', 'photos' ); ?>
		
		<!-- Latest Event  -->		
		<?php get_template_part( 'front', 'events' ); ?>
		
		<!-- Latest Magazines -->
		<?php get_template_part( 'front', 'magazines' ); ?>
		
	</div>
<?php get_footer(); ?>