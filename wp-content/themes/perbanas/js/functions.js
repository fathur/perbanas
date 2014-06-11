// general

// list of constants
NAVBAR_THRESHOLD = 217; // 217px (the height of header)

// list of Perbanas callbacks
function onResize(callback) {
    $(window).resize(function() {
        if (true) {
            callback();
        }
    })
}

function onScroll(callback) {
    $(window).scroll(callback);
}
function onScrollOff(callback) {
    $(window).off('scroll', callback);
}
// callback actions
function resetAffixNavigation() {
    $(window).off('.affix');
    $('#navbar-main').removeData('bs.affix').removeClass('affix affix-top affix-bottom');
    $('#navbar-main').affix({ offset: $('.header').outerHeight(true)});
}

var state = false;
function onNavbarMenuThresholdReached() {
    var paddingNarrow;
    var paddingWide;
    if ($(window).width() > 1199) {
        paddingNarrow = '40px';
        paddingWide = '46px';
    }
    else if ($(window).width() > 992 && $(window).width() <= 1199) {
        paddingNarrow = '23px';
        paddingWide = '30px';
    }
    else {
        // do nothing
    }
    var currentPosition = $(this).scrollTop();
    if (currentPosition > NAVBAR_THRESHOLD && state) {
        adjustNavbarMenu(true, paddingNarrow, paddingWide);
        state = !state;
    }
    else if (currentPosition < NAVBAR_THRESHOLD && !state) {
        adjustNavbarMenu(false, paddingNarrow, paddingWide);
        state = !state;
    }
}

function adjustNavbarMenu(expand, paddingNarrow, paddingOriginal) {
    var value = expand == true ? paddingNarrow : paddingOriginal;

    if (expand) {
        $('#navbar-main .navbar-main-scrolled-menu-logo').fadeIn();
    }
    else {
        $('#navbar-main .navbar-main-scrolled-menu-logo').fadeOut(10);
    }
    $('#navbar-main li.first').animate({
            'padding-right': value
        },
        'fast', // how fast we are animating
        'swing', // the type of easing
        function() {
            // Animation complete.
        }
    );
    $('#navbar-main li.last').animate({
            'padding-left': value
        },
        'fast', // how fast we are animating
        'swing', // the type of easing
        function() {
            // Animation complete.
        }
    );
    $('#navbar-main li').not('.first').not('.last').animate({
            'padding-left': value,
            'padding-right': value
        },
        'fast', // how fast we are animating
        'swing', // the type of easing
        function() {
            // Animation complete.
        }
    );
}


// event upcoming
function toggleEventDetailVisibility() {
}

// contact
function initGoogleMaps() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');
    var map = undefined;
    if (mapElement) {
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 16,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(-6.217537, 106.82892), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [
                {
                    "featureType": "water",
                    "stylers": [
                        { "color": "#b3e4ff" }
                    ]
                },
                {
                    "featureType": "landscape",
                    "stylers": [
                        { "color": "#e7ecf0" }
                    ]
                },
                {
                    "featureType": "road.local",
                    "stylers": [
                        { "color": "#feffff" },
                        { "visibility": "simplified" }
                    ]
                },
                {
                    "featureType": "poi.school",
                    "elementType": "geometry",
                    "stylers": [
                        { "weight": 0.1 },
                        { "lightness": -24 },
                        { "color": "#ebf8ff" }
                    ]
                }
            ]
        };

        // Create the Google Map using out element and options defined above
        map = new google.maps.Map(mapElement, mapOptions);
    }
}
