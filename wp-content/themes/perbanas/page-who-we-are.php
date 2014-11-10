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
            <!-- End History -->

            <!-- Former Chairman Begin -->
            <div id="former-chairmen-title" class="anchor-with-offset"></div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="subsection-title-former-chairmen">
                        <span>Former</span> Chairman</h2>
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
                            <h3>2006 - Present</h3>
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
                            <span class="carousel-indicators-year">1997-2000</span>
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
            <!-- Former Chairman End -->

            <!-- Begin VISI MISI -->
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
                        <!-- <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-who-we-are-organization-structure.gif" /> -->

                        <div id="orgstructure"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/raphael-min.js'; ?>"></script>
<script>
    
var rsr = Raphael(document.getElementById('orgstructure'), '612', '792');

var group_a = rsr.set();
var rect_aq = rsr.rect(374.587, 348.131, 1.213, 44.094).attr({x: '374.587',y: '348.131',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_aq');
var rect_ar = rsr.rect(414.496, 347.525, 1.214, 44.701).attr({x: '414.496',y: '347.525',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_ar');
var rect_as = rsr.rect(487.693, 347.525, 1.214, 44.701).attr({x: '487.693',y: '347.525',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_as');
var rect_at = rsr.rect(374.747, 391.013, 114.16, 1.213).attr({x: '374.747',y: '391.013',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_at');
var rect_au = rsr.rect(374.588, 528.685, 1.213, 44.094).attr({x: '374.588',y: '528.685',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_au');
var rect_av = rsr.rect(414.496, 528.38, 1.214, 44.309).attr({x: '414.496',y: '528.38',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_av');
var rect_aw = rsr.rect(487.693, 528.38, 1.214, 44.309).attr({x: '487.693',y: '528.38',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_aw');
var rect_ax = rsr.rect(374.748, 571.565, 114.159, 1.213).attr({x: '374.748',y: '571.565',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_ax');
var rect_ay = rsr.rect(374.587, 618.96, 1.213, 44.094).attr({x: '374.587',y: '618.96',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_ay');
var rect_az = rsr.rect(414.496, 618.657, 1.214, 44.387).attr({x: '414.496',y: '618.657',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_az');
var rect_ba = rsr.rect(487.693, 618.657, 1.214, 44.387).attr({x: '487.693',y: '618.657',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_ba');
var rect_bb = rsr.rect(374.747, 661.841, 114.16, 1.213).attr({x: '374.747',y: '661.841',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bb');
var rect_bc = rsr.rect(253.064, 77.299, 160.217, 1.213).attr({x: '253.064',y: '77.299',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bc');
var rect_bd = rsr.rect(253.671, 167.579, 59.472, 1.214).attr({x: '253.671',y: '167.579',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bd');
var rect_be = rsr.rect(269.445, 257.855, 105.771, 1.214).attr({x: '269.445',y: '257.855',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_be');
var rect_bf = rsr.rect(269.446, 348.131, 106.354, 1.214).attr({x: '269.446',y: '348.131',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bf');
var rect_bg = rsr.rect(253.672, 438.409, 166.428, 1.213).attr({x: '253.672',y: '438.409',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bg');
var rect_bh = rsr.rect(269.446, 528.685, 106.354, 1.213).attr({x: '269.446',y: '528.685',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bh');
var rect_bi = rsr.rect(269.446, 618.96, 106.354, 1.215).attr({x: '269.446',y: '618.96',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bi');
var rect_bj = rsr.rect(253.064, 709.237, 59.169, 1.213).attr({x: '253.064',y: '709.237',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bj');
var rect_bk = rsr.rect(50.458, 254.632, 203.82, 1.214).attr({x: '50.458',y: '254.632',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bk');
var rect_bl = rsr.rect(125.709, 197.718, 1.214, 115.304).attr({x: '125.709',y: '197.718',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bl');
var rect_bm = rsr.rect(374.587, 257.855, 1.213, 44.096).attr({x: '374.587',y: '257.855',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bm');
var rect_bn = rsr.rect(414.496, 257.553, 1.214, 43.791).attr({x: '414.496',y: '257.553',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bn');
var rect_bo = rsr.rect(560.286, 257.553, 1.213, 43.791).attr({x: '560.286',y: '257.553',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bo');
var rect_bp = rsr.rect(487.693, 257.553, 1.214, 43.791).attr({x: '487.693',y: '257.553',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bp');
var rect_bq = rsr.rect(253.064, 77.906, 1.214, 632.544).attr({x: '253.064',y: '77.906',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bq');
var rect_br = rsr.rect(269.448, 257.855, 1.214, 362.32).attr({x: '269.448',y: '257.855',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_br');
var rect_bs = rsr.rect(374.747, 300.737, 186.754, 1.214).attr({x: '374.747',y: '300.737',fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'rect_bs');
group_a.attr({'name': 'group_a'});
var group_b = rsr.set();
var circle_bt = rsr.circle(60, 255, 42).attr({fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_bt');
var text_bu = rsr.text(0, 0, 'Members').attr({fill: '#FFFFFF',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).transform("m1 0 0 1 39.0083 257.73").data('id', 'text_bu');
group_b.attr({'parent': 'group_a','name': 'group_b'});
var group_c = rsr.set();
var circle_bv = rsr.circle(192, 255, 42).attr({fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_bv');
var text_bw = rsr.text(0, 0, 'Chairman').attr({fill: '#FFFFFF',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).transform("m1 0 0 1 170.0342 257.73").data('id', 'text_bw');
group_c.attr({'parent': 'group_a','name': 'group_c'});
var group_d = rsr.set();
var circle_bx = rsr.circle(126, 335, 42).attr({fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_bx');
var text_by = rsr.text(0, 0, 'Advisory\nBoard').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 106.4683 332.3901").data('id', 'text_by');
group_d.attr({'parent': 'group_a','name': 'group_d'});
var group_e = rsr.set();
var circle_bz = rsr.circle(126, 174, 42).attr({fill: '#004987',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_bz');
var text_ca = rsr.text(0, 0, 'Supervisory\nBoard').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 99.5591 170.9321").data('id', 'text_ca');
group_e.attr({'parent': 'group_a','name': 'group_e'});
var group_f = rsr.set();
var circle_cb = rsr.circle(330, 77, 38).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cb');
group_f.attr({'parent': 'group_a','name': 'group_f'});
var group_g = rsr.set();
var text_cc = rsr.text(0, 0, 'Secretary\nGeneral').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 311.1855 74.688").data('id', 'text_cc');
group_g.attr({'parent': 'group_a','name': 'group_g'});
var group_h = rsr.set();
var circle_cd = rsr.circle(330, 258, 38).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cd');
group_h.attr({'parent': 'group_a','name': 'group_h'});
var group_i = rsr.set();
var text_ce = rsr.text(0, 0, 'Vice\nChairman 1').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 321.5752 255.2407").data('id', 'text_ce');
group_i.attr({'parent': 'group_a','name': 'group_i'});
var group_j = rsr.set();
var circle_cf = rsr.circle(330, 348, 38).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cf');
group_j.attr({'parent': 'group_a','name': 'group_j'});
var group_k = rsr.set();
var text_cg = rsr.text(0, 0, 'Vice\nChairman 2').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 321.5752 345.5171").data('id', 'text_cg');
group_k.attr({'parent': 'group_a','name': 'group_k'});
var group_l = rsr.set();
var circle_ch = rsr.circle(330, 439, 38).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_ch');
group_l.attr({'parent': 'group_a','name': 'group_l'});
var group_m = rsr.set();
var text_ci = rsr.text(0, 0, 'Vice\nChairman 3').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 321.5752 435.793").data('id', 'text_ci');
group_m.attr({'parent': 'group_a','name': 'group_m'});
var group_n = rsr.set();
var circle_cj = rsr.circle(415, 439, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cj');
group_n.attr({'parent': 'group_a','name': 'group_n'});
var group_o = rsr.set();
var text_ck = rsr.text(0, 0, 'Law and\nRegulations\nDivision').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 400.2227 432.7588").data('id', 'text_ck');
group_o.attr({'parent': 'group_a','name': 'group_o'});
var group_p = rsr.set();
var circle_cl = rsr.circle(415, 528, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cl');
group_p.attr({'parent': 'group_a','name': 'group_p'});
var group_q = rsr.set();
var text_cm = rsr.text(0, 0, 'Foreign\nAffairs \nDivision').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 401.459 523.0352").data('id', 'text_cm');
group_q.attr({'parent': 'group_a','name': 'group_q'});
var group_r = rsr.set();
var circle_cn = rsr.circle(415, 619, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cn');
group_r.attr({'parent': 'group_a','name': 'group_r'});
var group_s = rsr.set();
var text_co = rsr.text(0, 0, 'Public\nRelations\nDivision').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 404.1865 612.7051").data('id', 'text_co');
group_s.attr({'parent': 'group_a','name': 'group_s'});
var group_t = rsr.set();
var circle_cp = rsr.circle(488, 619, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cp');
group_t.attr({'parent': 'group_a','name': 'group_t'});
var group_u = rsr.set();
var text_cq = rsr.text(0, 0, 'Sharia\nBanking\nCompartment').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 478.1523 612.7051").data('id', 'text_cq');
group_u.attr({'parent': 'group_a','name': 'group_u'});
var group_v = rsr.set();
var circle_cr = rsr.circle(488, 530, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cr');
group_v.attr({'parent': 'group_a','name': 'group_v'});
var group_w = rsr.set();
var text_cs = rsr.text(0, 0, 'Regional\nDevelopment\nCompartment').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 473.8887 523.0352").data('id', 'text_cs');
group_w.attr({'parent': 'group_a','name': 'group_w'});
var group_x = rsr.set();
var circle_ct = rsr.circle(415, 348, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_ct');
group_x.attr({'parent': 'group_a','name': 'group_x'});
var group_y = rsr.set();
var text_cu = rsr.text(0, 0, 'Academic\nand Human\nResource\nDivision').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 397.5889 339.4487").data('id', 'text_cu');
group_y.attr({'parent': 'group_a','name': 'group_y'});
var group_z = rsr.set();
var circle_cv = rsr.circle(415, 258, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cv');
group_z.attr({'parent': 'group_a','name': 'group_z'});
var group_aa = rsr.set();
var text_cw = rsr.text(0, 0, 'Organization\nDivision').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 392.0586 255.2407").data('id', 'text_cw');
group_aa.attr({'parent': 'group_a','name': 'group_aa'});
var group_ab = rsr.set();
var circle_cx = rsr.circle(415, 77, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cx');
group_ab.attr({'parent': 'group_a','name': 'group_ab'});
var group_ac = rsr.set();
var text_cy = rsr.text(0, 0, 'Secretariat').attr({fill: '#FFFFFF',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).transform("m1 0 0 1 396.1699 78.8159").data('id', 'text_cy');
group_ac.attr({'parent': 'group_a','name': 'group_ac'});
var group_ad = rsr.set();
var circle_cz = rsr.circle(561, 258, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_cz');
group_ad.attr({'parent': 'group_a','name': 'group_ad'});
var group_ae = rsr.set();
var text_da = rsr.text(0, 0, 'Governance\nDivision').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 540.0693 255.2407").data('id', 'text_da');
group_ae.attr({'parent': 'group_a','name': 'group_ae'});
var group_af = rsr.set();
var circle_db = rsr.circle(488, 258, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_db');
group_af.attr({'parent': 'group_a','name': 'group_af'});
var group_ag = rsr.set();
var text_dc = rsr.text(0, 0, 'Research and\nDevelopment\nDivision').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 464.6787 255.2407").data('id', 'text_dc');
group_ag.attr({'parent': 'group_a','name': 'group_ag'});
var group_ah = rsr.set();
var circle_dd = rsr.circle(488, 348, 32).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_dd');
group_ah.attr({'parent': 'group_a','name': 'group_ah'});
var group_ai = rsr.set();
var text_de = rsr.text(0, 0, 'Technology\nDivision').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 467.4014 349.1587").data('id', 'text_de');
group_ai.attr({'parent': 'group_a','name': 'group_ai'});
var group_aj = rsr.set();
var circle_df = rsr.circle(330, 529, 38).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_df');
group_aj.attr({'parent': 'group_a','name': 'group_aj'});
var group_ak = rsr.set();
var text_dg = rsr.text(0, 0, 'Vice\nChairman 4').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 321.5752 526.0693").data('id', 'text_dg');
group_ak.attr({'parent': 'group_a','name': 'group_ak'});
var group_al = rsr.set();
var circle_dh = rsr.circle(330, 619, 42).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_dh');
group_al.attr({'parent': 'group_a','name': 'group_al'});
var group_am = rsr.set();
var text_di = rsr.text(0, 0, 'Vice\nChairman 5').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 321.5752 615.9883").data('id', 'text_di');
group_am.attr({'parent': 'group_a','name': 'group_am'});
var group_an = rsr.set();
var circle_dj = rsr.circle(330, 709, 42).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_dj');
group_an.attr({'parent': 'group_a','name': 'group_an'});
var group_ao = rsr.set();
var text_dk = rsr.text(0, 0, 'KMPP\n(Komite Masyarakat\nPerbankan Peduli)').attr({parent: 'group_a','stroke-width': '0','stroke-opacity': '1','fill': '#000000'}).transform("m1 0 0 1 318.3271 706.2646").data('id', 'text_dk');
group_ao.attr({'parent': 'group_a','name': 'group_ao'});
var group_ap = rsr.set();
var circle_dl = rsr.circle(330, 168, 38).attr({fill: '#009BDE',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).data('id', 'circle_dl');
var text_dm = rsr.text(0, 0, 'Treasurer').attr({fill: '#FFFFFF',parent: 'group_a','stroke-width': '0','stroke-opacity': '1'}).transform("m1 0 0 1 311.0498 170.4263").data('id', 'text_dm');
group_ap.attr({'parent': 'group_a','name': 'group_ap'});


var rsrGroups = [group_a,group_b,group_c,group_d,group_e,group_f,group_g,group_h,group_i,group_j,group_k,group_l,group_m,group_n,group_o,group_p,group_q,group_r,group_s,group_t,group_u,group_v,group_w,group_x,group_y,group_z,group_aa,group_ab,group_ac,group_ad,group_ae,group_af,group_ag,group_ah,group_ai,group_aj,group_ak,group_al,group_am,group_an,group_ao,group_ap];
group_a.push(
    rect_aq ,
    rect_ar ,
    rect_as ,
    rect_at ,
    rect_au ,
    rect_av ,
    rect_aw ,
    rect_ax ,
    rect_ay ,
    rect_az ,
    rect_ba ,
    rect_bb ,
    rect_bc ,
    rect_bd ,
    rect_be ,
    rect_bf ,
    rect_bg ,
    rect_bh ,
    rect_bi ,
    rect_bj ,
    rect_bk ,
    rect_bl ,
    rect_bm ,
    rect_bn ,
    rect_bo ,
    rect_bp ,
    rect_bq ,
    rect_br ,
    rect_bs 
);
group_b.push(
    circle_bt ,
    text_bu 
);
group_c.push(
    circle_bv ,
    text_bw 
);
group_d.push(
    circle_bx ,
    text_by 
);
group_e.push(
    circle_bz ,
    text_ca 
);
group_f.push(
    circle_cb 
);
group_g.push(
    text_cc 
);
group_h.push(
    circle_cd 
);
group_i.push(
    text_ce 
);
group_j.push(
    circle_cf 
);
group_k.push(
    text_cg 
);
group_l.push(
    circle_ch 
);
group_m.push(
    text_ci 
);
group_n.push(
    circle_cj 
);
group_o.push(
    text_ck 
);
group_p.push(
    circle_cl 
);
group_q.push(
    text_cm 
);
group_r.push(
    circle_cn 
);
group_s.push(
    text_co 
);
group_t.push(
    circle_cp 
);
group_u.push(
    text_cq 
);
group_v.push(
    circle_cr 
);
group_w.push(
    text_cs 
);
group_x.push(
    circle_ct 
);
group_y.push(
    text_cu 
);
group_z.push(
    circle_cv 
);
group_aa.push(
    text_cw 
);
group_ab.push(
    circle_cx 
);
group_ac.push(
    text_cy 
);
group_ad.push(
    circle_cz 
);
group_ae.push(
    text_da 
);
group_af.push(
    circle_db 
);
group_ag.push(
    text_dc 
);
group_ah.push(
    circle_dd 
);
group_ai.push(
    text_de 
);
group_aj.push(
    circle_df 
);
group_ak.push(
    text_dg 
);
group_al.push(
    circle_dh 
);
group_am.push(
    text_di 
);
group_an.push(
    circle_dj 
);
group_ao.push(
    text_dk 
);
group_ap.push(
    circle_dl ,
    text_dm 
);
    
</script>
<?php get_footer(); ?>