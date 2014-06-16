
<div class="wrapper">
	<div class="row footer">
		<div class="col-sm-12 block">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 block footer-A">
						<br class="visible-sm visible-md visible-lg" /> <span
							class="footer-B">Our partners</span> 
							
							<a href="http://www.bi.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-bi.jpg" />
							</a>
							<a href="http://www.ojk.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-ojk.jpg" />
							</a>
							<a href="#" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-3p.jpg" />
							</a>
							<a href="http://www.lps.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-lps.jpg" />
							</a>
					</div>
					<div class="col-sm-6 block footer-right">
						<div>
							<ul>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-twitter.png" /></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-facebook.png" /></a></li>
							</ul>
						</div>
						<?php echo perbanas_footer_menu('extra-menu', 'bottomMenu'); ?>
						<div>&copy; 2014 Perbanas. All rights reserved.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>
<script>
	$(document).ready(function(){
		page_general_init();
		
		<?php if ( get_post_type() == 'regionalboard' ) :?>
		page_regional_board_single_init();
		<?php endif; ?>

		<?php if( is_page('who-we-are') ) :?>
		page_about_who_we_are_init();
		<?php endif;?>
	});

	<?php if( is_page('contact') || is_page('kontak') ): ?>
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', initGoogleMaps);
	<?php endif; ?>
</script>

</script>
</body>
</html>
