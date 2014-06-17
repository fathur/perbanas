<?php get_header(); 
$term = get_query_var( $wp_query->query_vars['taxonomy'] );
?>

<div class="container main-layout <?php echo ($term == 'education') ? 'perbanas-corner-education' : 'perbanas-corner-faq' ; ?>">
    <div class="row breadcrumbs hidden-xs">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
		</div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 hidden-xs hidden-sm sidebar hidden-xs">
            <div class="sidebar-title">
                <h2>News &amp; Media</h2>
            </div>
			<?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>Education</span></h1>
                </div>
            </div>
            <?php if ( $term == 'education' ) {
            	get_template_part('news','corner-education');
            } elseif ($term == 'faq') {
				get_template_part('news','corner-faq');
			}?>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>
