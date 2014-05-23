<?php 
$taxonomy       = 'subsector';
$term           = get_query_var( $wp_query->query_vars['taxonomy'] );
$menu_post_type = 'council'; // Karena sector merupakan bagian dari menu council

get_header(); ?>

<!-- http://localhost/perbanas/subsector/law-sector/

menampilkan halaman per taxonomy sector
yang ditampilkan adalah nama orangnya -->

<div class="row">
    <div class="col-md-4">
        <?php // echo get_post_type(); 
        
        wp_nav_menu( array(
            'theme_location'  => $menu_post_type . '-menu'
        ) );
        ?>
    </div>
    <div class="col-md-8">
    <?php 

        wp_reset_query();

        $args = array('post_type' => get_post_type(),
                'tax_query' => array(
                    array(
                        'taxonomy'  => $taxonomy,
                        'field'     => 'slug',
                        'terms'     => $term,
                    ),
                ),
            );

        $loop = new WP_Query($args);

        if( $loop->have_posts() ) : 
        ?>

        <ul>
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
            <li><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>
        <?php endwhile; ?>
        </ul>

        <?php
        endif;
    ?> 
    </div>
</div>

<?php get_footer(); ?>