
<?php get_header(); ?>

<div class="container main-layout about-who-we-are">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        
        <div class="col-xs-12 col-md-12 main-content-pane">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php the_title(); ?></span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; endif;?>
        </div>
    </div>
</div>

<?php get_footer(); ?>