<?php 

/**
 * Template untuk menampilkan Hasil pencarian
 * 
 * Yang dapat dicari adalah post type berupa
 * - press release
 * - news
 * - upcoming event
 * - event and seminar
 * 
 * @author Fostrom
 * 
 * */

get_header(); ?>

<div class="container main-layout members-area">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Search','perbanas'); ?></span></h1>
                </div>
            </div>
            
            <?php $search_results = new WP_Query( array(
				's'			=> sanitize_text_field( $_GET['s'] ),
				'post_type'	=> array('pressrelease','news','upcomingevent','eventseminar')
			) );
				
			if( $search_results->have_posts() ) :
				while($search_results->have_posts()) : $search_results->the_post(); ?>
			
            <div class="row members-area-item">
                <div class="col-xs-12">
                    <div class="members-area-desc-top">
                        <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <p class="desc"><?php echo get_the_content('...'); ?></p>
                    </div>
                    <div class="members-area-desc-bottom">
                        <a href="<?php echo get_permalink(); ?>" class="btn"><?php _e('Read more','perbanas'); ?> <span class="arrow">&rang;</span></a>
                    </div>
                </div>
            </div>
            <hr />
			
			<?php endwhile;
			endif; 
				
			/* Restore to originial query */
			wp_reset_query();
			/* Restore original Post Data */
			wp_reset_postdata(); ?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>