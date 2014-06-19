<?php 

/**
 * Template untuk menampilkan halaman 404.
 * 
 * */

get_header(); ?>

<div class="container main-layout members-area">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Page Not Found','perbanas')?></span></h1>
                </div>
            </div>
            <div class="row">
               <div class="col-xs-12 section-title">
             		<?php _e('The page you are looking can not be found.','perbanas'); ?>
             	</div>	
             </div>
      	</div>
    </div>
</div>
<?php get_footer(); ?>