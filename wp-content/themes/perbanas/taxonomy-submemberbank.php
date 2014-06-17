<?php 
$taxonomy       = 'submemberbank';
$term           = get_query_var( $wp_query->query_vars['taxonomy'] );
$menu_post_type = 'member-bank'; // Karena sector merupakan bagian dari menu council

get_header(); ?>


<div class="container main-layout regional-board">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 hidden-xs hidden-sm">
            <div class="sidebar-title">
                <h2>Member Banks</h2>
            </div>
            
            <?php echo perbanas_side_menu('member-bank-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php echo get_term_by('slug', $term, $taxonomy)->name; ?></span></h1>
                </div>
            </div>
           <div class="row">
				<?php
	           
				wp_reset_query();
	           
				$args = array('post_type' => get_post_type(),
					'posts_per_page'	=> -1,
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
				
				<div class="col-xs-6 col-sm-3">
					<a href="<?php echo get_permalink( get_the_ID() ); ?>" title="<?php echo esc_attr( get_the_title() ); ?>">
						<?php echo the_post_thumbnail(array(141,141),array('class'=>'img-responsive')); ?>
					</a>
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