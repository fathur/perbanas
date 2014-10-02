function page_general_init() {
    /* ALL screen sizes */
    new FastClick(document.body);
    // init carousel
    $('#featured-slider').carousel({interval: 5000});
    $('#partner-slider').carousel({interval: 5000});

    // init bootstrap affix for both mobile and desktop. call resetAffixNavigation again at breakpoints
    resetAffixNavigation();
    onResize(resetAffixNavigation);
    /* end ALL screen sizes */

    /* desktop only */
    onScroll(onNavbarMenuThresholdReached);

    // what was this code for?
    onResize(function() {
        onScroll(onNavbarMenuThresholdReached);
    });

    /**
     * Merapihkan menu ketika di tengah halaman terjadi refresh
     * supaya logonya muncul
     */
    var paddingNarrow, paddingWide;
    
    // 15 px untuk perbedaan perhitungan antara ukuran sebenarnya dengan window width
    if (($(window).width() + 15) >= 1200) {
        paddingNarrow = '40px';
        paddingWide = '46px';

    }
    else if (($(window).width() + 15) >= 992 && ($(window).width() + 15) < 1200) {
        paddingNarrow = '23px';
        paddingWide = '30px';

    }

    var currentPosition = $(this).scrollTop();

    if (currentPosition > 217) {

        adjustNavbarMenu(true, paddingNarrow);
        $('#navbar-main li.first').css({
            'padding-right': paddingNarrow
        });
        $('#navbar-main li.last').css({
            'padding-left': paddingNarrow
        });
        $('#navbar-main li').not('.first').not('.last').css({
            'padding-right': paddingNarrow,
            'padding-left': paddingNarrow
        });
    } else if (currentPosition > 217) {
        adjustNavbarMenu(false, paddingNarrow);
         $('#navbar-main li.first').css({
            'padding-right': paddingNarrow
        });
        $('#navbar-main li.last').css({
            'padding-left': paddingNarrow
        });
        $('#navbar-main li').not('.first').not('.last').css({
            'padding-right': paddingNarrow,
            'padding-left': paddingNarrow
        });
    };

    /**
     * On resizenya disini
     */
    $(window).resize(function() {
        var paddingNarrow, paddingWide;
    
        // 15 px untuk perbedaan perhitungan antara ukuran sebenarnya dengan window width
        if (($(window).width() + 15) >= 1200) {
            paddingNarrow = '40px';
            paddingWide = '46px';

        }
        else if (($(window).width() + 15) >= 992 && ($(window).width() + 15) < 1200) {
            paddingNarrow = '23px';
            paddingWide = '30px';

        }

        var currentPosition = $(this).scrollTop();

        if (currentPosition > 217) {

            adjustNavbarMenu(true, paddingNarrow);
            $('#navbar-main li.first').css({
                'padding-right': paddingNarrow
            });
            $('#navbar-main li.last').css({
                'padding-left': paddingNarrow
            });
            $('#navbar-main li').not('.first').not('.last').css({
                'padding-right': paddingNarrow,
                'padding-left': paddingNarrow
            });
        } else if (currentPosition > 217) {
            adjustNavbarMenu(false, paddingNarrow);
             $('#navbar-main li.first').css({
                'padding-right': paddingNarrow
            });
            $('#navbar-main li.last').css({
                'padding-left': paddingNarrow
            });
            $('#navbar-main li').not('.first').not('.last').css({
                'padding-right': paddingNarrow,
                'padding-left': paddingNarrow
            });
        };
    });

    /**
     * Hmmmm apa ya?
     */
    sidebarAffix();
    setupTopNav();
    setupResponsiveNav();
}
