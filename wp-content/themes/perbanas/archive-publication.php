<?php 

/**
 * Template untuk menampilkan arsip dari News.
 * 
 * @author Fostrom
 *
 * */

get_header(); ?>
<div class="container main-layout industry-guidelines-syariah-business">
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
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Publications','perbanas'); ?></span></h1>
                </div>
            </div>
            
            <?php $args = array(
                'post_type' => get_post_type(),
                'paged'    => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 
            );
    
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
                $id_download        = perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment');
                
                /**
                 * Mencari file size yang ada
                * */
                $size_download      = perbanas_get_postmeta_size( perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment') );
                
                /**
                 * Mencari extensi file
                * */
                $format_download    = perbanas_get_postmeta_extension( perbanas_get_metaid_by_key(get_the_ID(), 'wpcf-industryguide-attachment') );
                
                ?>
                    
            <div class="row industry-guidelines-syariah-business-item">
                <div class="col-xs-10">
                    <h2><a href="<?php echo get_post_meta( get_the_ID(), 'wpcf-industryguide-attachment', TRUE); ?>" target="__blank"><?php echo esc_attr( get_the_title() ); ?></a></h2>
                    
                    <p class="desc"><?php _e('Size','perbanas'); ?>: <?php echo $size_download; ?> <span class="divider">|</span> <?php the_date(); ?> <span class="divider">|</span> <?php _e('Format','perbanas'); ?>: <?php echo $format_download; ?></p>
                    <p class="desc-detailed">
                        <?php the_content(); ?>
                    </p>
                </div>
                <div class="col-xs-2 text-center">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'wpcf-industryguide-attachment', TRUE) ; ?>" target="__blank"><img src="<?php echo get_template_directory_uri(); ?>/img/download-button-05.png"></a>
                </div>
            </div>
            <hr />
                
            <?php endwhile;
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
<?php get_footer(); ?>