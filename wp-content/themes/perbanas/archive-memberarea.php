<?php 

/**
 * Template untuk menampilkan arsip dari Member Area.
 * 
 * Halaman untuk menampilkan hanya untuk member area saja.
 * Orang lain yang tidak login ke halaman ini tidak berhak 
 * melihatnya.
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

                    <h1><div></div><span><?php _e('Members Area','perbanas'); ?></span></h1>
                    
                </div>
            </div>
            
            <?php $loop = new WP_Query(array(
				'post_type' => get_post_type()
			));
				
			if( $loop->have_posts() ) :
				while($loop->have_posts()) : $loop->the_post(); ?>
			
            <div class="row members-area-item">
                <div class="col-xs-12">
                    <div class="members-area-desc-top">
                        <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <p class="desc"><?php echo get_the_content('...'); ?></p>
                    </div>
                    <div class="members-area-desc-bottom">
                        <a href="<?php echo get_permalink(); ?>" class="btn"><?php _e('Read more','perbanas'); ?> <span class="arrow">&rsaquo;</span></a>
                    </div>
                </div>
            </div>
            <hr />
			
			<?php endwhile;
			else:
				get_template_part( 'content', 'none' );
			endif; 
				
			wp_reset_query();
			wp_reset_postdata(); ?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>