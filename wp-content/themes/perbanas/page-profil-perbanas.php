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
                <div class="hr"></div>
            </div>

            <div class="subsection-title subsection-title-history hidden-sm hidden-md hidden-lg">
                <div class="subsection-title-container">
                    <h2 class=""><span>H</span>istory</h2>
                </div>
            </div>

            <div class="row">
               

                <div id="history" class="anchor-with-offset-history"></div>


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
                            <li class="item">
                                <h3 class="bubble">
                                    <span class="text">2014</span>
                                    <span class="background"></span>
                                </h3>
                                <div class="description right">
                                    <div class="vertical-align">
                                        <p>Dalam kongres tahun 2014, PERBANAS mengalami perubahan kepanjangan nama, sehingga menjadi Perhimpunan Bank Nasional.</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
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
                            <h3>2006 - Sekarang</h3>
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
                            <span class="carousel-indicators-year">2006-Sekarang</span>
                        </li>
                    </ol>
                </div>
            </div>


            <div class="vision-mission-container" id="vision-mission">
                <div class="row">
                    
                    <div id="anchor-vision-mission" class="anchor-with-offset-vision-mission"></div>
                    
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
            <div id="organization-structure" class="anchor-with-offset-organization-structure"></div>
            <div class="row">
                <div class="col-xs-12">
                    
                    <div class="text-center orgstructure-chart ">
                        
                        <h2>Struktur Organisasi</h2>
                        <hr/>
                        <h3>Perbanas 2012 -2016</h3>

                        <div id="orgstruct"></div>
                        
                    </div>
                </div>

                <div id="modal-orgstruct" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="modallabel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button class="close" type="button" data-dismiss="modal">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                
                                <!-- Title Here -->
                                <h4></h4>

                            </div>

                            <!-- Content here -->
                            <div class="modal-body"></div>

                            <div class="modal-footer">
                                <a class="btn btn-default" target="__blank" href="#">Read More</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            

        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/js/raphael-min.js'; ?>"></script>
