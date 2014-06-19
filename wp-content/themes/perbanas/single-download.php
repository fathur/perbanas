<?php 

/**
 * Melakukan proses download 
 * 
 * */

$id_pm = intval( $_GET['id'] );

while ( have_posts() ) : the_post();

	$file_location 	= perbanas_get_metaval_by_id( $id_pm );
	$filename 		= basename($file_location);
	
	header("Content-disposition: attachment; filename=$filename");
	header("Content-type: application/pdf");
	
	readfile($file_location); 
	
endwhile; ?>