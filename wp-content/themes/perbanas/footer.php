
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
						&nbsp;<br class="visible-sm visible-md visible-lg" /> 
							<span class="footer-B"><?php _e('Our partners','perbanas'); ?></span> 
							
							<a href="http://www.bi.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-bi.jpg" />
							</a>
							<a href="http://www.ojk.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-ojk.jpg" />
							</a>
							<a href="http://www.ppatk.go.id" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-ppatk.png" />
							</a>
							<a href="http://www.lps.go.id/" target="__blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/footer-lps.jpg" />
							</a>

							&nbsp;<span class="footer-B"> <a href="<?php echo get_permalink( get_page_by_title( 'Affiliations' ) )?>"> <?php _e('See more','perbanas'); ?></a></span> 

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
	/**
	 * @param  {boolean} expand
	 * @param  {string} paddingNarrow
	 * @param  {string} paddingWide
	 */
	function adjustNavbar (expand, paddingNarrow, paddingWide) {

		var value = (expand == true) ? paddingNarrow : paddingWide;

		if (expand) {
			$('#navbar-main .navbar-main-scrolled-menu-logo').fadeIn();
		} else {
			$('#navbar-main .navbar-main-scrolled-menu-logo').fadeOut();
		}

		$('#navbar-main li.first').animate({
			'padding-right': value
		},
		'fast', 'swing', function() {
			if (!expand) {
				$('#navbar-main li.first').css('padding-right', '');
			}
		});

		$('#navbar-main li.last').animate({
			'padding-left': value
		}, 'fast', 'swing', function() {
			if (!expand) {
				$('#navbar-main li.last').css('padding-left', '');
			}
		});

		$('#navbar-main li').not('.first').not('.last').animate({
			'padding-left': value,
			'padding-right': value
		}, 'fast', 'swing', function() {
			if (!expand) {
				$('#navbar-main li').css('padding-left', '');
				$('#navbar-main li').css('padding-right', '');
			}
		});
	}

	var isTresholdReached = false;
	

	/**
	 * Pada saat posisi di atas kemudian 
	 * di resize kanan kiri
	 */
	$(window).resize(function() {
		
		var paddingNarrow, paddingWide,
			$window 		= $(this),
			navbarTreshold 	= 217,					// tinggi header
			windowWidth 	= $window.width() + 15, // 15 untuk menggenapkan kekurangan width
			currentPosition	= $window.scrollTop();	// Menghitung jarak scroll yang telah terjadi

		

		// 1. Pada posisi mobile (< 992) ke md

		if (windowWidth >= 1200) {
			paddingNarrow 	= '40px';
			paddingWide		= '46px';
		} else if (windowWidth >= 992 && windowWidth < 1200) {
			paddingNarrow	= '23px';
			paddingWide		= '30px';
		};

		if (currentPosition < navbarTreshold) {

			$('#navbar-main .navbar-main-scrolled-menu-logo').hide();

			$('#navbar-main li.first').css({
				'padding-right': paddingWide
			});
			$('#navbar-main li.last').css({
				'padding-left': paddingWide
			});
			$('#navbar-main li').not('.first').not('.last').css({
				'padding-right': paddingWide,
				'padding-left': paddingWide
			});

			console.log(paddingWide);

		} else {

			$('#navbar-main .navbar-main-scrolled-menu-logo').show();

			$('#navbar-main li.first').css({
				'padding-right': paddingNarrow
			});
			$('#navbar-main li.last').css({
				'padding-left': paddingNarrow
			});
			$('#navbar-main li').not('.first').not('.last').css({
				'padding-right': paddingNarrow,
				'padding-left': paddingNarrow
			});

		};
		

		// 2.a. Pada posisi md (992 <= x < 1200) ke large
		// 2.b. Pada posisi md ke mobile
		// 3. Pada posisi x >= 1200 ke md

	});
	
	/**
	 * Pada saat posisi di atas kemudian 
	 * di scroll kebawah
	 */
	$(window).scroll(function() {

		var paddingNarrow, paddingWide,
			navbarTreshold 	= 217,					// tinggi header
			$window 		= $(this),
			windowWidth 	= $window.width() + 15, // 15 untuk menggenapkan kekurangan width
			currentPosition	= $window.scrollTop();	// Menghitung jarak scroll yang telah terjadi

		/* 1. Pada posisi mobile < 992 */

		/* 2. Pada posisi 992 <= x < 1200 */
		/* 3. Pada posisi x >= 1200 */

		if (windowWidth >= 1200) {
			paddingNarrow 	= '40px';
			paddingWide		= '46px';
		} else if (windowWidth >= 992 && windowWidth < 1200) {
			paddingNarrow	= '23px';
			paddingWide		= '30px';
		};

		if (currentPosition < navbarTreshold && !isTresholdReached) {
			adjustNavbar(false, paddingNarrow, paddingWide);
			isTresholdReached = !isTresholdReached;
		} else if (currentPosition > navbarTreshold && isTresholdReached) {
			adjustNavbar(true, paddingNarrow, paddingWide);
			isTresholdReached = !isTresholdReached;
		};

		
	});

	/**
	 * Pada saat posisi di tengah kemudian
	 * di resize kanan kiri
	 */
	// 1. Pada posisi mobile (< 992) ke md
	// 2.a. Pada posisi md (992 <= x < 1200) ke large
	// 2.b. Pada posisi md ke mobile
	// 3. Pada posisi x >= 1200 ke md


	/**
	 * Pada saat posisi di tengah kemudian
	 * di scroll keatas kebawah
	 */
	function loadNavbarPosition () {
		var paddingNarrow, paddingWide,
			navbarTreshold 	= 217,					// tinggi header
			$window 		= $(this),
			windowWidth 	= $window.width() + 15, // 15 untuk menggenapkan kekurangan width
			currentPosition	= $window.scrollTop();	// Menghitung jarak scroll yang telah terjadi

		// 1. Pada posisi mobile < 992
		// 2. Pada posisi 992 <= x < 1200
		// 3. Pada posisi x >= 1200

		if (windowWidth >= 1200) {
			paddingNarrow 	= '40px';
			paddingWide		= '46px';
		} else if (windowWidth >= 992 && windowWidth < 1200) {
			paddingNarrow	= '23px';
			paddingWide		= '30px';
		};

		if (currentPosition < navbarTreshold) {
			
			$('#navbar-main .navbar-main-scrolled-menu-logo').hide();

			$('#navbar-main li.first').css({
				'padding-right': paddingWide
			});
			$('#navbar-main li.last').css({
				'padding-left': paddingWide
			});
			$('#navbar-main li').not('.first').not('.last').css({
				'padding-right': paddingWide,
				'padding-left': paddingWide
			});

		} else {
			
			$('#navbar-main .navbar-main-scrolled-menu-logo').show();

			$('#navbar-main li.first').css({
				'padding-right': paddingNarrow
			});
			$('#navbar-main li.last').css({
				'padding-left': paddingNarrow
			});
			$('#navbar-main li').not('.first').not('.last').css({
				'padding-right': paddingNarrow,
				'padding-left': paddingNarrow
			});
		};
	}

	loadNavbarPosition();
	
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
