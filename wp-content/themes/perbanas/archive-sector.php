<?php 
$menu_post_type = 'council'; // Karena sector merupakan bagian dari menu council
$taxonomy		= 'subsector';

get_header(); ?>

<div class="container main-layout sectors">
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
                <div class="col-xs-12 section-title">
                    <h1><span>Sectors</span></h1>
                </div>
            </div>
            <div class="row ">
            
				
				<?php $sectors = get_terms( $taxonomy , array(
					'orderby'		=> 'name', 
					'order'			=> 'ASC',
					'hide_empty'	=> FALSE, 
				) );
				
				foreach ($sectors as $sector) :?>
				<div class="col-sm-6 col-md-3 block item">
					<div class="img">						
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/sector02.png" />						
					</div>
					
					<div class="overlay">
						<div class="overlay-bottom-aligned">
							<h3><?php echo $sector->name; ?></h3>
						</div>
					</div>
					<a href="<?php echo get_term_link( $sector->slug, $sector->taxonomy ); ?>">L</a>
				</div>			
				<?php endforeach; ?>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>