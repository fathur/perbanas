<?php 

/**
 * 
 * */

$term = get_query_var( $wp_query->query_vars['taxonomy'] );

get_header(); ?>

<div class="container main-layout <?php echo ($term == 'education') ? 'perbanas-corner-education' : 'perbanas-corner-faq' ; ?>">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
		</div>
    </div>
    <div class="row">
        <nav class="col-xs-12 col-sm-3 sidebar-affix-container  hidden-xs hidden-sm">
            <div class="sidebar">
                <div class="sidebar-title">
                    <h2><?php _e('News &amp; Media','perbanas'); ?></h2>
                </div>
    			<?php echo perbanas_side_menu('news-menu', 'leftMenu'); ?>
            </div>
        </nav>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1>
                        <div></div>
                        <?php
                        if ( $term == 'education' ) {
                            echo '<span>'._e('Education','perbanas').'</span>';
                        }
                        elseif ( $term == 'faq' ) {
                            echo '<span>'._e('FAQ','perbanas').'</span>';
                        }
                        ?>
                    </h1>
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
