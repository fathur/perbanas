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
                    <h1><div></div><span><?php _e('Perbanas News','perbanas'); ?></span></h1>
                </div>
            </div>
            
            <?php $args = array(
            	'post_type' => get_post_type(),
            	'posts_per_page' => get_option('posts_per_page')
            );
            $args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
	
			$loop = new WP_Query($args);
			
			// Pagination fix
			$temp_query = $wp_query;
			$wp_query   = NULL;
			$wp_query   = $loop;
			
			if( $loop->have_posts() ) :
				while($loop->have_posts()) : $loop->the_post(); ?>
					
			<div class="row news-item">
                <div class="col-md-6">
                   <?php the_post_thumbnail('',array('class' => "img-responsive")); ?>
                </div>
                <div class="col-md-6">
                    <div class="news-desc-top">
                        <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        <p class="date"><?php echo get_the_date(); ?> </p>
                        <p class="desc"><?php echo get_the_content(); ?></p>
                    </div>
                    <div class="news-desc-bottom">
                        <a href="<?php echo get_permalink(); ?>" class="btn"><?php _e('Read more','perbanas'); ?> <span class="arrow">&rang;</span></a>
                    </div>
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