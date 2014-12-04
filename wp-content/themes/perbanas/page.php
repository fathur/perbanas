<?php 

get_header(); ?>

<div class="container main-layout news-single">

    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>

    <div class="row">
       
        <div class="col-xs-12 col-sm-12 main-content-pane">
        	<?php
                        if (have_posts()) :
                        	while ( have_posts() ) : the_post(); ?>  
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php the_title(); ?></span></h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="news-content">
                                            
                               <?php the_content(); ?>
                           
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
                           <?php
                        else:
                            get_template_part( 'content', 'none' );
                        endif; 
                        ?> 
            
        </div>
    </div>
</div>

<?php get_footer(); ?>