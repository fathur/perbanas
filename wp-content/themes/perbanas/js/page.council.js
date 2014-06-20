function overlay_mobile_init() {
    $('.item').click(function() { $(this).toggleClass('active'); });
}

function page_regional_board_single_init() {
	select2_init();
}
function page_subsector_single_init() {
	select2_init();
	overlay_mobile_init();
}
function page_advisoryboard_init() {
	overlay_mobile_init();
}
function page_boardmember_init() {
	overlay_mobile_init();
}
function page_supervisoryboard_init() {
	overlay_mobile_init();
}
function page_secretariat_init() {
	overlay_mobile_init();
}