<script>
  window.onload = function() {
    var os = new Raphael('orgstruct','848','1338');

    // Set variabel
    var r1  = 60, // radius circle 1
        r2  = 55, // radius circle 2
        r3  = 48,

        darkBlue    = '#004987',
        lightBlue   = '#009CDF',

        rightOffset         = 420,
        topOffset           = 130,
        abstraxMarginSide   = 120,
        marginBottom        = 20,
        
        darkBlueCircleAttr = {
            fill: darkBlue,
            stroke: darkBlue,
            cursor: 'pointer'
        },
        darkBlueTextAttr = {
            fill: '#FFF',
            'font-size': 14,
            cursor: 'pointer'
        },

        lightBlueCircleAttr = {
            fill: lightBlue,
            stroke: lightBlue,
            cursor: 'pointer'
        },
        lightBlueTextAttr = {
            fill: '#FFF',
            'font-size': 14,
            cursor: 'pointer'
        },
        lightBlueSmallTextAttr = {
            fill: '#FFF',
            'font-size': 12,
            cursor: 'pointer'
        };



    // -------------------
    // Supervisory Board
    // -------------------
    var supervisoryBoardX = 150,
        supervisoryBoardY = 60 + topOffset,
        supervisoryBoardModal = function() {
            loadModal('Supervisory Board','Some Content here','/lingkup-kerja#supervisory-board');
        },
        supervisoryBoardCircle = os.circle(supervisoryBoardX, supervisoryBoardY, r1)
            .attr(darkBlueCircleAttr)
            .click(function() {
                supervisoryBoardModal();
            }),
        supervisoryBoardText = os.text(supervisoryBoardX,supervisoryBoardY,'Supervisory \n Board')
            .attr(darkBlueTextAttr)
            .click(function() {
                supervisoryBoardModal();
            });

    // -------------------
    // Members
    // -------------------
    var membersX = 60,
        membersY = 180 + topOffset,
        membersModal = function() {
            loadModal('Members','Some Content here','/lingkup-kerja#members');
        },
        membersCircle = os.circle(membersX, membersY, r1)
            .attr(darkBlueCircleAttr)
            .click(function() {
                membersModal();
            }),
        membersText = os.text(membersX,membersY,'Members')
            .attr(darkBlueTextAttr)
            .click(function() {
                membersModal();
            });

    // -------------------
    // Chairman
    // -------------------
    var chairmanX = 240,
        chairmanY = 180 + topOffset,
        chairmanModal = function() {
            loadModal('Chairman','','/lingkup-kerja#chairman');
        },
        chairmanCircle = os.circle(chairmanX, chairmanY, r1)
            .attr(darkBlueCircleAttr)
            .click(function() {
                chairmanModal();
            }),
        chairmanText = os.text(chairmanX,chairmanY,'Chairman')
            .attr(darkBlueTextAttr)
            .click(function() {
                chairmanModal();
            });

    // -------------------
    // Advisory Board
    // -------------------
    var advisoryBoardX = 150,
        advisoryBoardY = 300 + topOffset,
        advisoryBoardModal = function() {
            loadModal('Advisory Board','','/lingkup-kerja#advisory-board');
        },
        advisoryBoardCircle = os.circle(advisoryBoardX, advisoryBoardY, r1)
            .attr(darkBlueCircleAttr)
            .click(function() {
                advisoryBoardModal();
            }),
        advisoryBoardText = os.text(advisoryBoardX,advisoryBoardY,'Advisory \n Board')
            .attr(darkBlueTextAttr)
            .click(function() {
                advisoryBoardModal();
            });


    // Line Members to chairman
    os.path("M"+(2*r1)+","+membersY+"H"+(chairmanX-membersX)).attr({stroke:darkBlue});
    os.path("M"+supervisoryBoardX+","+(supervisoryBoardY+r1)+"V"+(advisoryBoardY-r1)).attr({stroke:darkBlue});
    os.path("M"+(chairmanX+r1)+","+chairmanY+"H"+( (5*r1)+15 ));



    // -------------------
    // Secretary General
    // -------------------
    var secretaryGeneralX = 0 + rightOffset,
        secretaryGeneralY = r2,
        secretaryModal = function() {
            loadModal('Secretary General','','/lingkup-kerja#secretary-general');
        },
        secretaryGeneralCircle = os.circle(secretaryGeneralX, secretaryGeneralY, r2)
            .click(function() {
                secretaryModal();
            }),
        secretaryGeneralText = os.text(secretaryGeneralX,secretaryGeneralY,'Secretary \n General')
            .click(function() {
                secretaryModal();
            });
    // line
    os.path("M"+(secretaryGeneralX-r2)+","+secretaryGeneralY+
            "H"+(rightOffset-r2-50)+
            "V"+( (15*r2)+(7*marginBottom) ))
        .attr({stroke:darkBlue});


    // -------------------
    // Treasurer
    // -------------------
    var treasurerX = 0 + rightOffset,
        treasurerY = (3*r2)+marginBottom,
        treasurerModal = function() {
            loadModal('Trasurer','','/lingkup-kerja#treasurer');
        },
        treasurerCircle = os.circle(treasurerX, treasurerY, r2)
            .click(function() {
                treasurerModal();
            }),
        treasurerText = os.text(treasurerX,treasurerY,'Treasurer')
            .click(function() {
                treasurerModal();
            });
    // line
    os.path("M"+(treasurerX-r2)+","+treasurerY+
            "H"+(rightOffset-r2-50))
        .attr({stroke:darkBlue});


    // -------------------
    // Vice Chairman 1
    // -------------------
    var viceChairman1X = 0 + rightOffset,
        viceChairman1Y = (5*r2)+(2*marginBottom),
        viceChairman1Modal = function() {
            loadModal('Vice Chairman 1','','/lingkup-kerja#vice-chairman-1');
        },
        viceChairman1Circle = os.circle(viceChairman1X, viceChairman1Y, r2)
            .click(function() {
                viceChairman1Modal();
            }),
        viceChairman1Text = os.text(viceChairman1X,viceChairman1Y,'Vice \n Chairman 1')
            .click(function() {
                viceChairman1Modal();
            });
    // line
    os.path("M"+(viceChairman1X-r2)+","+viceChairman1Y+
            "H"+(rightOffset-r2-25)+
            "V"+((13*r2)+(6*marginBottom)))
        .attr({stroke:darkBlue});
    os.path("M"+(viceChairman1X+r2)+","+viceChairman1Y+
            "H"+(viceChairman1X+r2+7)+
            "V"+(viceChairman1Y+r3+15)+
            "H"+((3*abstraxMarginSide) + rightOffset))
        .attr({stroke:darkBlue});

    // -------------------
    // Vice Chairman 2
    // -------------------
    var viceChairman2X = 0 + rightOffset,
        viceChairman2Y = (7*r2)+(3*marginBottom),
        viceCHairman2Modal = function() {
            loadModal('Vice Chairman 2','','/lingkup-kerja#vice-chairman-2');
        },
        viceChairman2Circle = os.circle(viceChairman2X, viceChairman2Y, r2)
            .click(function() {
                viceCHairman2Modal();
            }),
        viceChairman2Text = os.text(viceChairman2X,viceChairman2Y,'Vice \n Chairman 2')
            .click(function() {
                viceCHairman2Modal();
            });
    // line
    os.path("M"+(viceChairman2X-r2)+","+viceChairman2Y+"H"+(rightOffset-r2-25)).attr({stroke:darkBlue});
    os.path("M"+(viceChairman2X+r2)+","+viceChairman2Y+
            "H"+(viceChairman2X+r2+7)+
            "V"+(viceChairman2Y+r3+15)+
            "H"+((2*abstraxMarginSide) + rightOffset))
        .attr({stroke:darkBlue});

    // -------------------
    // Vice Chairman 3
    // -------------------
    var viceChairman3X = 0 + rightOffset,
        viceChairman3Y = (9*r2)+(4*marginBottom),
        viceChairman3Modal = function() {
            loadModal('Vice Chairman 3','','/lingkup-kerja#vice-chairman-3');
        },
        viceChairman3Circle = os.circle(viceChairman3X, viceChairman3Y, r2)
            .click(function() {
                viceChairman3Modal();
            }),
        viceChairman3Text = os.text(viceChairman3X,viceChairman3Y,'Vice \n Chairman 3')
            .click(function() {
                viceChairman3Modal();
            });
    // line
    os.path("M"+(viceChairman3X-r2)+","+viceChairman3Y+"H"+(rightOffset-r2-50)).attr({stroke:darkBlue});

    // -------------------
    // Vice Chairman 4
    // -------------------
    var viceChairman4X = 0 + rightOffset,
        viceChairman4Y = (11*r2)+(5*marginBottom),
        viceChairman4Modal = function() {
            loadModal('Vice Chairman 4','','/lingkup-kerja#vice-chairman-4');
        },
        viceChairman4Circle = os.circle(viceChairman4X, viceChairman4Y, r2)
            .click(function() {
                viceChairman4Modal();
            }),
        viceChairman4Text = os.text(viceChairman4X,viceChairman4Y,'Vice \n Chairman 4')
            .click(function() {
                viceChairman4Modal();
            });
    // line
    os.path("M"+(viceChairman4X-r2)+","+viceChairman4Y+"H"+(rightOffset-r2-25)).attr({stroke:darkBlue});
    os.path("M"+(viceChairman4X+r2)+","+viceChairman4Y+
            "H"+(viceChairman4X+r2+7)+
            "V"+(viceChairman4Y+r3+15)+
            "H"+((2*abstraxMarginSide) + rightOffset))
        .attr({stroke:darkBlue});

    // -------------------
    // Vice Chairman 5
    // -------------------
    var viceChairman5X = 0 + rightOffset,
        viceChairman5Y = (13*r2)+(6*marginBottom),
        viceChairman5Modal = function() {
            loadModal('Vice Chairman 5','','/lingkup-kerja#vice-chairman-5');
        },
        viceChairman5Circle = os.circle(viceChairman5X, viceChairman5Y, r2)
            .click(function() {
                viceChairman5Modal();
            }),
        viceChairman5Text = os.text(viceChairman5X,viceChairman5Y,'Vice \n Chairman 5')
            .click(function() {
                viceChairman5Modal();
            });
    // line
    os.path("M"+(viceChairman5X-r2)+","+viceChairman5Y+"H"+(rightOffset-r2-25)).attr({stroke:darkBlue});
    os.path("M"+(viceChairman5X+r2)+","+viceChairman5Y+
            "H"+(viceChairman5X+r2+7)+
            "V"+(viceChairman5Y+r3+15)+
            "H"+((2*abstraxMarginSide) + rightOffset))
        .attr({stroke:darkBlue});

    // -------------------
    // KMPP
    // -------------------
    var kmppX = 0 + rightOffset,
        kmppY = (15*r2)+(7*marginBottom),
        kmppModal = function() {
            loadModal('KMPP','','/lingkup-kerja#kmpp');
        },
        kmppCircle = os.circle(kmppX, kmppY, r2)
            .click(function() {
                kmppModal();
            }),
        kmppText = os.text(kmppX,kmppY,'KMPP')
            .click(function() {
                kmppModal();
            });
    // line
    os.path("M"+(kmppX-r2)+","+kmppY+"H"+(rightOffset-r2-50)).attr({stroke:darkBlue});


    


    // -------------------
    // Secretariat
    // -------------------
    var secretariatX = abstraxMarginSide + rightOffset,
        secretariatY = r2,
        secretariatModal = function() {
            loadModal('Secretariat','','/lingkup-kerja#secretariat');
        },
        secretariatCircle = os.circle(secretariatX, secretariatY, r3)
            .click(function() {
                secretariatModal();
            }),
        secretariatText = os.text(secretariatX,secretariatY,'Secretariat')
            .click(function() {
                secretariatModal();
            });
    // line
    os.path("M"+(secretariatX-r3)+","+secretariatY+"H"+(rightOffset+r2)).attr({stroke:darkBlue});


    // -------------------
    // Organization Division
    // -------------------
    var orgDivisionX = abstraxMarginSide + rightOffset,
        orgDivisionY = (5*r2)+(2*marginBottom),
        orgDivisionModal = function() {
            loadModal('Organization Division','','/lingkup-kerja#organization-division');
        },
        orgDivisionCircle = os.circle(orgDivisionX, orgDivisionY, r3)
            .click(function() {
                orgDivisionModal();
            }),
        orgDivisionText = os.text(orgDivisionX,orgDivisionY,'Organization\nDivision')
            .click(function() {
                orgDivisionModal();
            });

    os.path("M"+orgDivisionX+","+(orgDivisionY+r3)+"V"+(orgDivisionY+r3+15)).attr({stroke:darkBlue});

    // -------------------
    // Academic and Human Resource Division
    // -------------------
    var acadHRDX = abstraxMarginSide + rightOffset,
        acadHRDY = (7*r2)+(3*marginBottom),
        acadHRDModal = function() {
            loadModal('Academic and Human Resource Division','','/lingkup-kerja#academic-and-human-resource-division');
        },
        acadHRDCircle = os.circle(acadHRDX, acadHRDY, r3)
            .click(function() {
                acadHRDModal();
            }),
        acadHRDText = os.text(acadHRDX,acadHRDY,'Academic\nand\nHuman\nResource\nDivision')
            .click(function() {
                acadHRDModal();
            });
    os.path("M"+acadHRDX+","+(acadHRDY+r3)+"V"+(acadHRDY+r3+15)).attr({stroke:darkBlue});


    // -------------------
    // Law and Regulation Division
    // -------------------
    var lawAndRegulationX = abstraxMarginSide + rightOffset,
        lawAndRegulationY = (9*r2)+(4*marginBottom),
        lawAndRegulationModal = function() {
            loadModal('Law and Regulation Division','','/lingkup-kerja#law-and-regulation-division');
        },
        lawAndRegulationCircle = os.circle(lawAndRegulationX, lawAndRegulationY, r3)
            .click(function() {
                lawAndRegulationModal();
            }),
        lawAndRegulationText = os.text(lawAndRegulationX,lawAndRegulationY,'Law and\nRegulation\nDivision')
            .click(function() {
                lawAndRegulationModal();
            });
    // line
    os.path("M"+(lawAndRegulationX-r3)+","+lawAndRegulationY+"H"+(rightOffset+r2)).attr({stroke:darkBlue});

    // -------------------
    // Foreign Affairs Division
    // -------------------
    var foreignAffairsX = abstraxMarginSide + rightOffset,
        foreignAffairsY = (11*r2)+(5*marginBottom),
        foreignAffairsModal = function() {
            loadModal('Foreign Affairs Division','','/lingkup-kerja#foreign-affairs-division');
        },
        foreignAffairsCircle = os.circle(foreignAffairsX, foreignAffairsY, r3)
            .click(function() {
                foreignAffairsModal();
            }),
        foreignAffairsText = os.text(foreignAffairsX,foreignAffairsY,'Foreign Affairs\nDivision')
            .click(function() {
                foreignAffairsModal();
            });
    os.path("M"+foreignAffairsX+","+(foreignAffairsY+r3)+"V"+(foreignAffairsY+r3+15)).attr({stroke:darkBlue});


    // -------------------
    // Public Relation Division
    // -------------------
    var PRX = abstraxMarginSide + rightOffset,
        PRY = (13*r2)+(6*marginBottom),
        PRModal = function() {
            loadModal('Public Relation Division','','/lingkup-kerja#pr-division');
        },
        PRCircle = os.circle(PRX, PRY, r3)
            .click(function() {
                PRModal();
            }),
        PRText = os.text(PRX,PRY,'Public Relation\nDivision')
            .click(function() {
                PRModal();
            });
    os.path("M"+PRX+","+(PRY+r3)+"V"+(PRY+r3+15)).attr({stroke:darkBlue});


    // -------------------
    // Research and Development Division
    // -------------------
    var rndX = (2*abstraxMarginSide) + rightOffset,
        rndY = (5*r2)+(2*marginBottom),
        rndModal = function() {
            loadModal('Research and Development Division','','/lingkup-kerja#rnd-divsion');
        },
        rndCircle = os.circle(rndX, rndY, r3)
            .click(function() {
                rndModal();
            }),
        rndText = os.text(rndX,rndY,'Research and\nDevelopment\nDivision')
            .click(function() {
                rndModal();
            });

    os.path("M"+rndX+","+(rndY+r3)+"V"+(rndY+r3+15)).attr({stroke:darkBlue});


    // -------------------
    // Technology Division
    // -------------------
    var techX = (2*abstraxMarginSide) + rightOffset,
        techY = (7*r2)+(3*marginBottom),
        techModal = function() {
            loadModal('Technology Division','','/lingkup-kerja#tech-division');
        },
        techCircle = os.circle(techX, techY, r3)
            .click(function() {
                techModal();
            }),
        techText = os.text(techX,techY,'Technology\nDivision')
            .click(function() {
                techModal();
            });

    os.path("M"+techX+","+(techY+r3)+"V"+(techY+r3+15)).attr({stroke:darkBlue});


    // -------------------
    // Regional\nDevelopment\nCompartment
    // -------------------
    var rdcX = (2*abstraxMarginSide) + rightOffset,
        rdcY = (11*r2)+(5*marginBottom),
        rdcModal = function() {
            loadModal('Regional Development Compartment','','/lingkup-kerja#regional-development-compartment');
        },
        rdcCircle = os.circle(rdcX, rdcY, r3)
            .click(function() {
                rdcModal();
            }),
        rdcText = os.text(rdcX,rdcY,'Regional\nDevelopment\nCompartment')
            .click(function() {
                rdcModal();
            });
    os.path("M"+rdcX+","+(rdcY+r3)+"V"+(rdcY+r3+15)).attr({stroke:darkBlue});


    // -------------------
    // Sharia Banking Compartment
    // -------------------
    var shariaX = (2*abstraxMarginSide) + rightOffset,
        shariaY = (13*r2)+(6*marginBottom),
        shariaModal = function() {
            loadModal('Sharia Banking Compartment','','/lingkup-kerja#sharia-banking-compartment');
        },
        shariaCircle = os.circle(shariaX, shariaY, r3)
            .click(function() {
                shariaModal();
            }),
        shariaText = os.text(shariaX,shariaY,'Sharia\nBanking\nCompartment')
            .click(function() {
                shariaModal();
            });
    os.path("M"+shariaX+","+(shariaY+r3)+"V"+(shariaY+r3+15)).attr({stroke:darkBlue});


    // -------------------
    // Governance Division
    // -------------------
    var governanceX = (3*abstraxMarginSide) + rightOffset,
        governanceY = (5*r2)+(2*marginBottom),
        governanceModal = function() {
            loadModal('Governance Division','','/lingkup-kerja#governance-division');
        },
        governanceCircle = os.circle(governanceX, governanceY, r3)
            .click(function() {
                governanceModal();
            }),
        governanceText = os.text(governanceX,governanceY,'Governance\nDivision')
            .click(function() {
                governanceModal();
            });

    os.path("M"+governanceX+","+(governanceY+r3)+"V"+(governanceY+r3+15)).attr({stroke:darkBlue});



    var lingBiruMudaBesar = os.set();
    lingBiruMudaBesar.push(
        secretaryGeneralCircle,
        treasurerCircle,
        viceChairman1Circle,
        viceChairman2Circle,
        viceChairman3Circle,
        viceChairman4Circle,
        viceChairman5Circle,
        kmppCircle
    );
    lingBiruMudaBesar.attr(lightBlueCircleAttr);

    var txtBiruMudaBesar = os.set();
    txtBiruMudaBesar.push(
        secretaryGeneralText,
        treasurerText,
        viceChairman1Text,
        viceChairman2Text,
        viceChairman3Text,
        viceChairman4Text,
        viceChairman5Text,
        kmppText
    );
    txtBiruMudaBesar.attr(lightBlueTextAttr);

    var lingBiruMudaKecil = os.set();
    lingBiruMudaKecil.push(
        secretariatCircle,
        orgDivisionCircle,
        acadHRDCircle,
        lawAndRegulationCircle,
        foreignAffairsCircle,
        PRCircle,
        rndCircle,
        techCircle,
        rdcCircle,
        shariaCircle,
        governanceCircle

    );
    lingBiruMudaKecil.attr(lightBlueCircleAttr);

    var txtBiruMudaKecil = os.set();
    txtBiruMudaKecil.push(
        secretariatText,
        orgDivisionText,
        acadHRDText,
        lawAndRegulationText,
        foreignAffairsText,
        PRText,
        rndText,
        techText,
        rdcText,
        shariaText,
        governanceText

    );
    txtBiruMudaKecil.attr(lightBlueSmallTextAttr);
}
    
</script>

<?php get_footer(); ?>