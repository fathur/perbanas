<?php 
$menu_post_type = 'council'; // Karena regional board merupakan bagian dari menu council

get_header(); ?>

<div class="container main-layout regional-board">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <nav class="col-xs-12 col-sm-3 sidebar-affix-container  hidden-xs hidden-sm">
            <div class="sidebar">
              <div class="sidebar-title">
			          <h2><?php _e('Council','perbanas'); ?></h2>
    					</div>            
		        	<?php echo perbanas_side_menu('council-menu', 'leftMenu'); ?>
		        </div>
      	</nav>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Regional Board','perbanas'); ?></span></h1>
                </div>
            </div>
            <div class="row ">
				<div class="col-xs-12">
					<div class="row">
						<ul>
						<?php 
							$args = array( 
								'post_type' => get_post_type(),
								'posts_per_page' => -1
							 );
							$query = new WP_Query( $args );
						
							if ( $query->have_posts() ) {
								
								while ( $query->have_posts() ) {
									$query->the_post(); ?>
									
									<li class="col-xs-12 col-sm-6"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
									<?php 
								}
								
							} else {
								get_template_part( 'content', 'none' );
							}
							/* Restore original Post Data */
							wp_reset_postdata();
						
						?> 
							
						</ul>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>