<?php 
$menu_post_type = 'council'; // Karena sector merupakan bagian dari menu council
$taxonomy		= 'subsector';

get_header(); ?>

<!--
http://localhost/perbanas/sector/

Daftar nama-nama sektor seperti 
Organization Sektor
RnD Sektor
dll
-->

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
            
            <?php 
		
				wp_nav_menu( array(
					'theme_location'  => $menu_post_type . '-menu',
					'container'       => false,
					'menu_class'      => 'accordion list-unstyled',
					'menu_id'         => 'leftMenu'
				) );
			?>
		
            <ul class="accordion list-unstyled" id="leftMenu">
                <li class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle item" data-toggle="collapse" data-parent="#leftMenu" href="#collapseOne">
                            <i class="icon-home"></i> Central Board
                        </a>
                        <hr class="active" />
                    </div>
                    <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
                        <div class="accordion-inner">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="item">Sectors</a>
                                    <hr class="active" />
                                </li>
                                <li>
                                    <a href="#" class="item">Advisory Board</a>
                                    <hr />
                                </li>
                                <li>
                                    <a href="#" class="item">Supervisory Board</a>
                                    <hr />
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle item" data-toggle="collapse" data-parent="#leftMenu" href="#collapseTwo">
                            <i class="icon-th"></i> Regional Board
                        </a>
                        <hr />
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse" style="height: 0px; ">
                        <div class="accordion-inner">
                            <ul>
                                <li>
                                    <a href="#" class="item">Sectors</a>
                                    <hr />
                                </li>
                                <li>
                                    <a href="#" class="item">Advisory Board</a>
                                    <hr />
                                </li>
                                <li>
                                    <a href="#" class="item">Supervisory Board</a>
                                    <hr />
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle item" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
                            <i class="icon-th-list"></i> Secretariat
                        </a>
                        <hr />
                    </div>
                    <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
                        <div class="accordion-inner">
                            <ul>
                                <li>
                                    <a href="#" class="item">Sectors</a>
                                    <hr />
                                </li>
                                <li>
                                    <a href="#" class="item">Advisory Board</a>
                                    <hr />
                                </li>
                                <li>
                                    <a href="#" class="item">Supervisory Board</a>
                                    <hr />
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
            
        </div>
        <div class="col-xs-12 col-sm-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><span>Sectors</span></h1>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-md-3 block item">
                    <div class="img"><img class="img-responsive" src="content/img/sector02.png" /></div>
                    <div class="overlay">
                        <div class="overlay-bottom-aligned">
                            <h3>Organizational Sector</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 block item">
                    <div class="img"><img class="img-responsive" src="content/img/sector02.png" /></div>
                    <div class="overlay">
                        <div class="overlay-bottom-aligned">
                            <h3>Research and Development Sector</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 block item">
                    <div class="img"><img class="img-responsive" src="content/img/sector02.png" /></div>
                    <div class="overlay">
                        <div class="overlay-bottom-aligned">
                            <h3>Academic and Human Resource Sector</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 block item">
                    <div class="img"><img class="img-responsive" src="content/img/sector02.png" /></div>
                    <div class="overlay">
                        <div class="overlay-bottom-aligned">
                            <h3>Foreign Sector</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 block item">
                    <div class="img"><img class="img-responsive" src="content/img/sector02.png" /></div>
                    <div class="overlay">
                        <div class="overlay-bottom-aligned">
                            <h3>Law Sector</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-4">
		
	</div>
	<div class="col-md-8">
		<ul>
		<?php $sectors = get_terms( $taxonomy , array(
			'orderby'		=> 'name', 
			'order'			=> 'ASC',
			'hide_empty'	=> FALSE, 
		) );

		foreach ($sectors as $sector) :?>

			<li><a href="<?php echo get_term_link( $sector->slug, $sector->taxonomy ); ?>"><?php echo $sector->name; ?></a></li>

	<?php endforeach; ?>	
		</ul>
	</div>
</div>

<?php get_footer(); ?>