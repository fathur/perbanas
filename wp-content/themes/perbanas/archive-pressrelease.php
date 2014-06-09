<?php get_header(); ?>
<div class="container main-layout press-releases">
    <div class="row breadcrumbs hidden-xs">
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
                    <h1><span>Press Release</span></h1>
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
            
            <div class="row press-release-item">
                <div class="col-xs-12">
                    <div class="news-desc-top">
                        <h2><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <p class="desc"><?php echo get_the_content('...'); ?></p>
                    </div>
                    <div class="news-desc-bottom">
                        <a href="<?php echo get_permalink(); ?>" class="btn">Read more <span class="arrow">&rang;</span></a>
                    </div>
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