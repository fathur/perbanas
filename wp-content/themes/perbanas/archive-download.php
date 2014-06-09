<?php get_header(); ?>
<div class="container main-layout downloads">
    <div class="row breadcrumbs hidden-sm hidden-xs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar">
            <div class="sidebar-title">
                <h2>News &amp; Media</h2>
            </div>
            <?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>Downloads</span></h1>
                </div>
            </div>
            
            <?php 
			
				wp_reset_query();
				
				$args = array(
					'post_type' => get_post_type()
				);
				
				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ) :
					while($loop->have_posts()) : $loop->the_post();
				?>
					
					
			
            
            <div class="row downloads-item">
                <div class="col-xs-1 text-center">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'wpcf-industryguide-attachment', TRUE) ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/download-file.png" /></a>
                </div>
                <div class="col-xs-9">
                    <h2><a href="<?php echo get_post_meta( get_the_ID(), 'wpcf-industryguide-attachment', TRUE) ; ?>"><?php echo get_the_title(); ?></a></h2>
                    <p class="desc">Size: 13,55 KB <span class="divider">|</span> <?php echo get_the_date(); ?> <span class="divider">|</span> Format: .pdf</p>
                </div>
                <div class="col-xs-2 text-center">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'wpcf-industryguide-attachment', TRUE) ; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/download-button-05.png"></a>
                </div>
            </div>
            <hr />
				
				<?php 
					endwhile;
				endif; 
			?>
			
           



        </div>
    </div>
</div>
<?php get_footer(); ?>