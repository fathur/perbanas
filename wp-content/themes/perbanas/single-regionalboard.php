<?php get_header(); ?>

<div class="container main-layout regional-board-inside">
    <div class="row breadcrumbs">
        <div class="col-xs-12">
            <a href="#" class="elem">Home</a> > <a href="#" class="elem">Council</a> > <a href="#" class="elem">Central Board</a> > <a href="#" class="elem">Sectors</a> > <a href="#" class="elem">Organizational Sector</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-3 sidebar">
            <div class="sidebar-title">
                <h2>Council</h2>
            </div>
           <?php echo perbanas_side_menu('council-menu', 'leftMenu'); ?>
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 text-right">
                    <select>
                        <option>Bali</option>
                        <option>Kalimantan Barat</option>
                        <option>Kalimantan Timur</option>
                        <option>Nusa Tenggara Barat</option>
                    </select>
                </div>
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>
                    <?php 
                  
                    if ( is_single() ) :
						the_title();
					else :
						the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
					endif;
					?>
                    </span></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
					<?php the_content(); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>