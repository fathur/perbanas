<?php get_header(); ?>
<div class="container main-layout member-banks-detail">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar">
            <div class="sidebar-title">
                <h2>Member Banks</h2>
            </div>
            
            <?php echo perbanas_side_menu('member-bank-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
        
        <?php 
		while ( have_posts() ) : the_post();
		
			
			
		?>
		
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>
                    <?php 
                    if ( is_single() ) :
                    the_title();
                    else :
                    the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
                    endif;
                    ?>
                    </span></h1>
                </div>
            </div>
            <div class="row main-content-pane-logo">
                <div class="col-xs-12">
					<?php the_post_thumbnail('',array('class' => "img-no-responsive",)); ?>
				</div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 main-content-pane-left-column">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2><?php echo get_post_meta( get_the_ID(), 'wpcf-memberbank-title', TRUE ); ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-12">
                            <p>
                                <span class="main-content-pane-left-column-paragraph-heading hidden-md hidden-lg">Address:</span><br class="hidden-md hidden-lg" />
								<?php echo get_post_meta( get_the_ID(), 'wpcf-memberbank-address', TRUE ); ?>
                            </p>
                        </div>
                        <div class="col-xs-6 col-sm-12">
                            <p>
                                <span class="main-content-pane-left-column-paragraph-heading">Telp:</span><br />
                                <?php echo get_post_meta( get_the_ID(), 'wpcf-memberbank-phones', TRUE ); ?>
                            </p>
                        </div>
                        <div class="col-xs-12 col-sm-12">
                            <p>
                                <a href="<?php echo get_post_meta( get_the_ID(), 'wpcf-memberbank-website', TRUE ); ?>"><?php echo get_post_meta( get_the_ID(), 'wpcf-memberbank-website', TRUE ); ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-9 main-content-pane-right-column">
                    <?php the_content(); ?>
                </div>
            </div>
            
            <?php 
	
			
			
			
		endwhile;		
		?>
        </div>
    </div>
</div>
        

<?php get_footer(); ?>