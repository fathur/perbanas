<?php get_header(); ?>
<div class="container main-layout press-releases">
    <div class="row breadcrumbs hidden-xs">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-3 hidden-xs hidden-sm">
            <div class="sidebar-title">
                <h2>News &amp; Media</h2>
            </div>
            <?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span>Press Release</span></h1>
                </div>
            </div>
            
            <?php get_template_part('news','simple'); ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>