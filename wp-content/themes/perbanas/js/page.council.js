function page_regional_board_single_init() {
    $('select').select2().on("change", function (e) {
        window.location.href = e.val;
    });
}