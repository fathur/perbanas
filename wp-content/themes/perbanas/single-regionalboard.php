<?php get_header(); ?>

<div class="container main-layout regional-board-inside">
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
                <div class="col-xs-12 text-right">
                    <select>
                    	<option>Other Regional Board</option>
                        <?php 
							$args = array( 'post_type' => get_post_type() );
							$query = new WP_Query( $args );
						
							if ( $query->have_posts() ) {
								
								while ( $query->have_posts() ) {
									$query->the_post(); ?>
									
									<option value="<?php echo basename(get_permalink()); ?>"><?php echo get_the_title(); ?></option>
									<?php 
								}
								
							} 
							wp_reset_postdata();
						
						?> 
                    </select>
                </div>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span>
                    <?php 
                  
                    if ( is_single() ) :
						the_title();
					else :
						the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
					endif;
					?>
                    </span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
					<?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>