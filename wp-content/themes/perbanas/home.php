<?php get_header(); ?>

	<div class="wrapper top-margin">
        <div class="row slider homepage-slider">
            <div id="featured-slider" class="carousel slide">
                <div class="carousel-inner">
	                <?php 
	                								
					$args = array(
						'post_type' => 'carousel',
						'posts_per_page' => 3
					);
					
					$loop = new WP_Query($args);
					
					if( $loop->have_posts() ) :
					
						$i = 0;
					
						while($loop->have_posts()) : $loop->the_post();
					
							$thumb_id = get_post_thumbnail_id();
					
							$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

							if ('2' == $i) {
								$active = 'active';
							}
					?>
					
                    <div class="col-xs-12 block slider-background item <?php echo $active; ?>" style="background-image: url('<?php echo $thumb_url[0]; ?>'); background-size: cover;">
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
                    
                   <?php 
                   
                   		$i++;
                   		endwhile;
                   endif;
                   
                   wp_reset_postdata();
                   ?>
                    
                </div>
                
                <div class="col-xs-12">
                    <div class="container slider-pager">
                        <div class="slider-pager-border"></div>
                        <ol class="carousel-indicators">
                        
                         <?php 
	                								
					$args = array(
						'post_type' => 'carousel',
						'posts_per_page' => 3
					);
					
					$loop = new WP_Query($args);
					
					if( $loop->have_posts() ) :
					
						$j = 0;
					
						while($loop->have_posts()) : $loop->the_post();											

							if ('2' == $j) {
								$activex = 'active';
							}
					?>
                            <li data-target="#featured-slider" data-slide-to="<?php echo $j; ?>" class="<?php echo $activex; ?>">
                                <span class="page-number"><span class="offset-container"><?php echo $j+1; ?></span></span>
                            </li>
                            <?php 
                   
                   		$j++;
                   		endwhile;
                   endif;
                   
                   wp_reset_postdata();
                   ?>
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
                    <div></div><span>Latest News</span>
                </h1>
            </div>
        </div>
        <div class="row homepage-news">
			<?php 
		
			//wp_reset_query();
			
			$args = array(
				'post_type' => 'news',
				'posts_per_page' => 4
			);
			
			$loop = new WP_Query($args);
			
			if( $loop->have_posts() ) :
				while($loop->have_posts()) : $loop->the_post();
			?>
            <div class="col-xs-6 block homepage-news-item">
                <div class="row">
                    <div class="col-md-6">
                    	<?php the_post_thumbnail(array(210,136),array(
								'class' => "img-responsive")); ?>
                      
                    </div>
                    <div class="col-md-6">
                        <div class="homepage-news-desc-top">
                            <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                            <p class="date"><?php echo get_the_date(); ?></p>
                        </div>
                        <div class="homepage-news-desc-bottom">
                            <a href="<?php echo get_permalink(); ?>" class="btn">Read more <span class="arrow">&rang;</span></a>
                        </div>
                    </div>
                </div>
            </div>
           <?php 
					endwhile;
				endif; 
				
			wp_reset_postdata();
			?>
        </div>
        <div class="row section-title">
            <div class="col-xs-12 block">
                <h1><div></div><span>Latest Photos</span></h1>
            </div>
        </div>
        <div class="row homepage-gallery">
        	<?php 
				// wp_reset_query();
				
				$args = array(
					'post_type' => 'photogallery',
					'posts_per_page' => 4
				);
				
				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ) :
				while($loop->have_posts()) : $loop->the_post();
			?>
            <div class="col-xs-6 col-md-3 block">
            	<a href="<?php echo get_permalink(); ?>">
                 <?php the_post_thumbnail(array(255,170),array('class' => "img-responsive",)); ?>
                </a>
                <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <p class="date"><?php echo get_the_date(); ?></p>
            </div>
            <?php 
				endwhile;
				endif; 
				
				wp_reset_postdata();
			?>
           
        </div>
        <div class="row">
            <div class="col-sm-6 block">
                <div class="row section-title homepage-probank-title">
                    <div class="col-sm-12">
                        <h1><div></div><span>Probank <span class="hidden-sm">Magazine</span></span></h1>
                    </div>
                </div>
                
                 <?php 
			
				wp_reset_query();
				
				$args = array(
					'post_type' => 'probankmagazine'
				);
				
				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ) :
					while($loop->have_posts()) : $loop->the_post();
				?>
                <div class="row homepage-probank">
                    <div class="col-xs-6 col-md-4 homepage-probank-image-container">
                    	<?php echo the_post_thumbnail('large',array('class' => 'img-responsive')); ?>
                    

                        <p class="text-center">
                            <?php echo get_post_meta( get_the_ID(), 'wpcf-magazine-edition', TRUE) ; ?>
                        </p>
                    </div>
                    <div class="col-xs-6 col-md-8">
                        <p class="homepage-probank-desc-top"><?php echo get_the_content('...'); ?></p>
                        <p><a href="<?php echo get_permalink(); ?>" class="btn">View more <span class="arrow">&rang;</span></a></p>
                    </div>
                </div>
                <?php 
					endwhile;
				endif; 
				
				wp_reset_postdata();
			?>
            </div>
            <div class="col-sm-6 block">
                <div class="row section-title homepage-events-title">
                    <div class="col-sm-12">
                        <h1><div></div><span>Upcoming Events</span></h1>
                    </div>
                </div>
                <div class="row homepage-events">
                 <?php 
	
				$args = array( 
					'post_type' => 'upcomingevent',
					'posts_per_page' => 2 );
				
				$query = new WP_Query( $args );
				
				if ( $query->have_posts() ) :					
					while ( $query->have_posts() ) :
				
					$query->the_post(); 
					$unixdate	= get_post_meta( get_the_ID(), 'wpcf-event-date', TRUE); 
				?>
					
                    <div class="col-sm-12">
                        <div class="row item">
                            <div class="col-xs-2 col-sm-1 item-calendar">
                                <p class="month"><?php echo date('M', $unixdate)?></p>
                                <p class="date"><?php echo date('d', $unixdate)?></p>
                            </div>
                            <div class="col-xs-10 col-sm-11">
                                <h3><?php echo get_the_title(); ?></h3>
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
                    <?php
				endwhile;
			else:
				// no posts found
			endif;
	
			/* Restore original Post Data */
			wp_reset_postdata(); ?> 
                </div>
            </div>
        </div>
        <div class="row section-title">
            <div class="col-xs-12 block">
                <h1><div></div><span>Our Members</span></h1>
            </div>
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