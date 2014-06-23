<?php 

/**
 * Template untuk menampilkan arsip dari Upcoming Event.
 * 
 * Template ini menampilkan hari event, tanggal event, 
 * judul event, content event, dan post thumbnail event.
 * Content event ditampilkan dalam bentuk animasi 
 * 
 * @author PT.Fostrom
 * 
 * */

get_header(); ?>

<div class="container main-layout event-upcoming">

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
                    <h1><div></div><span><?php _e('Upcoming Events','perbanas'); ?></span></h1>
                </div>
            </div>
            
            <?php $args = array( 'post_type' => get_post_type() );		
			$query = new WP_Query( $args );
			
			if ( $query->have_posts() ) :		
				
				$i = 1; // Inisialisasi untuk unique id
			
				while ( $query->have_posts() ) : $query->the_post(); 
					$unixdate	= get_post_meta( get_the_ID(), 'wpcf-event-date', TRUE); ?>
					
			<div class="row item">
				<div class="col-xs-6 hidden-sm hidden-md hidden-lg main-content-pane-right-column">
					<?php the_post_thumbnail(); ?>
				</div>
				
				<div class="col-xs-6 col-sm-3 col-md-3 main-content-pane-left-column">
					<p class="event-day"><?php _e( date('l', $unixdate),'perbanas'); ?></p>
					<p class="event-date"><?php echo date('j F Y', $unixdate); ?></p>
					<p class="">
						<?php echo get_post_meta( get_the_ID(), 'wpcf-event-range-time', TRUE) ; ?><br />
						<?php echo get_post_meta( get_the_ID(), 'wpcf-event-location', TRUE) ; ?>
					</p>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 main-content-pane-middle-column accordion" id="event-id-<?php echo $i; //id attributed is used by the accordion ?>">
					<div class="accordion-group">
						<div class="accordion-heading">
							<h2>
								<a class="accordion-toggle event-upcoming-toggle-description-js" data-toggle="collapse" data-parent="#event-id-<?php echo $i; ?>" href="#event-id-<?php echo $i; ?>-body"><?php echo get_the_title(); ?></a>
							</h2>
						</div>
						<div class="accordion-body collapse" id="event-id-<?php echo $i; ?>-body">
							<div class="accordion-inner">
								<p><?php echo get_the_content();?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 hidden-xs main-content-pane-right-column">
					<?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>
				</div>
			</div>
			
			<hr />
 
			<?php $i++; // Incrementing id
				endwhile;
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

<?php get_footer(); ?>