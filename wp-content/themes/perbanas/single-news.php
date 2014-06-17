<?php get_header(); ?>

<div class="container main-layout news-single">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 hidden-xs hidden-sm sidebar">
            <div class="sidebar-title">
                <h2>News &amp; Media</h2>
            </div>
            <?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span>Perbanas News</span></h1>
                </div>
            </div>
            
            <?php 
            while ( have_posts() ) : the_post(); 
            $id_post = get_the_ID(); ?>
            
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-row">
                        <p class="text-right back-link">
                            <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>"><span class="arrow">&lang;</span> Back to Perbanas News</a>
                        </p>
                        <h2><?php 
                    if ( is_single() ) :
                    the_title();
                    else :
                    the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
                    endif;
                    ?></h2>
                        <p class="date"><?php the_date(); ?></p>
                    </div>
                    <div class="news-content">
                        <p>
                           <?php the_post_thumbnail('large',array('class' => "img-responsive",'style'=>"min-width: 100%")); ?>
                        </p>
                       <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
            
            <div class="row">
                <div class="col-xs-12 section-title">
                    <div></div><h1><span>Other News</span></h1>
                </div>
            </div>
            <div class="row other-news">
            
            <?php 
            
            $rp = array(
				'post_type'			=> get_post_type(),
            	'post__not_in'		=> array($id_post),
				'posts_per_page'	=> 4,
				'ignore_sticky_posts' => TRUE
            );
            
            $relateds = new WP_Query($rp);
            
           // The Loop
			if ( $relateds->have_posts() ) {
				
				while ( $relateds->have_posts() ) :
					$relateds->the_post();
				?>
				
				<div class="col-xs-6 col-md-3 block">
					<?php the_post_thumbnail('post-thumbnail',array('class'=>'img-responsive','width'=>225,'height'=>170)); ?>
					<h3><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h3>
					<p class="date"><?php the_date(); ?></p>
				</div>
				
				<?php 
					//echo get_the_title();
				endwhile;
				
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();
            ?>
            
              
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>