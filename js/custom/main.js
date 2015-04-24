function centerText() {

	var containerH, textH, margin;

	$('.text-container').each(function(){

		containerH = $(this).outerHeight();
		textH = $(this).find('.text-wrap').outerHeight();
		margin = (containerH - textH) / 2;
		
		$(this).find('.text-wrap').css({
			marginTop: margin,
			marginBottom: margin
		});

	});

}

$(window).load(function(){
	centerText();
});