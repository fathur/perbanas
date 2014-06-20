<?php 

/**
 * Template untuk halaman home
 * 
 * Berisi slider, news, gallery, magazine, upcoming event
 * dan member bank
 * 
 * */

get_header(); ?>

<div class="wrapper top-margin">
	<div class="row slider homepage-slider">
		<div id="featured-slider" class="carousel slide">
			<div class="carousel-inner">
			
	        <?php 
			/**
			 * Menampilkan slider / carousel
			 * =============================
			 * */        								
		
			$loop = new WP_Query(array(
				'post_type' => 'carousel',
				'posts_per_page' => 3
			));
					
			if( $loop->have_posts() ) :
			
				$i = 0; // Inisialisasi var loop
			
				while($loop->have_posts()) : $loop->the_post();
			
					$thumb_id	= get_post_thumbnail_id();
					$thumb_url	= wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

					// Untuk menentukan slider yang aktif pertama kali
					// Dipilih dua karena 1 mengakibarkan bernilai true sehingga semua slider aktif semua
					// 0 bernilai salah sehingga semua slider tidak ada yang aktif
					if ('2' == $i) { $active = 'active'; } ?>
					
				<div class="col-xs-12 block slider-background item <?php echo $active; ?>" style="background-image: url('<?php echo $thumb_url[0]; ?>'); background-size: cover; background-position: center center;">
					<div class="container">
					    <div class="row slider-content">
					        <div class="col-xs-12 block slider-content-text">
					            <h1>
					               <?php the_title(); ?>
					            </h1>
					        </div>
					    </div>
					</div>
				</div>
                    
			<?php $i++;
				endwhile;
			else:
				get_template_part( 'content', 'none' );
			endif;
			
			/* Restore to originial query */
			wp_reset_query();
			/* Restore original Post Data */
			wp_reset_postdata(); ?>
                    
			</div>
                
			<div class="col-xs-12">
				<div class="container slider-pager">
					<div class="slider-pager-border"></div>
						<ol class="carousel-indicators">
			
			<?php $loop = new WP_Query(array(
					'post_type' => 'carousel',
					'posts_per_page' => 3
				));
				
				if( $loop->have_posts() ) :
				
					$j = 0;
				
					while($loop->have_posts()) : $loop->the_post();											

						if ('2' == $j) { $activex = 'active'; } ?>
						
							<li data-target="#featured-slider" data-slide-to="<?php echo $j; ?>" class="<?php echo $activex; ?>">
								<span class="page-number"><span class="offset-container"><?php echo $j+1; ?></span></span>
							</li>
					
				<?php $j++;
					endwhile;
				else:
					get_template_part( 'content', 'none' );
				endif;
				
				/* Restore to originial query */
				wp_reset_query();
				/* Restore original Post Data */
				wp_reset_postdata(); ?>
				
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 block section-title">
                <h1>
                    <div></div><span><?php _e('Latest News','perbanas'); ?></span>
                </h1>
            </div>
        </div>
        <div class="row homepage-news">

        <?php 

		/**
		 * Menampilkan news
		 * ================
		 * 
		 * */
		

		$loop = new WP_Query(array(
			'post_type' => 'news',
			'posts_per_page' => 4
		));
		
		if( $loop->have_posts() ) :
			while($loop->have_posts()) : $loop->the_post();
		?>
		
			<div class="col-xs-12 col-md-6 block homepage-news-item">
				<div class="row">
					<div class="col-md-6">
					
					<?php if (has_post_thumbnail()) {
						
						the_post_thumbnail(array(750,486, true),array('class' => "img-responsive"));
						
					} else { ?>					
						<img src="<?php echo get_template_directory_uri(); ?>/img/no-news-picture.jpg" class="img-responsive" width="720" height="720" />
					<?php } ?>
                    	
                    </div>
                    
					<div class="col-md-6">
                        <div class="homepage-news-desc-top">
                            <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                            <p class="date"><?php echo get_the_date(); ?></p>
                        </div>
                        <div class="homepage-news-desc-bottom">
                            <a href="<?php echo get_permalink(); ?>" class="btn"><?php _e('Read more','perbanas'); ?> <span class="arrow">&rang;</span></a>
                        </div>
                    </div>
                </div>
            </div>
			<?php endwhile;
			else:
				get_template_part( 'content', 'none' );
			endif; 
				
			/* Restore to originial query */
			wp_reset_query();
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
        </div>
        
        <div class="row section-title">
            <div class="col-xs-12 block">
                <h1><div></div><span><?php _e('Latest Photos','perbanas'); ?></span></h1>
            </div>
        </div>
        
        <div class="row homepage-gallery">
        	<?php 
			/**
			 * Gallery home page
			 * =================
			 * */

			$loop = new WP_Query(array(
				'post_type' => 'photogallery',
				'posts_per_page' => 4
			));
			
			if( $loop->have_posts() ) :
				while($loop->have_posts()) : $loop->the_post(); ?>
				
            <div class="col-xs-12 col-md-6 col-md-3 block">
            
            	<a href="<?php echo get_permalink(); ?>">
                 <?php the_post_thumbnail(array(750, 500),array('class' => "img-responsive",)); ?>
                </a>
                
                <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <p class="date"><?php echo get_the_date(); ?></p>
            </div>
            
			<?php endwhile;
			endif; 
				
			/* Restore to originial query */
			wp_reset_query();
			/* Restore original Post Data */
			wp_reset_postdata(); ?>
           
        </div>
        
        <div class="row">
            <div class="col-sm-6 block">
                <div class="row section-title homepage-probank-title">
                    <div class="col-sm-12">
                        <h1><div></div><span>Probank <span class="hidden-sm">Magazine</span></span></h1>
                    </div>
                </div>
                
			<?php 
			/**
			 * Probank magazine
			 * ================
			 * */
			
			$loop = new WP_Query(array(
				'post_type' => 'probankmagazine',
				'posts_per_page' => 1
			));
			
			if( $loop->have_posts() ) :
				while($loop->have_posts()) : $loop->the_post(); ?>
				
                <div class="row homepage-probank">
                    <div class="col-xs-6 col-md-4 homepage-probank-image-container">
                    
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('large',array('class' => 'img-responsive'));
					} else { ?>
						<img width="161" height="214" src="<?php echo get_template_directory_uri(); ?>/img/probank-magazine-01-05.png" class="img-responsive wp-post-image" alt="magazine">
					<?php } ?>
						
						<p class="text-center">
							<?php echo get_post_meta( get_the_ID(), 'wpcf-magazine-edition', TRUE) ; ?>
						</p>
					</div>
                    <div class="col-xs-6 col-md-8">
                        <p class="homepage-probank-desc-top"><?php echo get_the_content('...'); ?></p>
                        <p><a href="<?php echo get_post_type_archive_link('probankmagazine'); ?>" class="btn">View more <span class="arrow">&rang;</span></a></p>
                    </div>
                </div>
                
			<?php endwhile;
			endif; 
			
			/* Restore to originial query */
			wp_reset_query();
			/* Restore original Post Data */
			wp_reset_postdata(); ?>
			
            </div>
            
            <div class="col-sm-6 block">
                <div class="row section-title homepage-events-title">
                    <div class="col-sm-12">
                        <h1><div></div><span><?php _e('Upcoming Events','perbanas'); ?></span></h1>
                    </div>
                </div>
                <div class="row homepage-events">
				
				<?php 
				/**
				 * Upcoming event
				 * ==============
				 * 
				 * */
				$query = new WP_Query( array(
					'post_type' => 'upcomingevent',
					'posts_per_page' => 2 ) );
				
				if ( $query->have_posts() ) :					
					while ( $query->have_posts() ) : $query->the_post();
				 
						$unixdate	= get_post_meta( get_the_ID(), 'wpcf-event-date', TRUE); ?>
					
                    <div class="col-sm-12">
                        <div class="row item">
                            <div class="col-xs-2 col-sm-1 item-calendar">
                                <p class="month"><?php echo date('M', $unixdate)?></p>
                                <p class="date"><?php echo date('d', $unixdate)?></p>
                            </div>
                            <div class="col-xs-10 col-sm-11">
                                <h3><a href="<?php echo get_post_type_archive_link('upcomingevent'); ?>"><?php echo get_the_title(); ?></a></h3>
                                <p class="desc">
                                   <?php echo get_post_meta( get_the_ID(), 'wpcf-event-range-time', TRUE) ; ?><br />
                                   <?php echo get_post_meta( get_the_ID(), 'wpcf-event-location', TRUE) ; ?>
                                </p>
                            </div>
                            <div class="col-xs-12">
                                <div class="separator"></div>
                            </div>
                        </div>
                    </div>
				<?php endwhile;
				else:
					get_template_part( 'content', 'none' );
				endif;
	
				/* Restore to originial query */
				wp_reset_query();
				/* Restore original Post Data */
				wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        <div class="row section-title">
            <div class="col-xs-12 block">
                <h1><div></div><span>Our Members</span></h1>
            </div>
        </div>
        <div class="row">
            <div id="partner-slider" class="col-xs-12 block carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_bii.jpg" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_bri.gif" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                            	<div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_btn.jpg" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_danamon.jpg" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_mandiri.gif" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/Logo_bni.gif" /></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_bii.jpg" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_bri.gif" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer"><div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_btn.jpg" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_danamon.jpg" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/logo_mandiri.gif" /></div>
                            </div>
                            <div class="col-sm-2 col-xs-4 partner-logo-outer">
                                <div class="partner-logo"><img class="img-responsive" src="<?=get_template_directory_uri()?>/img/Logo_bni.gif" /></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
<?php get_footer(); ?>