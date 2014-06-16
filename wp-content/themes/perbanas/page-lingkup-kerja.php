
<?php get_header(); ?>

<div class="container main-layout about-who-we-are">
    <div class="row breadcrumbs hidden-xs">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar hidden-xs">
            <div class="sidebar-title">
                <h2>Lingkup Kerja</h2>
            </div>
            <?php echo perbanas_side_menu('about-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
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