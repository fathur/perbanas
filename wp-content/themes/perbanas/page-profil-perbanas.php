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
                    <p>PERBANAS merupakan sebuah organisasi yang memayungi industri perbankan nasional, yang dapat menjadi jembatan bagi anggotanya untuk menyalurkan aspirasi perbankan kepada pemerintah, DPR dan Bank Indonesia.</p>
                    <p>Bagi anggotanya, keberadaan PERBANAS dapat menjadi wadah untuk ikut menyehatkan sektor perbankan nasional. Pemikiran-pemikiran aktif dan positif bagi pengembangan industri bukan hanya monopoli Bank Indonesia, tetapi juga dapat datang dari kalangan praktisi, tentunya melalui PERBANAS.</p>
                </div>
            </div>
            <div class="text-center">
                <div class="hr" id="history"></div>
            </div>
            <div class="row">
                <div id="history" class="anchor-with-offset"></div>
                <div class="subsection-title subsection-title-history hidden-sm hidden-md hidden-lg">
                    <div class="subsection-title-container">
                        <h2 class=""><span>H</span>istory</h2>
                    </div>
                </div>

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
                                        <p>Hari lahir Perhimpunan Bank-Bank Nasional Indonesia (PERBANA) sebagai wadah asosiasi bank-bank nasional di Indonesia.</p>
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
                                        <p>PERBANA membentuk Yayasan Pendidikan Kadar Bank (YPKB) sebagai upaya meningkatkan jumlah tenaga terdidik, khususnya dalam dunia perbankan nasional.</p>
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
                                        <p>Dalam Kongres II di Jakarta, PERBANA mengalami penyesuaian nama menjadi Organisasi Perusahaan Sejenis Perbankan Nasional Swasta (OPS PERBANAS).</p>
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
                                        <p>Dalam Kongres III, kata OPS dihilangkan, sehingga nama organisasi menjadi Perbankan Nasional Swasta (PERBANAS).</p>
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
                                        <p>PERBANAS mendirikan Yayasan Pendidikan PERBANAS untuk mengembangkan pendidikan formal dalam bentuk akademi, yakni Akademi Ilmu Perbankan Perbanas.</p>
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
                                        <p>Dalam Kongres VI, kepanjangan PERBANAS sendiri dirubah menjadi Perhimpunan Bank-Bank Nasional Swasta, namun singkatannya tidak berubah.</p>
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
                                        <p>Dalam Kongres XII, dimasukkan kata umum dalam kepanjangan PERBANAS menjadi Perhimpunan Bank-Bank Umum Nasional Swasta.</p>
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
                                        <p>Dalam Kongres XV, kata swasta dihilangkan dari kepanjangan PERBANAS sehingga menjadi Perhimpunan Bank-Bank Umum Nasional.</p>
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
                                        <p>Organisasi mengalami pergantian nama resmi menjadi Perhimpunan Bank-Bank Nasional, dengan singkatan yang sama, yakni PERBANAS.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div id="vision-mission" class="anchor-with-offset"></div>
            <div class="vision-mission-container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="vision vm-title text-center">
                            <h2>Visi</h2>
                            <hr />
                            <p>Menjadi organisasi yang dihormati dan disegani serta berperan aktif membangun industri perbankan yang profesional dan memberikan nilai tambah pada pembangunan ekonomi nasional.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class=" mission vm-title text-center">
                            <h2>Misi</h2>
                            <hr />
                            <p>Memberikan kontribusi dan nilai tambah yang maksimal bagi para <span style="font-style: italic">stakeholder</span>-nya.</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 column-background">
                        <div class="row">
                            <div class="col-xs-12 col-md-3 column">
                                <div class="vm-title text-center">
                                    <h2>Anggota</h2>
                                    <hr />
                                    <p>Mengembangkan kerjasama antar anggota yang saling menguntungkan agar tercipta suatu organisasi perbankan yang profesional.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3 column">
                                <div class="vm-title text-center">
                                    <h2>Pemerintah</h2>
                                    <hr />
                                    <p>Menjadi mitra yang profesional dalam mengembangkan industri perbankan nasional.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3 column">
                                <div class="vm-title text-center">
                                    <h2>Masyarakat</h2>
                                    <hr />
                                    <p>Meningkatkan kepercayaan masyarakat terhadap sektor perbankan serta mendorong peningkatan fungsi intermediasi perbankan.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3 column">
                                <div class="vm-title text-center">
                                    <h2>Lingkungan</h2>
                                    <hr />
                                    <p>Menciptakan keselarasan antar industri perbankan dengan lingkungannya <span style="font-style: italic">(good corporate citizenship)</span>.</p>
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
                        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/about-who-we-are-organization-structure-id.gif" />
                    </div>
                </div>
            </div>
            <div id="former-chairmen-title" class="anchor-with-offset"></div>
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="subsection-title-former-chairmen">
                        <span>Ketua</span> Sebelumnya</h2>
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
                            <h3>2006 - sekarang</h3>
                            <h4>Sigit Pramono</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-control-container">
                    <a class="carousel-control left" href="#former-chairmen" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#former-chairmen" data-slide="next">&rsaquo;</a>
                </div>
                <div class="carousel-indicators-container hidden-xs hidden-sm">
                    <div class="border"></div>
                    <ol class="carousel-indicators">
                        <li data-target="#former-chairmen" data-slide-to="0" class="active"></li>
                        <li data-target="#former-chairmen" data-slide-to=1></li>
                        <li data-target="#former-chairmen" data-slide-to=2></li>
                        <li data-target="#former-chairmen" data-slide-to=3></li>
                        <li data-target="#former-chairmen" data-slide-to=4></li>
                        <li data-target="#former-chairmen" data-slide-to=5></li>
                        <li data-target="#former-chairmen" data-slide-to=6></li>
                        <li data-target="#former-chairmen" data-slide-to=7></li>
                        <li data-target="#former-chairmen" data-slide-to=8></li>

                        <li data-target="#former-chairmen" data-slide-to=5></li>
                        <li data-target="#former-chairmen" data-slide-to=6></li>
                        <li data-target="#former-chairmen" data-slide-to=7></li>
                        <li data-target="#former-chairmen" data-slide-to=8></li>

                        <li data-target="#former-chairmen" data-slide-to=5></li>
                        <li data-target="#former-chairmen" data-slide-to=6></li>
                    </ol>
                </div>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>