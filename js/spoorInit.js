var spoorInit = function() {

	// Alle lokale links worden gescrolld en niet ververst
	$.localScroll();

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
}