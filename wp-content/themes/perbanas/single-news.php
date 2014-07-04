<?php 

/**
 * Menampilkan halaman untuk satu berita saja.
 * 
 * @author Fostrom
 * 
 * */

get_header(); ?>

<div class="container main-layout news-single">
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
                    <h1><div></div><span><?php _e('Perbanas News','perbanas'); ?></span></h1>
                </div>
            </div>
            
            <?php while ( have_posts() ) : the_post(); 
				$id_post = get_the_ID(); ?>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-row">
                        <p class="text-right back-link">
                            <a href="<?php echo get_post_type_archive_link( get_post_type() ); ?>"><span class="arrow hidden-xs hidden-sm">&lsaquo;</span> <?php _e('Back to Perbanas News','perbanas'); ?></a>
                        </p>
                        <h2><?php the_title(); ?></h2>
                        <p class="date"><?php the_date(); ?></p>
                    </div>
                    <div class="news-content">
                        <p>
	                        <?php if (has_post_thumbnail()) {
	                        	the_post_thumbnail('large',array('class' => "img-responsive",'style'=>"min-width: 100%;"));
	                        } else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/no-news-picture.jpg" class="img-responsive" style="min-width: 100%" />
							<?php } ?>
                        </p>
                       <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
            
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Other News','perbanas'); ?></span></h1>
                </div>
            </div>
            <div class="row other-news">
            
            <?php $relateds = new WP_Query( array(
				'post_type'			=> get_post_type(),
            	'post__not_in'		=> array($id_post),
				'posts_per_page'	=> 4,
				'ignore_sticky_posts' => TRUE
            ) );
            
           // The Loop
			if ( $relateds->have_posts() ) {
				while ( $relateds->have_posts() ) : $relateds->the_post(); ?>
				
				<div class="col-xs-6 col-md-3 block">
					<?php 
					if (has_post_thumbnail()) {
						the_post_thumbnail(array(225,170),array('class'=>'img-responsive'));
					} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/no-news-picture.jpg" class="img-responsive" style="min-width: 100%" />
					<?php } ?>
					
					<h3><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h3>
					
					<p class="date"><?php the_date(); ?></p>
				</div>
				
			<?php endwhile;
				
			} else {
				get_template_part( 'content', 'none' );
			}
			
			/* Restore to originial query */
			wp_reset_query();
			/* Restore original Post Data */
			wp_reset_postdata(); ?>
            
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>