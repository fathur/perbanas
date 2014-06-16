<?php get_header(); ?>

<div class="wrapper top-margin">
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 block section-title">
            <h1>
                <div></div><span>Contact</span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-8">
            <div id="map"></div>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="row">
                <div class="col-md-12 contact-logo hidden-sm hidden-xs">
                    <img width="171px" class="logo" src="<?php echo get_template_directory_uri(); ?>/img/LOGO_PERBANAS_EN.png">
                </div>
                <div class="col-xs-6 col-sm-3 col-md-12 contact-address">
                    <p>
                    <span class="contact-section-title hidden-md hidden-lg">Address:</span><br class="hidden-md hidden-lg" />
                    Griya Perbanas Lt. 1 <br/>
                    Jl. Perbanas Karet Kuningan, Kuningan, Setiabudi, <br/>
                    Jakarta Selatan, DKI Jakarta Raya
                    </p>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-12 contact-phone">
                    <p>
                        <span class="contact-section-title">Telp:</span><br />
                        +62217654321
                        <br class="hidden-sm hidden-md hidden-lg" />
                        <br class="hidden-sm hidden-md hidden-lg" />
                        <br class="hidden-sm hidden-md hidden-lg" />
                    </p>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-12 contact-fax">
                    <p>
                        <span class="contact-section-title">Fax:</span><br />
                        +62217654322
                    </p>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-12 contact-email">
                    <p>
                    <span class="contact-section-title">Email:</span><br />
                    info@perbanas.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row section-title">
        <div class="col-xs-12 block">
            <h1>
                <div></div><span>Send Us A Message</span>
            </h1>
        </div>
    </div>
    <div class="row contact-form">
    
    <?php echo do_shortcode('[contact-form-7 id="302" title="Contact form 1"]'); ?>
    
        
    </div>
</div>

<?php get_footer(); ?>