<?php

if ( is_single() ) :
	the_title( '<h1 class="entry-title">', '</h1>' );
else :
	the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
endif;



the_post_thumbnail();

the_content();

echo get_post_meta( get_the_ID(), 'wpcf-bank-detail', TRUE);

?>