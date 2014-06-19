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

    sidebarAffix();
    setupTopNav();
    setupResponsiveNav();
}
