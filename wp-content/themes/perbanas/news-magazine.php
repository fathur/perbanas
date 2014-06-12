
<html>
	<head>
		<style>
		body {
			margin: 0px;
		}
		
		#iframe {
			border:none;width:100%;height:100%;
		}
		</style>
	</head>
	<body>
	<?php
		$id_pm = (int)$_GET['id'];
	
	
		while ( have_posts() ) : the_post();
		
		$meta_value = perbanas_get_metaval_by_id( $id_pm );
		
		$file_location = $meta_value;
		?>
		<iframe id="iframe" src="<?php echo get_option('siteurl'); ?>/wp-content/plugins/pdfjs-viewer-shortcode/web/viewer.php?file=<?php echo $file_location; ?>"></iframe>
		<?php 
	
		
		endwhile;
	?>
		
	</body>
</html>

