var spoorInit = function() {

	var pageWidth = $(window).width();

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
		if ( sidebarHeight < pageHeight && pageWidth > 810 ) {
			$(sidebar).addClass( 'sticker' );
			$('.sticker').stickySidebar({speed: 400, padding: 30, constrain: true});
		}
	}

	stickySidebar();

	// Mobile Header Menu
	function set_mobile_menu() {
		var button = $('#showMobileMenu');
		var menu = $('.mobile_header_nav');
		var toggle = false;
		button.click(function() {
			if ( pageWidth < 810 && toggle == false ) {
				menu.show('drop');
				this.innerHTML = 'Verberg Menu' ;
				toggle = true;
			} else if (pageWidth < 810 && toggle == true ) {
				menu.hide( 'drop' );
				this.innerHTML = 'Menu';
				toggle = false;
			}
		});
	}
	
	set_mobile_menu();


	// Slider

	function set_slider() {
		var slider = $('#slider');
		if(slider !== null) {
			slider.nivoSlider({
				effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
				slices: 15, // For slice animations
				boxCols: 8, // For box animations
				boxRows: 4, // For box animations
				animSpeed: 1000, // Slide transition speed
				pauseTime: 10000, // How long each slide will show
				startSlide: 0, // Set starting Slide (0 index)
				directionNav: false, // Next & Prev navigation
				controlNav: true, // 1,2,3... navigation
				controlNavThumbs: false, // Use thumbnails for Control Nav
				pauseOnHover: true, // Stop animation while hovering
				manualAdvance: false, // Force manual transitions
				prevText: 'Vorige', // Prev directionNav text
				nextText: 'Volgende', // Next directionNav text
				randomStart: false, // Start on a random slide
				beforeChange: function(){}, // Triggers before a slide transition
				afterChange: function(){}, // Triggers after a slide transition
				slideshowEnd: function(){}, // Triggers after all slides have been shown
				lastSlide: function(){}, // Triggers when last slide is shown
				afterLoad: function(){} // Triggers when slider has loaded
			});
		}
	}
	set_slider();
}
	