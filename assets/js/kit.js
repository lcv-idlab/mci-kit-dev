// KIT JS

//*** KIT MAIN PAGE: open/close categories tabs in mobile view ***//

window.onload = function() {

	// nav hamburger main menu button
	$('#menu-button').click(function() {
		$(this).toggleClass('open');
		$('#main-menu').toggleClass('open');
	});


	$(".single-kits-container").each(function() {
		$(this).attr('id', $(this).height());
		$(this).css({height: '0px'});
		$(this).addClass("closed");
	})
		
	// kit main buttons open
	$(".cat-button-open").click(function(e) {
		$(e.target).parent().next().toggleClass("closed");		// get the next item (the ".single-kits-container") and close/open it
		$(e.target).parent().next().hasClass("closed") ? $(e.target).parent().next().css({ height: ""}) : $(e.target).parent().next().css({ height: $(e.target).parent().next().attr('id')+'px'});
		$(e.target).toggleClass("open");
	})

	$(".cat-button-open span").click(function(e) {
		$(e.target).parent().parent().next().toggleClass("closed");		// get the next item (the ".single-kits-container") and close/open it
		$(e.target).parent().parent().next().hasClass("closed") ? $(e.target).parent().parent().next().css({ height: ""}) : $(e.target).parent().parent().next().css({ height: $(e.target).parent().parent().next().attr('id')+'px'});
		$(e.target).parent().toggleClass("open");
	})

};