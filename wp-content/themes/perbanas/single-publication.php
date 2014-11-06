<?php 

/**
 * Menampilkan halaman untuk satu berita perbanas corner
 * dapat berupa faq atau education.
 *
 * @author Fostrom
 *
 * */

get_header(); ?>

<div class="container main-layout news-single">
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
            
            <?php while ( have_posts() ) : the_post(); ?>
                        
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-row">
                        <p class="text-right back-link">
                            <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>"><span class="arrow hidden-xs hidden-sm">&lsaquo;</span> <?php _e('Back to Publications','perbanas'); ?></a>
                        </p>
                        <h2><?php the_title(); ?></h2>
                        <p class="date"><?php the_date(); ?></p>
                    </div>
                    <div class="news-content">
                        
                       <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>