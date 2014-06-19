<?php

if ( is_single() ) :
	the_title( '<h1 class="entry-title">', '</h1>' );
else :
	the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
endif;

the_content();

if ( has_post_thumbnail() ) {

	the_post_thumbnail();

} else { ?>

	<img src="<?php echo get_template_directory_uri(); ?>/img/no-event.jpg">

<?php } ?>

$unixdate	= get_post_meta( get_the_ID(), 'wpcf-event-date', TRUE);

?>

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
	
