var spoorInit = function() {

	// Alle lokale links worden gescrolld en niet ververst
	$.localScroll();

	// De huidige pagina in het menu kan niet geklikt worden
	$('.current-menu-item').click(function(event) {
		event.preventDefault();
	});

	// De functies voor de rollovers op de voorpagina
	$('#revealWrapAds').mouseenter(function() {
		$('#hiddenAds').show('drop');
	});
	$('#revealWrapAds').mouseleave(function() {
		$('#hiddenAds').hide('blind');
	});

	$('#revealWrapKdb').mouseenter(function() {
		$('#hiddenKdb').show('drop');
	});
	$('#revealWrapKdb').mouseleave(function() {
		$('#hiddenKdb').hide('blind');
	});

	$('#revealWrapIct').mouseenter(function() {
		$('#hiddenIct').show('drop');
	});
	$('#revealWrapIct').mouseleave(function() {
		$('#hiddenIct').hide('blind');
	});

	// De sidebar op de pagina's blijft plakken, als de sidebar niet groter is dan de pagina

	function stickySidebar() {
		var sidebar = $('#sidebarPageWrap');
		var pageHeight = $(window).height();
		var sidebarHeight = $(sidebar).height();
		if ( sidebarHeight < pageHeight ) {
			$(sidebar).addClass( 'pinned' );
		}
	}

	stickySidebar();

	$('.pinned').pin();
}