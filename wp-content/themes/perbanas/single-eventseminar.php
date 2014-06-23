<?php 

/**
 * Menampilkan satu halaman event dan seminar
 * 
 * @author Fostrom
 * 
 * */

get_header(); ?>

<div class="container main-layout event-seminar">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <nav class="col-xs-12 col-sm-3 sidebar-affix-container  hidden-xs hidden-sm">
            <div class="sidebar">
                <div class="sidebar-title">
                    <h2><?php _e('Events','perbanas'); ?></h2>
                </div>
                <?php echo perbanas_side_menu('event-menu', 'leftMenu'); ?>
            </div>
        </nav>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Event & Seminar','perbanas'); ?></span></h1>
                </div>
            </div>
            
			<?php while ( have_posts() ) : the_post();
             	$unixdate		= get_post_meta( get_the_ID(), 'wpcf-event-date', TRUE); ?>
             	
            <div class="row">
                <div class="col-xs-12 logo">
                	<?php if ( has_post_thumbnail() ) {
                		the_post_thumbnail('large',array('class' => "img-responsive"));
                	} else {
						// no picture is here ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/no-news-picture.jpg" class="img-responsive"  />
					<?php } ?>    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-3 main-content-pane-left-column">
                    <p class="event-day"><?php _e( date('l', $unixdate),'perbanas'); ?></p>
                    <p class="event-date"><?php echo date('j F Y', $unixdate); ?></p>
                    <p class="">
						<?php echo get_post_meta( get_the_ID(), 'wpcf-event-range-time', TRUE) ; ?><br />
						<?php echo get_post_meta( get_the_ID(), 'wpcf-event-location', TRUE) ; ?>
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 main-content-pane-right-column">
                    <h2><?php the_title(); ?></h2>
					
					<?php the_content(); ?>
                    
				</div>
            </div>
            <?php endwhile;?>
        </div>
    </div>
</div>

<?php get_footer(); ?>