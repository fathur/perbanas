<?php 

$menu_post_type = 'events'; // Karena sector merupakan bagian dari menu council

get_header(); ?>

<!--
http://localhost/perbanas/sector/

Daftar nama-nama sektor seperti 
Organization Sektor
RnD Sektor
dll
-->

<div class="row">
	<div class="col-md-4">
		<?php // echo get_post_type(); 
		
		wp_nav_menu( array(
			'theme_location'  => $menu_post_type . '-menu'
		) );
		?>
	</div>
	<div class="col-md-8">
	<?php 
	
	$args = array(
		'post_type' => get_post_type()
	);
	$query = new WP_Query( $args );

	// The Loop
	if ( $query->have_posts() ) {
		echo '<ul>';
		while ( $query->have_posts() ) {
			$query->the_post(); 
			$unixdate	= get_post_meta( get_the_ID(), 'wpcf-event-date', TRUE);
			?>
			<li>
				<h1><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
				<?php echo get_the_content();?>
				<?php echo get_the_post_thumbnail(); ?>
				<table class="table table-bordered table-condensed">
					<tr>
						<td>Hari</td>
						<td><?php echo date('l', $unixdate)?></td>
					</tr>
					<tr>
						
						<td>Tanggal</td>
						<td>
							<?php 
							
							echo date('j F Y', $unixdate); 

							?>
						</td>
					</tr>
					<tr>
						<td>Waktu</td>
						<td><?php echo get_post_meta( get_the_ID(), 'wpcf-event-range-time', TRUE) ; ?></td>
					</tr>
					<tr>
						<td>Tempat</td>
						<td><?php echo get_post_meta( get_the_ID(), 'wpcf-event-location', TRUE) ; ?></td>
					</tr>
				</table>
			</li>

			<?php
		}
		echo '</ul>';
	} else {
		// no posts found
	}
	/* Restore original Post Data */
	wp_reset_postdata();

    ?> 
	</div>
</div>

<?php get_footer(); ?>