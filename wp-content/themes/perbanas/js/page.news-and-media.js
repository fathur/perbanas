function page_probank_magazine_init() {
	select2_init();
}

function gallery_photo_list_init() {
	$('dl').removeClass();
	$('dl').addClass('col-xs-12 col-sm-6 col-md-3 block photo-gallery-photo-list-item');
	$('dt').removeClass();
	$('dt').addClass('square');
	$('dt img').addClass('img-responsive');
	$('dt img').css('width', 255);
	$('.gallery img').css('border', 0);
	$('.gallery br').remove();
}