<?php get_header(); ?>

<div class="container main-layout photo-gallery photo-gallery-photo-list">
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
                    <h1><div></div><span><?php _e('Photo Gallery','perbanas'); ?></span></h1>
                </div>
            </div>
            <div class="top-row">
                <p class="text-right back-link">
                    <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>"><span class="arrow">&lang;</span> Back to Photo Gallery</a>
                </p>
            </div>

            <div class="row">
            
			<?php 
			
			while ( have_posts() ) : the_post(); 
			if ( get_post_gallery() ) :
			
				echo do_shortcode(get_the_content());
				//$photos = get_post_gallery_images( get_the_ID() );
				//foreach ($photos as $photo):
			?>
				
<!-- 				<div class="col-xs-6 col-md-3 block photo-gallery-photo-list-item"> -->
<!-- 					<div class="square"> -->
<!-- 						<a href="#"> -->
<!-- 							<img class="img-responsive" src="<?php// echo $photo; ?>" width="255" height="170"> -->
<!-- 						</a> -->
<!-- 					</div> -->
<!-- 				</div> -->
			
			<?php 
	
			//	endforeach;
			endif; // end if get_post_gallery()
			endwhile; ?>
			
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>