<?php 

/**
 * Template untuk menampilkan arsip dari Probank Magazine.
 *
 * Halaman ini menampilkan thumbnail dari tiap2 magazine.
 * Filter per tahun edisi, Link Download dan link preview
 * 
 * @author Fostrom
 *
 * */

get_header(); ?>

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
                    <h2><?php _e('News &amp; Media','perbanas'); ?></h2>
                </div>
                <?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
            </div>
        </nav>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <select>
                        <option><?php _e('Filter','perbanas'); ?></option>
                        
                        <?php 

                        /**
                         * Mencari tahun yang unik dari key magazine year
                         * untuk ditamplikan dalam select combobox
                         * 
                         * */
                        $tahun = perbanas_get_metaval_by_key('wpcf-magazine-year');

						if ( count($tahun) > 0 ) { // Jika $tahun ada isinya maka ditampilkan, jika tidak ada tidak ditampilkan
							foreach ( $tahun as $thn ) { ?>

						<option value="<?php echo '?tahun='.$thn; ?>"><?php echo $thn; ?></option>
						
						<?php } // End foreach $tahun as $thn
						} // End if count($tahun) ?> 
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Perbanas Magazine','perbanas'); ?></span></h1>
                </div>
            </div>
            <div class="row">
            
	            <?php 

                $args['post_type'] = get_post_type();
                $args['posts_per_page'] = 12;
                $args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

	
	            /**
	             * Menambahkan argumen untuk wp query berdasarkan custom field
	             * */
				if (isset($_GET['tahun'])) { // Ini get tahun mendapatkan data dari url, harus ada PENYARINGAN DATA supaya tidak terjadi injeksi
					$args['meta_query'] = array(
						array(
							'key'	=> 'wpcf-magazine-year',
							'value'	=> intval( $_GET['tahun'] )
						)
					);
				}
				
				$loop = new WP_Query($args);

                // Pagination fix
                $temp_query = $wp_query;
                $wp_query   = NULL;
                $wp_query   = $loop;
    				
				if( $loop->have_posts() ) :
					while($loop->have_posts()) : $loop->the_post();

					/**
					 * Mencari id file yang akan di unduh
					 * */
					$id_download 		= perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment');
					
					/**
					 * Mencari extensi file
					 * */
					$format_download 	= perbanas_get_postmeta_extension( perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment') );
					
					if ( $format_download == '.pdf' ) : ?>

				<div class="col-sm-6 col-md-3 block item">
                    <div class="overlay-container">
                        <div class="img">
                        	<?php if ( has_post_thumbnail() ) {
                        		echo the_post_thumbnail('large',array('class' => 'img-responsive'));
							} else { ?>
								<img width="161" height="214" src="<?php echo get_template_directory_uri(); ?>/img/probank-magazine-01-05.png" class="img-responsive wp-post-image" alt="magazine">
							<?php }?>
                        	
                        </div>
                        <div class="overlay">
                            <div class="overlay-top-aligned">
                            
                                <a href="<?php echo get_permalink(); ?>?action=download&id=<?php echo $id_download; ?>"><img class="img-no-responsive" src="<?php echo get_template_directory_uri(); ?>/img/probank-download.png" /></a>
                                <h3><a href="<?php echo get_permalink(); ?>?action=download&id=<?php echo $id_download; ?>"><?php _e('Download','perbanas'); ?></a></h3>
                            </div>
                            <div class="overlay-bottom-aligned">
                                <a href="<?php echo get_permalink(); ?>?action=read&id=<?php echo $id_download; ?>" target="_blank"><img class="img-no-responsive" src="<?php echo get_template_directory_uri(); ?>/img/probank-read.png" /></a>
                                <h3><a href="<?php echo get_permalink(); ?>?action=read&id=<?php echo $id_download; ?>" target="_blank" ><?php _e('Read','perbanas'); ?></a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p><?php _e('Edition: ','perbanas'); ?></p>
                        <p class="date"><?php echo get_post_meta(get_the_ID(), 'wpcf-magazine-edition', TRUE); ?></p>
                    </div>
                </div>
				
				<?php else:
						
						// Perintah jika bukan file pdf
						// ...
						
					endif; // End if $format_download == 'pdf'
					
					endwhile;
				else:
					get_template_part( 'content', 'none' );
				endif; 
				
				wp_reset_query();
				wp_reset_postdata(); 

                // Custom query loop pagination
                echo paginate_links(array(
                    'base'      => get_post_type_archive_link( get_post_type() ) . 'page/%#%',
                    'total'     => $loop->max_num_pages,
                    'current'   => $args['paged']
                ));
                    
                // Reset main query object
                $wp_query = NULL;
                $wp_query = $temp_query; ?>
			
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>