<?php 

/**
 * Halaman untuk menampilkan page contact (english version)
 * 
 * Belum ada cms nya jadi masih hardcode,
 * karena kemungkinan berubahnya masih kecil
 * 
 * @author Fostrom
 * 
 * */

get_header(); ?>

<div class="wrapper top-margin">
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 block section-title">
            <h1>
                <div></div><span><?php _e('Contact','perbanas'); ?></span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <!--<div id="map"></div>-->
            <iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zvqAkeRiK-hw.kAFZVNjYiH7o" id="map"></iframe>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="row">
                <div class="col-md-12 contact-logo hidden-sm hidden-xs">
                    <img width="171px" class="logo" src="<?php echo get_template_directory_uri(); ?>/img/LOGO_PERBANAS_EN.png">
                </div>
                <div class="col-xs-12 col-sm-3 col-md-12 contact-address">
                    <p>
                    <span class="contact-section-title hidden-md hidden-lg">Address:</span><br class="hidden-md hidden-lg" />
                    Griya Perbanas Lt. 1 <br/>
                    Jl. Perbanas Karet Kuningan, Kuningan, Setiabudi, <br/>
                    Jakarta Selatan, DKI Jakarta Raya
                    </p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-12 contact-phone">
                    <p>
                        <span class="contact-section-title">Telp:</span><br />
                        +62 21 5223038 | +62 21 5255731
                        <!--<br class="hidden-sm hidden-md hidden-lg" />
                        <br class="hidden-sm hidden-md hidden-lg" />
                        <br class="hidden-sm hidden-md hidden-lg" />-->
                    </p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-12 contact-fax">
                    <p>
                        <span class="contact-section-title">Fax:</span><br />
                        +62 21 5223037 | +62 21 5279359
                    </p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-12 contact-email">
                    <p>
                    <span class="contact-section-title">Email:</span><br />
                    sekretariat@perbanas.org
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- 
    <div class="row section-title">
        <div class="col-xs-12 block">
            <h1>
                <div></div><span>Send Us A Message</span>
            </h1>
        </div>
    </div>
    <div class="row contact-form">
    
    	<?php // echo do_shortcode('[contact-form-7 id="302" title="Contact form En"]'); ?>
        
    </div>
     -->
</div>

<?php get_footer(); ?>