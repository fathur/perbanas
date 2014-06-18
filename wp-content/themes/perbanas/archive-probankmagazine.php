<?php get_header(); ?>
<div class="container main-layout probank">
    <div class="row breadcrumbs hidden-xs hidden-sm">
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
                <div class="col-xs-12 text-right">
                    <select>
                        <option>Filter</option>
                        <?php 
                        	$tahun = perbanas_get_metaval_by_key('wpcf-magazine-year');
                        	
                            if ( count($tahun) > 0 ) {
                                foreach ( $tahun as $thn ) { ?>

                                    <option value="<?php echo '?tahun='.$thn; ?>"><?php echo $thn; ?></option>
						<?php 
                                }  
                            } 
                        ?> 
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span>Probank Magazine</span></h1>
                </div>
            </div>
            <div class="row">
            
            <?php 			            
            	
				wp_reset_query();
				
				$args['post_type'] = get_post_type();

				if (isset($_GET['tahun'])) {
					$args['meta_query'] = array(
						array(
							'key'	=> 'wpcf-magazine-year',
							'value'	=> intval( $_GET['tahun'] )
						)
					);
				}
				
				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ) :
					while($loop->have_posts()) : $loop->the_post();
				?>

				<div class="col-sm-6 col-md-3 block item">
                    <div class="overlay-container">
                        <div class="img">                    
                        	<?php echo the_post_thumbnail('large',array('class' => 'img-responsive')); ?>
                        </div>
                        <div class="overlay">
                            <div class="overlay-top-aligned">
                            
                                <a href="<?php echo get_permalink(); ?>?action=download&id=<?php echo perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment'); ?>"><img class="img-no-responsive" src="<?php echo get_template_directory_uri(); ?>/img/probank-download.png" /></a>
                                <h3><a href="<?php echo get_permalink(); ?>?action=download&id=<?php echo perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment'); ?>">Download</a></h3>
                            </div>
                            <div class="overlay-bottom-aligned">
                                <a href="<?php echo get_permalink(); ?>?action=read&id=<?php echo perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment'); ?>" target="_blank"><img class="img-no-responsive" src="<?php echo get_template_directory_uri(); ?>/img/probank-read.png" /></a>
                                <h3><a href="<?php echo get_permalink(); ?>?action=read&id=<?php echo perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment'); ?>" target="_blank" >Read</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p>Edisi</p>
                        <p class="date"><?php echo get_post_meta(get_the_ID(), 'wpcf-magazine-edition', TRUE); ?></p>
                    </div>
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