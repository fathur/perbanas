<?php get_header(); ?>
<div class="container main-layout news">
    <div class="row breadcrumbs">
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
                <div class="col-xs-12 section-title">
                    <h1><div></div><span>Perbanas News</span></h1>
                </div>
            </div>
            
            <?php 
			
				wp_reset_query();
				
				$args = array(
					'post_type' => get_post_type()
				);
				
				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ) :
					while($loop->have_posts()) : $loop->the_post();
				?>
					
					
					
					 <div class="row news-item">
                <div class="col-md-6">
                   <?php the_post_thumbnail('',array('class' => "img-responsive",)); ?>
                </div>
                <div class="col-md-6">
                    <div class="news-desc-top">
                        <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        <p class="date"><?php echo get_the_date(); ?> </p>
                        <p class="desc"><?php echo get_the_content(); ?></p>
                    </div>
                    <div class="news-desc-bottom">
                        <a href="<?php echo get_permalink(); ?>" class="btn">Read more <span class="arrow">&rang;</span></a>
                    </div>
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