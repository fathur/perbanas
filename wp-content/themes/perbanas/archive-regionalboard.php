<?php 
$menu_post_type = 'council'; // Karena regional board merupakan bagian dari menu council

get_header(); ?>

<div class="container main-layout regional-board">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar">
            <div class="sidebar-title">
                <h2>Council</h2>
            </div>
            
            <?php echo perbanas_side_menu('council-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span>Regional Board</span></h1>
                </div>
            </div>
            <div class="row ">
				<div class="col-xs-12">
					<div class="row">
						<ul>
						<?php 
							$args = array( 'post_type' => get_post_type() );
							$query = new WP_Query( $args );
						
							if ( $query->have_posts() ) {
								
								while ( $query->have_posts() ) {
									$query->the_post(); ?>
									
									<li class="col-xs-12 col-sm-6"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
									<?php 
								}
								
							} else {
								// no posts found
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