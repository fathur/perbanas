<?php get_header(); ?>
<div class="container main-layout members-area">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>Members' Area</span></h1>
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
			
            <div class="row members-area-item">
                <div class="col-xs-12">
                    <div class="members-area-desc-top">
                        <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        <p class="date"><?php echo get_the_date(); ?></p>
                        <p class="desc"><?php echo get_the_content('...'); ?></p>
                    </div>
                    <div class="members-area-desc-bottom">
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