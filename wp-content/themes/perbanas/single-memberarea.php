<?php get_header(); ?>

<div class="container main-layout news-single">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    <div class="row">
       
        <div class="col-xs-12 col-sm-12 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>Members' Area</span></h1>
                </div>
            </div>
            
            <?php 
            while ( have_posts() ) : the_post(); 
            $id_post = get_the_ID(); ?>
                        
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-row">
                        <p class="text-right back-link">
                            <a href="#"><span class="arrow">&lang;</span> Back to Press Releases</a>
                        </p>
                        <h2><?php 
                    if ( is_single() ) :
                    the_title();
                    else :
                    the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
                    endif;
                    ?></h2>
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