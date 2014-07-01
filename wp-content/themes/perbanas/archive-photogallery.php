<?php 

/**
 * Template untuk menampilkan arsip dari Photo Galllery.
 * 
 * Menampilkan album dari photo gallery
 * tiap album memiliki featured image (post thumbnailnya) 
 * masing-masing
 *
 * @author Fostrom
 *
 * */

get_header(); ?>

<div class="container main-layout photo-gallery photo-gallery-album">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <nav class="col-xs-12 col-sm-3 sidebar-affix-container  hidden-xs hidden-sm">
            <div class="sidebar">
                <div class="sidebar-title">
                    <h2><?php _e('News &amp; Media','perbanas'); ?></h2>
                </div>
    			<?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
            </div>
        </nav>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Album List','perbanas'); ?></span></h1>
                </div>
            </div>
            <div class="row">
				<?php $loop = new WP_Query(array(
					'post_type' => get_post_type()
				));
				
				if( $loop->have_posts() ) :
					while($loop->have_posts()) : $loop->the_post(); ?>
					
                <div class="col-xs-12 col-md-3 block photo-gallery-album-item">
                    <div class="square">
                    	<a href="<?php echo get_permalink(); ?>">
							<?php the_post_thumbnail(array(255,170),array('class' => "img-responsive",)); ?>
                    	</a>
                    </div>
                    <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                    <p class="date"><?php echo get_the_date(); ?></p>
                </div>
                
             	<?php 
					endwhile;
				else:
					get_template_part( 'content', 'none' );
				endif; 
				
				wp_reset_query();
				wp_reset_postdata(); ?>
				
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>