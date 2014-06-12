<?php

$action = $_GET['action'];

if ('download' == $action) {
	$id_pm = (int)$_GET['id'];
	
	
	while ( have_posts() ) : the_post();
	
	$meta_value = perbanas_get_metaval_by_id( $id_pm );
	
	$file_location = $meta_value;
	$filename = basename($file_location);
	
	
	header("Content-disposition: attachment; filename=$filename");
	header("Content-type: application/pdf");
	readfile($file_location);
	
	endwhile;
} elseif ('read' == $action) {
	get_template_part('news','magazine');
}






?>