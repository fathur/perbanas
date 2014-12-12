<?php 

/**
 * Template untuk menampilkan arsip dari News.
 * 
 * @author Fostrom
 *
 * */

get_header(); ?>
<div class="container main-layout news">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <!-- <nav class="col-xs-12 col-sm-3 sidebar-affix-container  hidden-xs hidden-sm">
            <div class="sidebar">
                <div class="sidebar-title">
                    <h2><?php _e('Member Banks','perbanas'); ?></h2>
                </div>
                <?php echo perbanas_side_menu('member-bank-menu', 'leftMenu'); ?>
            </div>
        </nav> -->
        <div class="col-xs-12 col-md-12 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Member Banks','perbanas'); ?></span></h1>
                </div>
            </div>

           
            
            <?php $args = array(
            	'post_type' => get_post_type(),
            	'posts_per_page' => -1 //get_option('posts_per_page')
            );
            $args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	
			$loop = new WP_Query($args);
			
			// Pagination fix
			$temp_query = $wp_query;
			$wp_query   = NULL;
			$wp_query   = $loop;

            $banks = array();
            $bankers = array();
			
			if( $loop->have_posts() ) :
				while($loop->have_posts()) : $loop->the_post(); 

                    // Collecting bank title
                    array_push($banks, preg_replace('/\bBank(\W|$)/i', '', get_the_title()) );

                    $bank['id'] = get_the_ID();
                    $bank['title'] = get_the_title();
                    $bank['order'] = preg_replace('/\bBank(\W|$)/i', '', get_the_title());

                    array_push($bankers, $bank);

                endwhile;

                usort($bankers, 'sort_by_order');

                // Sorting and grouping bank title
                // Source: http://stackoverflow.com/questions/14210480/group-array-results-in-alphabetic-order-php
                $last_char = '';
                sort($banks, SORT_STRING | SORT_FLAG_CASE);

                foreach ($bankers as $index => $bank) :


                    $char = $bank['order'][0];

                    if ($char !== $last_char) :
                        //if ($last_char !== '') 
                            //echo '</div>';
                        
                        echo "<div class=\"row\"> 
                            <div class=\"col-xs-12 section-title\">
                                <h2>
                                    <div></div>
                                    <span>".strtoupper($char)."</span>
                                </h2>
                            </div>
                        </div>";
                      
                        $last_char = $char;

                    endif;

                    echo "<div class=\"col-xs-6 col-sm-3 img-listlogo\">
                        <a href=\"".get_permalink( $bank['id'] )."\" title='".$bank['title']."' target='__blank'>".
                            get_the_post_thumbnail( $bank['id'], 'medium', array('class'=>'img-responsive') )
                        ."</a>
                    </div>";

                endforeach;

			else:
				get_template_part( 'content', 'none' );
			endif; 
			
			wp_reset_query();
			wp_reset_postdata();
			
			// Custom query loop pagination
			echo paginate_links(array(
				'base'		=> get_post_type_archive_link( get_post_type() ) . 'page/%#%',
				'total'		=> $loop->max_num_pages,
				'current'	=> $args['paged']
			));
				
			// Reset main query object
			$wp_query = NULL;
			$wp_query = $temp_query; ?>
			
        </div>
    </div>
</div>
<?php get_footer(); ?>