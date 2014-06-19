<?php 
/**
 * Menampilkan satu halaman member bank
 *
 * @author Fostrom
 *
 * */

get_header(); ?>
<div class="container main-layout member-banks-detail">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <nav class="col-xs-12 col-sm-3 sidebar-affix-container  hidden-xs hidden-sm">
            <div class="sidebar">
                <div class="sidebar-title">
                    <h2><?php _e('Member Banks','perbanas'); ?></h2>
                </div>
                
                <?php echo perbanas_side_menu('member-bank-menu', 'leftMenu'); ?>
            </div>
        </nav>
        <div class="col-xs-12 col-md-9 main-content-pane">
        
        <?php while ( have_posts() ) : the_post(); ?>
        
            <div class="row">
                <div class="col-xs-12 section-title">
					<h1><div></div><span><?php the_title(); ?></span></h1>
                </div>
            </div>
            <div class="row main-content-pane-logo">
                <div class="col-xs-12">
                
					<?php if ( has_post_thumbnail() ) {
						
						the_post_thumbnail('',array('class' => "img-no-responsive img-max-100p"));
						
					} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/no-news-picture.jpg" class="img-responsive img-max-100p" />
					<?php } ?>
					
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 main-content-pane-left-column">
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
            </div>
            <div class="row">
                <div class="col-xs-12 main-content-pane-right-column">
                    <?php the_content(); ?>
                </div>
            </div>
            
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>