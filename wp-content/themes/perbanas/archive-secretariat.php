<?php 
$menu_post_type = 'secretariat'; // Karena sector merupakan bagian dari menu council
$taxonomy		= 'subsector';

get_header(); ?>

<div class="container main-layout sectors organization-sector">
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
                    <h1><div></div><span><?php _e('Secretariat','perbanas'); ?></span></h1>
                </div>
            </div>
            <div class="row ">
            
				
			<?php 
			
				wp_reset_query();
				
				$args = array(
					'post_type' => get_post_type()
				);
				
				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ) :
					while($loop->have_posts()) : $loop->the_post();
				?>
					<div class="col-sm-6 col-md-3 block item">
						<div class="img">
						
						<?php 
						/**
						 * Mengambil gambar dari post thumbnail, jika ada ditampilkan,
						 * jika tidak ada diganti gambar default no profile picture
						 * 
						 * */
						if ( has_post_thumbnail() ) { 
							
							the_post_thumbnail(array(667,833),array('class' => "img-responsive",));
							
						} else { ?>
						
							<img class="img-responsive" width="667" height="833" src="<?php echo get_template_directory_uri(); ?>/img/no-pp.jpg">
						
						<?php } ?>
					
						</div>
						<div class="overlay">
							<div class="item-title">
								<h3><?php echo get_the_title(); ?></h3>
								<p><?php echo get_post_meta( get_the_ID(), 'wpcf-secretariat-posisi', TRUE ); ?></p>
							</div>
							
						</div>			
					</div>	
				
				<?php 
					endwhile;
				else:
					get_template_part( 'content', 'none' );
				endif; 
			?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>