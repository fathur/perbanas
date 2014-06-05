<?php get_header(); ?>

<div class="container main-layout news-single">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar">
            <div class="sidebar-title">
                <h2>News &amp; Media</h2>
            </div>
            <?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>Perbanas News</span></h1>
                </div>
            </div>
            
            <?php while ( have_posts() ) : the_post(); ?>
            
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-row">
                        <p class="text-right back-link">
                            <a href="#"><span class="arrow">&lang;</span> Back to Perbanas News</a>
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
                        <p>
                           <?php the_post_thumbnail('large',array('class' => "img-no-responsive",'style'=>"min-width: 100%")); ?>
                        </p>
                       <?php the_content(); ?>
                    </div>
                </div>
            </div>
            
            <?php endwhile; ?>
            
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>Other News</span></h1>
                </div>
            </div>
            <div class="row other-news">
                <div class="col-xs-6 col-md-3 block">
                    <img class="img-responsive" src="content/img/166835121-business-people-watching-screens-in-gettyimages.jpg" width="255px" height="170px">
                    <h3>Lorem Ipsum Is Simply Dummy Text</h3>
                    <p class="date">22 April 2014 17:00</p>
                </div>
                <div class="col-xs-6 col-md-3 block">
                    <img class="img-responsive" src="content/img/158570170-party-time-at-a-concert-gettyimages.jpg" width="255px" height="170px">
                    <h3>Lorem Ipsum Is Simply Dummy Text</h3>
                    <p class="date">22 April 2014 17:00</p>
                </div>
                <div class="col-xs-6 col-md-3 block">
                    <img class="img-responsive" src="content/img/174403788-speaker-at-seminar-gesturing-to-crowd-gettyimages.jpg" width="255px" height="170px">
                    <h3>Lorem Ipsum Is Simply Dummy Text</h3>
                    <p class="date">22 April 2014 17:00</p>
                </div>
                <div class="col-xs-6 col-md-3 block">
                    <img class="img-responsive" src="content/img/174601330-cocktail-hour-after-a-business-conference-gettyimages.jpg" width="255px" height="170px">
                    <h3>Lorem Ipsum Is Simply Dummy Text</h3>
                    <p class="date">22 April 2014 17:00</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>