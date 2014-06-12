<?php get_header(); ?>

<div class="container main-layout photo-gallery photo-gallery-photo-list">
    <div class="row breadcrumbs hidden-xs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar hidden-xs">
            <div class="sidebar-title">
                <h2>News &amp; Media</h2>
            </div>
			<?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
        </div>

        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span>Photo Gallery</span></h1>
                </div>
            </div>
            <div class="top-row">
                <p class="text-right back-link">
                    <a href="#"><span class="arrow">&lang;</span> Back to Photo Gallery</a>
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