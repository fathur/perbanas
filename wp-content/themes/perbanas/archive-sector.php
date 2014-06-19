<?php 
$menu_post_type = 'council'; // Karena sector merupakan bagian dari menu council
$taxonomy		= 'subsector';

get_header(); ?>

<div class="container main-layout sectors">
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
                    <h1><div></div><span><?php echo get_query_var( $wp_query->query_vars['taxonomy'] ); ?></span></h1>
                </div>
            </div>
            <div class="row ">
            
				
				<?php $sectors = get_terms( $taxonomy , array(
					'orderby'		=> 'name', 
					'order'			=> 'ASC',
					'hide_empty'	=> FALSE, 
				) );
				
				foreach ($sectors as $sector) :?>
				<?php // print_r($sector); ?>
				<div class="col-sm-6 col-md-3 block item">
					<div class="img">				
						<?php $s8_img = s8_get_taxonomy_image_src( get_term_by('slug',$sector->slug,$sector->taxonomy), 'full'); ?>		
						<img class="img-responsive" src="<?php echo $s8_img['src']; ?>" />						
					</div>
					
					
					<div class="overlay">
						<div class="overlay-bottom-aligned">
							<h3><a href="<?php echo get_term_link( $sector->slug, $sector->taxonomy ); ?>">
						<?php echo $sector->name; ?></a></h3>
						</div>
					
					</div>									
				</div>			
				<?php endforeach; ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>