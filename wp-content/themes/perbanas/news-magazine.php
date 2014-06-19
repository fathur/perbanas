<?php 
/**
 * Halaman untuk menampilkan pdf reader
 * menggunakan plugin pdf js ala firefox
 * 
 * @author Fostrom
 * 
 * */
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
		
		<style>
		body {
			margin: 0px;
		}
		
		#iframe {
			border:none;
			width:100%;
			height:100%;
		}
		</style>
	</head>
	
	<body>
	<?php

	// Menyaring id supaya hanya mampu menampung integer
	$id_pm = intval( $_GET['id'] );
	
	while ( have_posts() ) : the_post();
		$file_location 	= perbanas_get_metaval_by_id( $id_pm ); ?>
		
		<iframe id="iframe" src="<?php echo get_option('siteurl'); ?>/wp-content/plugins/pdfjs-viewer-shortcode/web/viewer.php?file=<?php echo $file_location; ?>"></iframe>
	
	<?php endwhile; ?>
		
		<script>
		$(document).ready(function(){
			$('#iframe').css('height',$(window).height());
		});
		</script>
	</body>
</html>

