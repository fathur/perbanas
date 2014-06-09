<?php get_header(); ?>

	<div class="wrapper top-margin">
        <div class="row slider">
            <div id="featured-slider" class="carousel slide">
                <div class="carousel-inner">
                    <div class="col-xs-12 block slider-background item active">
                        <div class="container">
                            <div class="row slider-content">
                                <div class="col-xs-12 block slider-content-text">
                                    <h1>
                                        Lorem ipsum is simply dummy text of the printing
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 block slider-background item">
                        <div class="container">
                            <div class="row slider-content">
                                <div class="col-xs-12 block slider-content-text">
                                    <h1>
                                        Lorem ipsum is simply dummy text of the printing
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 block slider-background item">
                        <div class="container">
                            <div class="row slider-content">
                                <div class="col-xs-12 block slider-content-text">
                                    <h1>
                                        Lorem ipsum is simply dummy text of the printing
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xs-12">
                    <div class="container slider-pager">
                        <div class="slider-pager-border"></div>
                        <ol class="carousel-indicators">
                            <li data-target="#featured-slider" data-slide-to="0" class="active">
                                <span class="page-number"><span class="offset-container">1</span></span>
                            </li>
                            <li data-target="#featured-slider" data-slide-to=1>
                            <span class="page-number"><span class="offset-container">2</span></span>
                            </li>
                            <li data-target="#featured-slider" data-slide-to="2">
                                <span class="page-number"><span class="offset-container">3</span></span>
                            </li>
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
                    <span>Latest News</span>
                </h1>
            </div>
        </div>
        <div class="row homepage-news">
			<?php 
		
			wp_reset_query();
			
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
                            <a href="#" class="btn">Read more <span class="arrow">&rang;</span></a>
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
                <h1><span>Latest Photos</span></h1>
            </div>
        </div>
        <div class="row homepage-gallery">
            <div class="col-xs-6 col-md-3 block">
                <img class="img-responsive" src="<?=get_template_directory_uri()?>/img/166835121-business-people-watching-screens-in-gettyimages.jpg" width="255px" height="170px" />
                <h3>Lorem Ipsum Is Simply Dummy Text</h3>
                <p class="date">22 April 2014 17:00</p>
            </div>
            <div class="col-xs-6 col-md-3 block">
                <img class="img-responsive" src="<?=get_template_directory_uri()?>/img/158570170-party-time-at-a-concert-gettyimages.jpg" width="255px" height="170px" />
                <h3>Lorem Ipsum Is Simply Dummy Text</h3>
                <p class="date">22 April 2014 17:00</p>
            </div>
            <div class="col-xs-6 col-md-3 block">
                <img class="img-responsive" src="<?=get_template_directory_uri()?>/img/174403788-speaker-at-seminar-gesturing-to-crowd-gettyimages.jpg" width="255px" height="170px" />
                <h3>Lorem Ipsum Is Simply Dummy Text</h3>
                <p class="date">22 April 2014 17:00</p>
            </div>
            <div class="col-xs-6 col-md-3 block">
                <img class="img-responsive" src="<?=get_template_directory_uri()?>/img/174601330-cocktail-hour-after-a-business-conference-gettyimages.jpg" width="255px" height="170px" />
                <h3>Lorem Ipsum Is Simply Dummy Text</h3>
                <p class="date">22 April 2014 17:00</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 block">
                <div class="row section-title homepage-probank-title">
                    <div class="col-sm-12">
                        <h1><span>Probank <span class="hidden-sm">Magazine</span></span></h1>
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
                    	<?php echo the_post_thumbnail(array(140,187),array('class' => 'img-responsive')); ?>
                    

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
                        <h1><span>Upcoming Events</span></h1>
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
                <h1><span>Our Members</span></h1>
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