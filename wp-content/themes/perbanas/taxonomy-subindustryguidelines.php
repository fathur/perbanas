<?php 
$taxonomy       = 'subindustryguidelines';
$term           = get_query_var( $wp_query->query_vars['taxonomy'] );
$menu_post_type = 'industryguidelines'; 

get_header(); ?>


<div class="container main-layout industry-guidelines-syariah-business">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 hidden-xs hidden-sm">
            <div class="sidebar-title">
                <h2>Industry Guidelines</h2>
            </div>
            
            <?php echo perbanas_side_menu('industryguidelines-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php echo get_term_by('slug', $term, $taxonomy)->name; ?></span></h1>
                </div>
            </div>
          
			<?php
           
			wp_reset_query();
           
			$args = array('post_type' => get_post_type(),
				'tax_query' => array(
					array(
						'taxonomy'  => $taxonomy,
						'field'     => 'slug',
						'terms'     => $term
				)));

			$loop = new WP_Query($args);
			
			if( $loop->have_posts() ) : 
				while($loop->have_posts()) : $loop->the_post();
			?>
				<div class="row industry-guidelines-syariah-business-item">
					<div class="col-xs-10">
						<h2><a href="<?php echo get_permalink( get_the_ID() ); ?>"><?php echo esc_attr( get_the_title() ); ?></a></h2>
						
						<p class="desc">Size: 13,55 KB <span class="divider">|</span> <?php the_date(); ?> <span class="divider">|</span> Format: .pdf</p>
						<p class="desc-detailed">
							<?php the_content(); ?>
						</p>
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