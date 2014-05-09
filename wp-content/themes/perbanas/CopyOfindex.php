<?php get_header(); ?>
		
		<!-- Slider -->
		<div>
		
		</div>
		
		<!-- Latest -->
		<div>
		<h1>Latest News</h1>
		<?php 

		
		/* print_r(get_posts(array(
			'posts_per_page'	=> 10,
			'category'			=> 4
		)));
		
		print_r(get_posts(array(
			'posts_per_page'	=> 4,
			'category'			=> 1
		)));
		
		query_posts('cat=4');
		while (have_posts()) : the_post();
			the_title('<h1 class="entry-title">', '</h1>' );
			the_content();
		endwhile;  */
		
		$news = new WP_Query( array(
			'post_type'	=> 'news',
			'posts_per_page' => 4
		));
		
		if ($news->have_posts()) {
			
			while ($news->have_posts()) {
				$news->the_post();
				echo '<h2>'.get_the_title()."</h2>";
				echo "<p>".get_the_content() . "</p>";
				
			}
		}
		
		wp_reset_postdata();
		
		?>
		</div>
		
		<!-- Photos -->
		<div>
		<h1>Latest Photos</h1>
		<?php 
		$news = new WP_Query( array(
			'post_type'	=> 'photos',
			'posts_per_page' => 4
		));
		
		if ($news->have_posts()) {
			
			while ($news->have_posts()) {
				$news->the_post();
				echo '<h2>'.get_the_title()."</h2>";
				echo "<p>".get_the_content() . "</p>";
				
			}
		}
		
		wp_reset_postdata();
		
		?>
		</div>
		
		<!-- Event -->
		<div>
		<h1>Latest Event</h1>
		<?php 
		$news = new WP_Query( array(
			'post_type'	=> 'events',
			'posts_per_page' => 4
		));
		
		if ($news->have_posts()) {
			
			while ($news->have_posts()) {
				$news->the_post();
				echo '<h2>'.get_the_title()."</h2>";
				echo "<p>".get_the_content() . "</p>";
				
			}
		}
		
		wp_reset_postdata();
		
		?>
		</div>
		
<?php get_footer() ?>