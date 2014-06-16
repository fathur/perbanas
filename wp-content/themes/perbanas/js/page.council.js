function select2_init() {
    $('select').select2().on("change", function (e) {
        window.location.href = e.val;
    });
}
function page_regional_board_single_init() {
	select2_init();
}
function page_subsector_single_init() {
	select2_init();
}