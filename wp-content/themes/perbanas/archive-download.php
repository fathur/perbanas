<?php get_header(); ?>
<div class="container main-layout downloads">
    <div class="row breadcrumbs hidden-sm hidden-xs">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    
    <div class="row">
        <nav class="col-xs-12 col-sm-3 sidebar-affix-container  hidden-xs hidden-sm">
            <div class="sidebar">
                <div class="sidebar-title">
                    <h2>News &amp; Media</h2>
                </div>
                <?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
            </div>
        </nav>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span>Downloads</span></h1>
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
                    <a href="<?php echo get_permalink(); ?>?id=<?php echo perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/download-file.png" /></a>
                </div>
                <div class="col-xs-9">
                    <h2><a href="<?php echo get_permalink(); ?>?id=<?php echo perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment'); ?>"><?php echo get_the_title(); ?></a></h2>
                    <p class="desc">Size: <?php echo perbanas_get_postmeta_size( perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment') ); ?> <span class="divider">|</span> <?php echo get_the_date(); ?> <span class="divider">|</span> Format: <?php echo perbanas_get_postmeta_extension( perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment') ); ?></p>
                </div>
                <div class="col-xs-2 text-center">
                    <a href="<?php echo get_permalink(); ?>?id=<?php echo perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/download-button-05.png"></a>
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