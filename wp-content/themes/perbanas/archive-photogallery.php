<?php get_header(); ?>
<div class="container main-layout photo-gallery photo-gallery-album">
    <div class="row breadcrumbs hidden-xs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar hidden-xs">
            <div class="sidebar-title">
                <h2>News &amp; Media</h2>
            </div>
			<?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>Photo Gallery</span></h1>
                </div>
            </div>
            <div class="row">
				<?php 
				wp_reset_query();
				
				$args = array(
						'post_type' => get_post_type()
				);
				
				$loop = new WP_Query($args);
				
				if( $loop->have_posts() ) :
				while($loop->have_posts()) : $loop->the_post();
				?>
                <div class="col-xs-6 col-md-3 block photo-gallery-album-item">
                    <div class="square"><a href="<?php echo get_permalink(); ?>">
                    <?php the_post_thumbnail(array(255,170),array('class' => "img-responsive",)); ?>
                    </a></div>
                    <h3><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                    <p class="date"><?php echo get_the_date(); ?></p>
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