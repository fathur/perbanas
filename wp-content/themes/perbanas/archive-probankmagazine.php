<?php get_header(); ?>
<div class="container main-layout probank">
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
                    <h1><span>Probank Magazine</span></h1>
                </div>
            </div>
            <div class="row">
            
            <?php 
			
				wp_reset_query();
				
				$args = array(
					'post_type' => get_post_type()
				);
				
				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ) :
					while($loop->have_posts()) : $loop->the_post();
				?>

				<div class="col-sm-6 col-md-3 block item">
                    <div class="img"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/probank-magazine-01-05.png" /></div>
                    <div class="overlay">
                        <div class="overlay-top-aligned">
                            <a href="#"><img class="img-no-responsive" src="<?php echo get_template_directory_uri(); ?>/img/probank-download.png" /></a>
                            <h3><a href="#">Download</a></h3>
                        </div>
                        <div class="overlay-bottom-aligned">
                            <a href="#"><img class="img-no-responsive" src="<?php echo get_template_directory_uri(); ?>/img/probank-read.png" /></a>
                            <h3><a href="#">Read</a></h3>
                        </div>
                    </div>
                </div>
				
				<?php 
					endwhile;
				endif; 
			?>
			
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>