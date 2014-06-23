<?php

/**
 * Menampilkan satu halaman member area
 * 
 * hanya bisa diakses oleh member saja
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
       
        <div class="col-xs-12 col-sm-12 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e("Terms of Use",'perbanas'); ?></span></h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="news-content">
                        <?php
                        if (have_posts()) :
                        ?>
                            <?php while ( have_posts() ) : the_post(); ?>                      
                               <?php the_content(); ?>
                           <?php endwhile; ?>
                           <?php
                        else:
                            get_template_part( 'content', 'none' );
                        endif; 
                        ?> 
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>