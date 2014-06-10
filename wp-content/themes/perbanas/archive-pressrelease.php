<?php get_header(); ?>
<div class="container main-layout press-releases">
    <div class="row breadcrumbs hidden-xs">
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
                    <h1><span>Press Release</span></h1>
                </div>
            </div>
            
            <?php get_template_part('news','simple'); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>