function calculateHeight(){
    var H=$(window).height();
    return H;
}

function openViewport(H){
    fHistViewport(H);
    $(window).bind("scroll", function(event) {fHistViewport(H); }); //end scroll
    $(window).resize(function(){ fHistViewport(H);});
}//end function openViewoirt()

var a;
function fHistViewport(H){
    var collections = $(".animate li:in-viewport(-"+H+")");

    collections.each(function() {
        $(this).addClass("goPop");
        $(this).siblings().removeClass("goPop");
    });
}//end function  fViewport()

function page_about_who_we_are_init() {
    // history
    var H = Math.round(calculateHeight()/2);
    openViewport(H);

    // vision mission
    if ($(window).width() > 991) {
        $('.about-who-we-are .vision').parallax("75%", 0.2);
    }

    // chairmans
    $('#former-chairmen').carousel({interval: 5000});
}
