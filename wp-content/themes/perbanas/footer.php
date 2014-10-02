
<div class="wrapper">
	<div class="back-to-top-container visible-lg">
		<a href="#" class="back-to-top btn-fixed-bottom">
			<div class="back-to-top-circle">
			  <span class="back-to-top-arrow-normal">&lsaquo;</span>
			  <span class="back-to-top-arrow-onhover">&lsaquo;</span>
			</div>
		</a>
			<div></div>
		</a>
	</div>
	<div class="row footer">
		<div class="col-sm-12 block">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 block footer-A">
						&nbsp;<br class="visible-sm visible-md visible-lg" /> <span
							class="footer-B"><?php _e('Our partners','perbanas'); ?></span> 
							
							<a href="http://www.bi.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-bi.jpg" />
							</a>
							<a href="http://www.ojk.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-ojk.jpg" />
							</a>
							<a href="http://www.bi.go.id/id/perbankan/arsitektur/Contents/edukasimasyarakat.aspx" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-3p.jpg" />
							</a>
							<a href="http://www.lps.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-lps.jpg" />
							</a>
					</div>
					<div class="col-sm-6 block footer-right">
						<div>
							<ul>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-facebook.png" /></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-twitter.png" /></a></li>
								<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-youtube.png" /></a></li>
							</ul>
						</div>
						<?php echo perbanas_footer_menu('extra-menu', 'bottomMenu'); ?>
						<div><?php _e('&copy; 2014 Perbanas. All rights reserved.','perbanas'); ?></div>
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

		<?php if ( get_post_type() == 'probankmagazine' ) :?>
		page_probank_magazine_init();
		<?php endif; ?>

		<?php if( is_page('who-we-are') || is_page('profil-perbanas')) :?>
		page_about_who_we_are_init();
		<?php endif; ?>

		<?php if (is_tax('subsector') ) : ?>
		page_subsector_single_init();
		<?php endif; ?>

		<?php if (get_post_type() == 'boardmember') : ?>
			page_boardmember_init();
		<?php endif; ?>

		<?php if (get_post_type() == 'advisoryboard') : ?>
			page_advisoryboard_init();
		<?php endif; ?>
		
		<?php if (get_post_type() == 'supervisoryboard') : ?>
			page_supervisoryboard_init();
		<?php endif; ?>

		<?php if (get_post_type() == 'secretariat') : ?>
			page_secretariat_init();
		<?php endif; ?>

	<?php if (get_post_type() == 'photogallery') : ?>
			gallery_photo_list_init();
		<?php endif; ?>


	});

	<?php if( is_page('contact') || is_page('kontak') ): ?>
	// When the window has finished loading create our google map below
	google.maps.event.addDomListener(window, 'load', initGoogleMaps);
	<?php endif; ?>
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52432549-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
