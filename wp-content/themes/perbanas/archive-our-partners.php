<?php 

/**
 * Template untuk menampilkan arsip dari News.
 * 
 * @author Fostrom
 *
 * */

get_header(); ?>
<div class="container main-layout news">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
			<?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        
        <div class="col-xs-12 col-md-12 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Our partners','perbanas'); ?></span></h1>
                </div>
            </div>

            <?php 
                $partners = get_terms( 'sub-our-partner' , array(
                   
                    'hide_empty'    => TRUE
                ));

                foreach ($partners as $partner) : 
            ?>
            <div class="row"> 
                <div class="col-xs-12 section-title">
                    <h2>
                        <div></div>
                        <span><?php echo $partner->name; ?></span>
                    </h2>
                </div>
            </div>

            <?php 
            $loop = new WP_Query(array(
                'post_type' => get_post_type(),
                'nopaging'  => true,
                'tax_query' => array(
                    array(
                        'taxonomy'  => 'sub-our-partner',
                        'field'     => 'slug',
                        'terms'     => $partner->slug
                    ),
                ),
            ));
           

            if( $loop->have_posts() ) :
                while($loop->have_posts()) : $loop->the_post(); 

                

                ?>
                <div class="col-xs-6 col-sm-3" style="height:80px;">
                    <?php 
                    
                    $bank_link = get_post_meta(get_the_ID(), 'wpcf-ourpartner-website', true);
                    
                    if ($bank_link != '' || $bank_link != null) { ?>
                    
                    <a href="<?php echo get_post_meta(get_the_ID(), 'wpcf-ourpartner-website', true); ?>" target="__blank">
                        <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>
                    </a>
                    
                    <?php } else { ?>

                    <?php the_post_thumbnail('full', array('class'=>'img-responsive')); ?>

                    <?php } ?>
                   
                </div>
                <?php
               endwhile;
            endif; 
            
            wp_reset_query();
            wp_reset_postdata(); 


                endforeach; // end foreach ($partners as $partner) : 
            ?>

           

            
        </div>
    </div>
</div>
<?php get_footer(); ?>