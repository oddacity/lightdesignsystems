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

function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam) {
            return sParameterName[1];
        }
    }
}      

$(window).load(function(){
	centerText();

	$(".lazy").lazyload({
	    effect : "fadeIn",
	    threshold : 500
	});

	$('.menu-toggle').click(function(){
		$('.main-navigation').toggleClass('toggled');
	});

	if ($('body').hasClass('page-template-template-purchase-php')) {
		var param = getUrlParameter('kit');
		param = decodeURIComponent(param);

		$('.interested-in').val(param);
	}

	if ($('body').hasClass('single-products')) {
		var btn = $('#purchase-btn');
		var kit = $('#kit-title').text();
		
		btn.click(function(e){
			e.preventDefault();
			
			if (kit != undefined || kit != null) {
				// window.location = '/purchase?kit=' + kit;
		    	window.location = 'http://www.oddacity.com/lds/purchase?kit=' + kit;
		    }

		});
	}
	
});