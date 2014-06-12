<?php 
$taxonomy       = 'subindustryguidelines';
$term           = get_query_var( $wp_query->query_vars['taxonomy'] );
$menu_post_type = 'industryguidelines'; 

get_header(); ?>


<div class="container main-layout industry-guidelines-syariah-business">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar">
            <div class="sidebar-title">
                <h2>Member Banks</h2>
            </div>
            
            <?php echo perbanas_side_menu('industryguidelines-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php echo get_term_by('slug', $term, $taxonomy)->name; ?></span></h1>
                </div>
            </div>
          
          	<!-- Content Here -->
			
        </div>
    </div>
</div>

<?php get_footer(); ?>