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
                    <h1><span>Search</span></h1>
                </div>
            </div>
            
            <?php 
			
				$search_results = new WP_Query( array(
					's'			=> sanitize_text_field( $_GET['s'] ),
					'post_type'	=> array('pressrelease','news','upcomingevent','eventseminar')
				) );
				
				if( $search_results->have_posts() ) :
					while($search_results->have_posts()) : $search_results->the_post();
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
				
				wp_reset_postdata();
			?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>