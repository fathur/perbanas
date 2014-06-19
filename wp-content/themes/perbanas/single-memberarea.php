<?php get_header(); ?>

<div class="container main-layout news-single">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
       
        <div class="col-xs-12 col-sm-12 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span><?php _e("Members' Area",'perbanas'); ?></span></h1>
                </div>
            </div>
            
            <?php 
            while ( have_posts() ) : the_post(); 
            $id_post = get_the_ID(); ?>
                        
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-row">
                        <p class="text-right back-link">
                            <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>"><span class="arrow">&lang;</span> <?php _e('Back to Member Area','perbanas'); ?></a>
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
                        
                       <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>