<?php 
$menu_post_type = 'member-bank'; // Karena sector merupakan bagian dari menu council
$taxonomy		= 'submemberbank';

get_header(); ?>

<!--
http://localhost/perbanas/sector/

Daftar nama-nama sektor seperti 
Organization Sektor
RnD Sektor
dll
-->

<div class="row">
	<div class="col-md-4">
		<?php // echo get_post_type(); 
		
		wp_nav_menu( array(
			'theme_location'  => $menu_post_type . '-menu'
		) );
		?>
	</div>
	<div class="col-md-8">
		<ul>
		<?php $sectors = get_terms( $taxonomy , array(
			'orderby'		=> 'name', 
			'order'			=> 'ASC',
			'hide_empty'	=> FALSE, 
		) );

		foreach ($sectors as $sector) :?>

			<li><a href="<?php echo get_site_url() . "/" . $taxonomy . "/" . $sector->slug; ?>"><?php echo $sector->name; ?></a></li>

	<?php endforeach; ?>	
		</ul>
	</div>
</div>

<?php get_footer(); ?>