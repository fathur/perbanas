<?php get_header(); ?>


<div class="container main-layout about-who-we-are">
    <div class="row breadcrumbs hidden-xs hidden-sm">
        <div class="col-xs-12">
            <?php if(function_exists('bcn_display')) { bcn_display(); }?>
        </div>
    </div>
    <div class="row">
        <nav class="col-xs-12 col-sm-3 sidebar-affix-container  hidden-xs hidden-sm">
            <div class="sidebar">
                <div class="sidebar-title">
                    <h2><?php _e('About','perbanas'); ?></h2>
                </div>
                <?php echo perbanas_side_menu('about-menu', 'leftMenu'); ?>
            </div>
        </nav>
        <div class="col-xs-12 col-md-9 main-content-pane">
            <div class="row">
                <div class="col-xs-12 section-title">
                    <h1><div></div><span><?php _e('Who We Are','perbanas'); ?></span></h1>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-12">
                    <p>PERBANAS as the primary organization of the national banking industry, acts as a facilitator for its members to convey its aspirations concerning the banking industry, to the government, House of Representatives and Bank Indonesia. </p>
                    <p>To its members, PERBANAS is the foundation in which they can contribute to the development of the national banking sector. Active and positive ideas towards the industry’s development should not be monopolized by Bank Indonesia, but also come from practitioners of the industry, through PERBANAS. </p>
                </div>
            </div>
            <div class="text-center">
                <div class="hr" id="history"></div>
            </div>
            <div class="subsection-title subsection-title-history hidden-sm hidden-md hidden-lg">
                <div class="subsection-title-container">
                    <h2 class=""><span>H</span>istory</h2>
                </div>
            </div>

            <div class="row">
                <div id="history" class="anchor-with-offset"></div>
                <div class="col-xs-12">
                    <div class="timeline-outer-container">
                        <ul class="timeline-container animate">
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">1952</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description right">
                                    <div class="vertical-align">
                                        <!--<h3>Perbanas</h3>-->
                                        <p>Perhimpunan Bank-Bank Nasional Indonesia (PERBANA) was established as the main association for national banks in Indonesia.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">1953</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description left">
                                    <div class="vertical-align">
                                        <!--<h3>OPS Perbanas</h3>-->
                                        <p>PERBANA established the Yayasan Pendidikan Kadar Bank (YPKB) in an effort to increase the amount of well-educated manpower, especially in the national banking industry. </p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">1964</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description right">
                                    <div class="vertical-align">
                                        <!--<h3>Perbanas</h3>-->
                                        <p>At the 2nd Congress held in Jakarta, the name PERBANA was revised to Organisasi Perusahaan Sejenis Perbankan Nasional Swasta (OPS PERBANAS).</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">1967</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description left">
                                    <div class="vertical-align">
                                        <!--<h3>OPS Perbanas</h3>-->
                                        <p>At the 3rd Congress, the word OPS was omitted, and the name of the organization became Perbankan Nasional Swasta (PERBANAS).</p>
                                    </div>
                                </div>
                                <div class="description right hidden-xs">
                                    <div class="vertical-align">
                                        <div class="subsection-title text-center subsection-title-history">
                                            <div class="subsection-title-container">
                                                <h2 class=""><span>H</span>istory</h2>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </li>

                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">1968</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description right">
                                    <div class="vertical-align">
                                        <!--<h3>Perbanas</h3>-->
                                        <p>PERBANAS established the Yayasan Pendidikan PERBANAS to initiate formal education in the form of an academy, which was the Akademi Ilmu Perbankan Perbanas.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">1976</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description left">
                                    <div class="vertical-align">
                                        <!--<h3>OPS Perbanas</h3>-->
                                        <p>At the 6th Congress, the name of PERBANAS was revised once again to Perhimpunan Bank-Bank Nasional Swasta, however the acronym remained the same.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">1994</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description right">
                                    <div class="vertical-align">
                                        <!--<h3>Perbanas</h3>-->
                                        <p>At the 12th Congress, the word ‘umum’ was inserted to the name of PERBANAS and it then became Perhimpunan Bank-Bank Umum Nasional Swasta.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">2003</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description left">
                                    <div class="vertical-align">
                                        <!--<h3>OPS Perbanas</h3>-->
                                        <p>At the 15th Congress, the word ‘swasta’ was omitted from the name of the organization, thus becoming Perhimpunan Bank-Bank Umum Nasional. The acronym remained the same.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">2012</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description right">
                                    <div class="vertical-align">
                                        <!--<h3>Perbanas</h3>-->
                                        <p>The name of the organization was changed to Perhimpunan Bank-Bank Nasional while keeping the acronym, PERBANAS.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">2014</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description right">
                                    <div class="vertical-align">
                                        <!--<h3>Perbanas</h3>-->
                                        <p>During the latest Congress in 2014, PERBANAS once again revised its name to Perhimpunan Bank Nasional. The acronym remains the same.</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
            <div id="vision-mission" class="anchor-with-offset"></div>
            <div class="vision-mission-container" id="vision-mission">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="vision vm-title text-center">
                            <h2>Vision</h2>
                            <hr />
                            <p>To become a respected organization and play an active role in building the professional banking industry, as well as making a positive contribution to the national economic development.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class=" mission vm-title text-center">
                            <h2>Mission</h2>
                            <hr />
                            <p>Provide maximum benefits for its stakeholders.</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 column-background">
                        <div class="row">
                            <div class="col-xs-12 col-md-3 column">
                                <div class="vm-title text-center">
                                    <h2>Members</h2>
                                    <hr />
                                    <p>Increase cooperation among members which are mutually beneficial in order to build a professional banking organization.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3 column">
                                <div class="vm-title text-center">
                                    <h2>Government</h2>
                                    <hr />
                                    <p>Become a professional partner in developing the national banking industry.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3 column">
                                <div class="vm-title text-center">
                                    <h2>Public</h2>
                                    <hr />
                                    <p>Increase public trust towards the banking sector as well as increasing the function of banking intermediation.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3 column">
                                <div class="vm-title text-center">
                                    <h2>Environment</h2>
                                    <hr />
                                    <p id="organization-structure">Create harmony between the banking industry and the environment <emph>(good corporate citizenship).</emph></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="organization-structure" class="anchor-with-offset"></div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="subsection-title text-center hide">
                        <div class="subsection-title-container">
                            <h2>Organization</h2>
                            <hr />
                            <h2>Structure</h2>
                        </div>
                    </div>
                    <div>
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-who-we-are-organization-structure.gif" />
                    </div>
                </div>
            </div>
            <div id="former-chairmen-title" class="anchor-with-offset"></div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="subsection-title-former-chairmen">
                        <span>Former</span> Chairmen</h2>
                </div>
            </div>

            <div id="former-chairmen" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Rachmat_Moeljomiseno.jpg" />
                        <div class="desc">
                            <h3>1952 - 1957</h3>
                            <h4>Rachmat Moeljomiseno</h4>
                        </div>
                    </div>
                    <div class="item">
                        <!--<img src="<?php echo get_template_directory_uri(); ?>/img/chairman-1.png" />-->
                        <div class="desc">
                            <h3>1957 - 1958</h3>
                            <h4>Parmin Martokoesoemo</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Sadjito.jpg" />
                        <div class="desc">
                            <h3>1958 - 1963</h3>
                            <h4>Sadjito</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Selamat_Ginting.jpg" />
                        <div class="desc">
                            <h3>1963 - 1967</h3>
                            <h4>Selamat Ginting</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/H_Tachjar.jpg" />
                        <div class="desc">
                            <h3>1967 - 1970</h3>
                            <h4>H. Tachjar</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Idham.jpg" />
                        <div class="desc">
                            <h3>1970 - 1973</h3>
                            <h4>Idham</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Sarono.jpg" />
                        <div class="desc">
                            <h3>1973 - 1982</h3>
                            <h4>Sarono</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/I_Nyoman_Moena.jpg" />
                        <div class="desc">
                            <h3>1982 - 1988</h3>
                            <h4>I Nyoman Moena</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Abdulgani.jpg" />
                        <div class="desc">
                            <h3>1988 - 1991</h3>
                            <h4>Abdulgani</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Trenggono_Purwosuprodjo.jpg" />
                        <div class="desc">
                            <h3>1991 - 1997</h3>
                            <h4>Trenggono Purwosuprodjo</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Atmosardjono_Subowo.jpg" />
                        <div class="desc">
                            <h3>1997 - 2000</h3>
                            <h4>Atmosardjono Subowo</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Gunarni_Soeworo.jpg" />
                        <div class="desc">
                            <h3>2000 - 2003</h3>
                            <h4>Gunarni Soeworo</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Agus_Martowardojo.jpg" />
                        <div class="desc">
                            <h3>2003 - 2006</h3>
                            <h4>Agus Martowardojo</h4>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Sigit_Pramono.jpg" />
                        <div class="desc">
                            <h3>2006 - Now</h3>
                            <h4>Sigit Pramono</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-control-container hidden-xs hidden-sm">
                    <a class="carousel-control left" href="#former-chairmen" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#former-chairmen" data-slide="next">&rsaquo;</a>
                </div>
                <div class="carousel-indicators-container hidden-xs hidden-sm">
                    <div class="border"></div>
                    <ol class="carousel-indicators">
                        <li data-target="#former-chairmen" data-slide-to="0" class="active">
                            <span class="carousel-indicators-year">1952-1957</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=1>
                            <span class="carousel-indicators-year">1957-1958</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=2>
                            <span class="carousel-indicators-year">1958-1963</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=3>
                            <span class="carousel-indicators-year">1963-1967</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=4>
                            <span class="carousel-indicators-year">1967-1970</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=5>
                            <span class="carousel-indicators-year">1970-1973</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=6>
                            <span class="carousel-indicators-year">1973-1982</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=7>
                            <span class="carousel-indicators-year">1982-1988</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=8>
                            <span class="carousel-indicators-year">1988-1991</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=9>
                            <span class="carousel-indicators-year">1991-1997</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=10>
                            <span class="carousel-indicators-year">19997-2000</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=11>
                            <span class="carousel-indicators-year">2000-2003</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=12>
                            <span class="carousel-indicators-year">2003-2006</span>
                        </li>
                        <li data-target="#former-chairmen" data-slide-to=13>
                            <span class="carousel-indicators-year">2006-Now</span>
                        </li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>